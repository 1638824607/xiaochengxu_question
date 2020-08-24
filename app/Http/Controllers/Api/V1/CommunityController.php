<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Community\Advisory;
use App\Model\Community\AdvisoryOrder;
use App\Model\Community\Post;
use App\Model\Community\PostCollect;
use App\Model\Community\PostComment;
use App\Model\Community\PostPraise;
use App\Model\Community\PostShare;
use App\Model\User\User;

/**
 * @group Community
 * 互动社区
 */
class CommunityController extends BaseController
{
    /**
     * postList
     * 帖子列表
     * @bodyParam user_id int required 用户id
     * @bodyParam token   int required 用户token
     * @bodyParam page    int 页数
     * @bodyParam cate_id int 分类id
     * @responseFile responses/community/postList.json
     */
    public function postList()
    {
        $postList = Post::with(['user'])->orderBy('created_at', 'desc')
            ->simplePaginate(10);
        $collectPostIDs = [];
        $praisePostIDs = [];
        if($postList)
        {
            $postList = $postList->toArray();
            $postIDs = array_column($postList['data'],'id');
            $commentList = PostCollect::whereIn('post_id',$postIDs)->where(['user_id'=>$this->userInfo['id']])->get();
            if($commentList)
            {
                $collectPostIDs = array_column($commentList->toArray(),'post_id');
            }
            $commentList = PostPraise::whereIn('post_id',$postIDs)->where(['user_id'=>$this->userInfo['id']])->get();
            if($commentList)
            {
                $praisePostIDs = array_column($commentList->toArray(),'post_id');
            }

            foreach($postList['data'] as $key=>$item)
            {
                if(in_array($item['id'],$collectPostIDs))
                {
                    $postList['data'][$key]['is_collect'] = 1;
                }else{
                    $postList['data'][$key]['is_collect'] = 0;
                }

                if(in_array($item['id'],$praisePostIDs))
                {
                    $postList['data'][$key]['is_praise'] = 1;
                }else{
                    $postList['data'][$key]['is_praise'] = 0;
                }
            }

        }


        return $this->retData($postList);
    }

    /**
     * postDetail
     * 帖子详情
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/community/postDetail.json
     */
    public function postDetail()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postId = request('post_id', 0);

        $postDetail = Post::with(['user', 'postPraise' => function ($q) {
            $q->where('user_id', $this->userInfo['id']);
        }])->where(['id' => $postId, 'status' => 1])->first();

        if (empty($postDetail)) {
            return $this->retJson(400, '帖子已被屏蔽');
        }

        $postDetail->increment('view_num');

