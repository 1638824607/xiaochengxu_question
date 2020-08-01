<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Post\Post;
use App\Model\Post\PostCate;
use App\Model\Post\PostComment;
use App\Model\Post\PostReport;
use App\Model\User\User;
use App\Model\User\UserPraise;
use App\Model\User\UserShare;
use Illuminate\Http\Request;

/**
 * @group post
 * 帖子
 */
class PostController extends BaseController
{
    /**
     * cateList
     * 帖子分类列表
     * @responseFile responses/post/cateList.json
     */
    public function cateList()
    {
        $postCateList = PostCate::where('status', 1)->orderBy('sort', 'desc')->get(['id', 'name', 'color', 'sort']);

        return $this->retData($postCateList);
    }

    /**
     * postList
     * 帖子列表
     * @bodyParam cate_id int 分类id
     * @responseFile responses/post/postList.json
     */
    public function postList()
    {
        $this->validator([
            'cate_id' => 'present',
        ], [
            'present' => '缺少必要的参数',
        ]);

        $cateId = request('cate_id');

        $where = [
            'status' => 1
        ];

        if (! empty($cateId)) {
            $where['cate_id'] = $cateId;
        }

        $postList = Post::with(['user', 'userPraise' => function ($q) {
            $q->where('user_id', $this->userInfo['id']);
        }])->where($where)->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return $this->retData($postList);
    }

    /**
     * postHotList
     * 帖子热点列表
     * @responseFile responses/post/postHotList.json
     */
    public function postHotList()
    {
        //加个热点字段；
        $postHotList = Post::with(['user', 'userPraise' => function ($q) {
            $q->where('user_id', $this->userInfo['id']);
        }])->where(['status' => 1, 'is_hot' => 1])->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return $this->retData($postHotList);
    }

    /**
     * searchList
     * 搜索列表
     * @bodyParam  search string required 搜索内容
     * @responseFile responses/post/searchList.json
     */
    public function searchList()
    {
        $this->validator([
            'search' => 'required',
        ], [
            'required' => '请输入搜索内容',
        ]);

        $postList = Post::with(['user'])->where('status', 1)
            ->where('post_content', 'like', '%'. request('search') .'%')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        $userList = User::where('nick_name', 'like', '%'.request('search').'%')->where('status', 1)->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return $this->retData([[
            'type' => 1,
            'name' => '用户',
            'list' => $userList
        ],[
            'type' => 2,
            'name' => '帖子',
            'list' => $postList
        ]]);
    }

    /**
     * searchTypeList
     * 搜索分类列表
     * @bodyParam  search string required 搜索内容
     * @bodyParam  type int required 搜索类型 1用户 2帖子
     * @bodyParam  page int required 页数
     * @responseFile responses/post/searchTypeList.json
     */
    public function searchTypeList()
    {
        $this->validator([
            'search' => 'required',
            'type'   => 'required',
            'page'   => 'present',
        ], [
            'required' => '缺少必要的参数',
            'present'  => '缺少必要的参数',
        ]);

        $searchType = request('type');

        if($searchType == 1)
        {
            $userList = User::where('nick_name', 'like', '%'.request('search').'%')->where('status', 1)->orderBy('created_at', 'desc')
                ->simplePaginate(10);

            return $this->retData($userList);
        }

        if($searchType == 2)
        {
            $postList = Post::with(['user'])->where('status', 1)
                ->where('post_content', 'like', '%'.request('search').'%')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(10);

            return $this->retData($postList);
        }

        return $this->retJson(201, '请选择搜索的类型');
    }

    /**
     * postDetail
     * 帖子详情
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/post/postDetail.json
     */
    public function postDetail()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postId = request('post_id', 0);

