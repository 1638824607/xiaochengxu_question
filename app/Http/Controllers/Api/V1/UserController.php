<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Community\AdvisoryOrder;
use App\Model\Community\Post;
use App\Model\Community\PostCollect;
use App\Model\Community\PostComment;
use App\Model\Community\PostPraise;
use App\Model\Knowledge\HealthRecord;
use App\Model\Knowledge\MatchRecord;
use App\Model\Train\Game;
use App\Model\Train\GameRecord;
use App\Model\User\System;
use App\Model\User\User;
use App\Model\User\UserCert;
use App\Model\User\UserFollow;
use App\Model\User\UserPraise;
use App\Model\User\UserSuggest;

/**
 * @group User
 * @authenticated
 * 用户
 */
class UserController extends BaseController
{
    /**
     * userInfo
     * 用户个人信息
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @responseFile responses/user/userInfo.json
     */
    public function userInfo()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userInfo = User::where(['id' => request('user_id')])->first();
        return $this->retData($userInfo);
    }

    /**
     * userInfoEdit
     * 用户信息修改
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  nick string required 昵称
     * @bodyParam  sex string  性别 男|女
     * @bodyParam  avatar string required 头像
     * @responseFile responses/user/userInfoEdit.json
     */
    public function userInfoEdit()
    {
        $this->validator([
            'nick'   => 'required',
            'sex'    => 'present',
            'avatar' => 'required',
        ], [
            'present' => '缺少必要的参数',
        ]);

        $updateData = [];

        if(! empty(request('nick'))) {
            $updateData['nick'] = request('nick');
        }

        if(! empty(request('sex'))) {
            $updateData['sex'] = request('sex');
        }

        if(! empty(request('avatar'))) {
            $updateData['avatar'] = request('avatar');
        }

        User::where('id', request('user_id'))->update($updateData);

        return $this->retJson(0, '编辑资料成功');
    }

    /**
     * matchRecordList
     * 知识竞赛自测记录
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page int required 页数
     * @responseFile responses/user/matchRecordList.json
     */
    public function matchRecordList()
    {
        $matchRecordList = MatchRecord::with('match')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($matchRecordList);
    }

    /**
     * gameRecordList
     * 游戏记录列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page int required 页数
     * @responseFile responses/user/matchRecordList.json
     */
    public function gameRecordList()
    {
        $gameRecordList = GameRecord::with('game')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($gameRecordList);
    }

    /**
     * healthRecordList
     * 健康自测自测记录
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page int required 页数
     * @responseFile responses/user/healthRecordList.json
     */
    public function healthRecordList()
    {
        $healthRecordList = HealthRecord::with('health')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($healthRecordList);
    }

    /**
     * userPostList
     * 用户帖子列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @responseFile responses/user/userPostList.json
     */
    public function userPostList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $where = ['user_id' => request('user_id')];

        $userPostList = Post::with('user')->where($where)->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return $this->retData($userPostList);
    }

    /**
     * userCommentedList
     * 用户回帖列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page int required 页数
     * @responseFile responses/user/userCommentedList.json
     */
    public function userCommentedList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userCommentList = Post::with('postComment')->where('user_id', request('user_id'))->simplePaginate(10)->toArray();

        if (! empty($userCommentList['data']))
        {
            foreach ($userCommentList['data'] as &$v) {
                if(empty($v['post_comment'])) {
                    continue;
                }

                foreach($v['post_comment'] as &$vv) {
                    $vv['reply_list'] = PostComment::with(['toUser'])->where(['comment_id' => $vv['id'], 'status' => 1])->get()->toArray();
                }
            }
        }

        return $this->retData($userCommentList);
    }


    public function userReplyList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);
        $postComment = PostComment::with(['toUser'])->where(['user_id' => request('user_id'), 'status' => 1])->simplePaginate(10)->toArray();
        if ($postComment){

            foreach ($postComment as &$v) {
                if($v['post_id']){
                    $v['post'] =$post= Post::where('id',$v['post_id'])->first->toArray();
                    $v['post']['user'] = User::where('id', $post['user_id'])->first()->toArray();
                }
                if($v['to_user_id']){
                    $v['reply_list'] = PostComment::with(['toUser'])->where(['user_id' => $v['to_user_id'], 'status' => 1])->get()->toArray();
                }
            }

        }

        return $this->retData($postComment);
    }


    public function userReplyDel()
    {
        $this->validator([
            'id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $res = PostComment::where('id', request('id'))->update([
            'status'  => 2,

        ]);
        if($res){
            return $this->retJson(0, '删除评论成功');
        }else{
            return $this->retJson(2, '删除评论失败');
        }
    }

    /**
     * userPraiseList
     * 用户点赞列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page    int 页数
     * @responseFile responses/user/userPraiseList.json
     */
    public function userPraiseList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userPraiseList = PostPraise::with(['toUser', 'post'])->where('user_id', request('user_id'))->simplePaginate(10);
        if (! empty($userPraiseList['data']))
        {
            foreach ($userPraiseList['data'] as &$v) {
                if(empty($v['post_comment'])) {
                    continue;
                }

                foreach($v['post_comment'] as &$vv) {
                    $vv['reply_list'] = PostComment::with(['toUser'])->where(['comment_id' => $vv['id'], 'status' => 1])->get()->toArray();
                }
            }
        }
        return $this->retData($userPraiseList);
    }

    /**
     * userCollectList
     * 用户收藏列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page    int 页数
     * @responseFile responses/user/userCollectList.json
     */
    public function userCollectList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userCollectList = PostCollect::with(['post'])->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($userCollectList);
    }

    /**
     * userAdvisoryOrder
     * 用户预约列表
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  page    int 页数
     * @responseFile responses/user/userAdvisoryOrder.json
     */
    public function userAdvisoryOrder()
    {
        $advisoryOrderList = AdvisoryOrder::with('advisory')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($advisoryOrderList);
    }
}