        return $this->retData($postDetail);
    }

    /**
     * postCommentList
     * 帖子评论列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  page    int 页数
     * @responseFile responses/community/postCommentList.json
     */
    public function postCommentList()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postId = request('post_id', 0);

        $postCommentList = PostComment::with(['user', 'toUser', 'commentPriase' => function ($q) {
            $q->where('user_id', $this->userInfo['id']);
        }])->where(['comment_id' => 0, 'post_id' => $postId, 'status' => 1])
            ->orderBy('created_at', 'desc')->simplePaginate(10)->toArray();

        if (! empty($postCommentList['data'])) {
            foreach ($postCommentList['data'] as &$v) {
                $v['reply_list'] = PostComment::with(['user', 'toUser', 'commentPriase' => function ($q) {
                    $q->where('user_id', $this->userInfo['id']);
                }])->where(['comment_id' => $v['id'], 'status' => 1])->get()->toArray();
            }
        }

        return $this->retData($postCommentList);
    }

    /**
     * sendPostComment
     * 发送帖子评论
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  comment_id int required 帖子评论id
     * @bodyParam  comment_content string required 帖子评论内容
     * @bodyParam  to_user_id int required 对方用户id
     * @responseFile responses/community/sendPostComment.json
     */
    public function sendPostComment()
    {
        $this->validator([
            'post_id'         => 'required',
            'comment_id'      => 'required',
            'comment_content' => 'required',
            'to_user_id'      => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '获取帖子失败');
        }

        PostComment::create([
            'post_id'    => request('post_id'),
            'user_id'    => $this->userInfo['id'],
            'to_user_id' => request('to_user_id'),
            'comment_id' => request('comment_id'),
            'content'    => request('comment_content')
        ]);

        Post::where('id', request('post_id'))->increment('comment_num');

        return $this->retJson(0, '发送评论成功');
    }

    /**
     * praisePost
     * 帖子点赞
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/community/praisePost.json
     */
    public function praisePost()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        $userPraiseInfo = PostPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'type' => 1])->first();

        if (empty($userPraiseInfo)) {
            PostPraise::create([
                'post_id'    => $postInfo['id'],
                'user_id'    => $this->userInfo['id'],
                'to_user_id' => $postInfo['user_id'],
                'type'       => 1
            ]);

            Post::where('id', $postInfo['id'])->increment('praise_num');

            return $this->retJson(0, '帖子点赞成功');
        }

        PostPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'type' => 1])->delete();
        Post::where('id', $postInfo['id'])->decrement('praise_num');

        return $this->retJson(0, '帖子取消点赞成功');
    }

    /**
     * praisePostComment
     * 帖子评论/回复点赞
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  comment_id int required 帖子评论/回复id
     * @responseFile responses/community/praisePostComment.json
     */
    public function praisePostComment()
    {
        $this->validator([
            'post_id'    => 'required',
            'comment_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo        = Post::where(['id' => request('post_id'), 'status' => 1])->first();
        $postCommentInfo = PostComment::where(['id' => request('comment_id'), 'status' => 1])->first();

        if (empty($postInfo) || empty($postCommentInfo)) {
            return $this->retJson(201, '帖子或评论不存在');
        }

        if ($postCommentInfo['user_id'] == $this->userInfo['id']) {
            return $this->retJson(201, '不能给自己点赞');
        }

        $userPraiseInfo = PostPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'comment_id' => request('comment_id'), 'type' => 2])->first();

        if (empty($userPraiseInfo)) {
            PostPraise::create([
                'post_id'    => $postInfo['id'],
                'comment_id' => $postCommentInfo['id'],
                'user_id'    => $this->userInfo['id'],
                'to_user_id' => $postCommentInfo['user_id'],
                'type'       => 2
            ]);

            PostComment::where('id', $postCommentInfo['id'])->increment('praise_num');
            Post::where('id', $postInfo['id'])->increment('praise_num');

            return $this->retJson(0, '评论点赞成功');
        }

        PostPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'comment_id' => $postCommentInfo['id'], 'type' => 2])->delete();
        PostComment::where('id', $postCommentInfo['id'])->decrement('praise_num');
        Post::where('id', $postInfo['id'])->decrement('praise_num');
        return $this->retJson(0, '评论取消点赞成功');
    }

    /**
     * collectPost
     * 帖子收藏/取消收藏
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/community/collectPost.json
     */
    public function collectPost()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        $userCollectInfo = PostCollect::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id']])->first();

        if (empty($userCollectInfo)) {
            PostCollect::create([
                'post_id'    => $postInfo['id'],
                'user_id'    => $this->userInfo['id'],
                'to_user_id' => $postInfo['user_id'],
            ]);

            Post::where('id', $postInfo['id'])->increment('collect_num');

            return $this->retJson(0, '帖子收藏成功');
        }

        PostCollect::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id']])->delete();
        Post::where('id', $postInfo['id'])->decrement('collect_num');

        return $this->retJson(0, '帖子取消收藏成功');
    }

    /**
     * sharePost
     * 帖子分享
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/community/sharePost.json
     */
    public function sharePost()
    {
        $this->validator([
            'post_id'    => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        PostShare::create([
            'post_id'    => request('post_id'),
            'user_id'    => $this->userInfo['id'],
        ]);

        return $this->retJson(0, '分享成功');
    }

    /**
     * sendPost
     * 发帖
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  title string required 标题
     * @bodyParam  content string required 帖子内容
     * @bodyParam  images string required 帖子图片地址json src thumb_src
     * @responseFile responses/community/sendPost.json
     */
    public function sendPost()
    {

        $this->validator([
            'title'    => 'required',
            'content'  => 'required',
            'images'   => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        Post::create([
            'user_id'       => $this->userInfo['id'],
            'title'         => request('title'),
            'content'       => htmlspecialchars(request('content')),
            'status'        => 1,
            'images'        => request('images'),
            'create_day'    => date('Y-m-d')
        ]);

        User::where('id', $this->userInfo['id'])->increment('publish_post_num');

        return $this->retJson(0, '发帖成功');
    }

    /**
     * advisoryList
     * 咨询求助列表
     * @responseFile responses/community/advisoryList.json
     */
    public function advisoryList()
    {
        $advisoryList = Advisory::get();

        return $this->retData($advisoryList);
    }

    /**
     * advisoryOrder
     * 咨询预约
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  advisory_id int required 咨询老师id
     * @bodyParam  order_at datetime required 预约时间
     * @responseFile responses/community/advisoryOrder.json
     */
    public function advisoryOrder()
    {
        $this->validator([
            'advisory_id' => 'required',
            'user_id'     => 'required',
            'order_at'    => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $advisoryOrderInfo = AdvisoryOrder::where(['advisory_id' => request('advisory_id'), 'user_id' => request('user_id')])
            ->first();

        if(! empty($advisoryOrderInfo) && $advisoryOrderInfo['status'] == 1) {
            return $this->retJson(201, '您已预约');
        }

        AdvisoryOrder::create([
            'advisory_id' => request('advisory_id'),
            'user_id'     => request('user_id'),
            'order_at'    => request('order_at'),
        ]);

        return $this->retJson(0, '您已成功预约');
    }

    /**
     * advisoryOrderEdit
     * 咨询预约修改
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  id int required 预约id
     * @bodyParam  order_at datetime required 预约时间
     * @responseFile responses/community/advisoryOrderEdit.json
     */
    public function advisoryOrderEdit()
    {
        $advisoryOrderInfo = AdvisoryOrder::where(['id' => request('id'), 'user_id' => request('user_id')])
            ->first();

        if(empty($advisoryOrderInfo)) {
            return $this->retJson(201, '未找到预约记录');
        }

        AdvisoryOrder::where('id', request('id'))->update([
            'order_at'  => request('order_at'),
        ]);

        return $this->retJson(0, '预约时间已更改');
    }
}