        $postDetail = Post::with(['user', 'userPraise' => function ($q) {
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
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/post/postCommentList.json
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
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  comment_id int required 帖子评论id
     * @bodyParam  comment_content string required 帖子评论内容
     * @bodyParam  to_user_id int required 对方用户id
     * @responseFile responses/post/sendPostComment.json
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
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/post/praisePost.json
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

        $userPraiseInfo = UserPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'type' => 1])->first();

        if (empty($userPraiseInfo)) {
            UserPraise::create([
                'post_id'    => $postInfo['id'],
                'user_id'    => $this->userInfo['id'],
                'to_user_id' => $postInfo['user_id'],
                'type'       => 1
            ]);

            Post::where('id', $postInfo['id'])->increment('praise_num');

            return $this->retJson(0, '帖子点赞成功');
        }

        UserPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'type' => 1])->delete();
        Post::where('id', $postInfo['id'])->decrement('praise_num');

        return $this->retJson(0, '帖子取消点赞成功');
    }

    /**
     * praisePostComment
     * 帖子评论/回复点赞
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  comment_id int required 帖子评论/回复id
     * @responseFile responses/post/praisePostComment.json
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

        $userPraiseInfo = UserPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'comment_id' => request('comment_id'), 'type' => 2])->first();

        if (empty($userPraiseInfo)) {
            UserPraise::create([
                'post_id'    => $postInfo['id'],
                'comment_id' => $postCommentInfo['id'],
                'user_id'    => $this->userInfo['id'],
                'to_user_id' => $postCommentInfo['user_id'],
                'type'       => 2
            ]);

            PostComment::where('id', $postCommentInfo['id'])->increment('praise_num');

            return $this->retJson(0, '评论点赞成功');
        }

        UserPraise::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id'], 'comment_id' => $postCommentInfo['id'], 'type' => 2])->delete();
        PostComment::where('id', $postCommentInfo['id'])->decrement('praise_num');

        return $this->retJson(0, '评论取消点赞成功');
    }

    /**
     * reportPost
     * 帖子举报
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  report_content string required 举报内容
     * @responseFile responses/post/reportPost.json
     */
    public function reportPost()
    {
        $this->validator([
            'post_id'        => 'required',
            'report_content' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        if ($postInfo['user_id'] == $this->userInfo['id']) {
            return $this->retJson(201, '不能举报自己');
        }

        $postReportInfo = PostReport::where(['post_id' => $postInfo['id'], 'user_id' => $this->userInfo['id']])->first();

        if (! empty($postReportInfo)) {
            return $this->retJson(201, '帖子已举报');
        }

        PostReport::create([
            'post_id'        => $postInfo['id'],
            'cate_id'        => $postInfo['cate_id'],
            'user_id'        => $this->userInfo['id'],
            'report_content' => htmlspecialchars(request('report_content'))
        ]);

        return $this->retJson(0, '举报成功');
    }

    /**
     * sharePost
     * 帖子分享
     * @bodyParam  post_id int required 帖子id
     * @bodyParam  share_type int required 分享方式 1-微信 2-微博 3-QQ
     * @responseFile responses/post/sharePost.json
     */
    public function sharePost()
    {
        $this->validator([
            'post_id'    => 'required',
            'share_type' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if (empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        UserShare::create([
            'post_id'    => request('post_id'),
            'user_id'    => $this->userInfo['id'],
            'share_type' => request('share_type'),
        ]);

        return $this->retJson(0, '分享成功');
    }

    /**
     * sendPost
     * 发帖
     * @bodyParam  cate_id int required 分类id
     * @bodyParam  post_content string required 帖子内容
     * @bodyParam  post_type int required 帖子类型 1-图片 2-视频
     * @bodyParam  source string required 帖子图片/视频地址json source_src source_thumb_src
     * @bodyParam  phone_model string  手机型号
     * @bodyParam  post_position string  发帖位置
     * @responseFile responses/post/sendPost.json
     */
    public function sendPost()
    {
        $this->validator([
            'cate_id'       => 'required',
            'post_content'  => 'required',
            'post_type'     => 'required',
            'source'        => 'required',
            'phone_model'   => 'present',
            'post_position' => 'present',
        ], [
            'required' => '缺少必要的参数',
            'present'  => '缺少必要的参数',
        ]);

        $postCateInfo = PostCate::where('id', request('cate_id'))->first();

        if (empty($postCateInfo)) {
            return $this->retJson(201, '分类不存在');
        }

        Post::create([
            'cate_id'       => $postCateInfo['id'],
            'user_id'       => $this->userInfo['id'],
            'post_content'  => htmlspecialchars(request('post_content')),
            'phone_model'   => request('phone_model'),
            'post_position' => request('post_position'),
            'post_type'     => request('post_type'),
            'status'        => 1,
            'source'        => request('source'),
            'create_day'    => date('Y-m-d')
        ]);

        return $this->retJson(0, '发帖成功');
    }
}
