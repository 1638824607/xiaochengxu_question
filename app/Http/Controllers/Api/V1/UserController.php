<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Community\AdvisoryOrder;
use App\Model\Community\Post;
use App\Model\Community\PostCollect;
use App\Model\Community\PostComment;
use App\Model\Community\PostPraise;
use App\Model\Knowledge\HealthRecord;
use App\Model\Knowledge\MatchRecord;
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
     * @bodyParam  nick_name string required 昵称
     * @bodyParam  sex string required 性别 男|女
     * @bodyParam  avatar string required 头像
     * @responseFile responses/user/userInfoEdit.json
     */
    public function userInfoEdit()
    {
        $this->validator([
            'nick'   => 'required',
            'sex'    => 'required',
            'avatar' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        User::where('id', request('user_id'))->update([
            'nick' => request('nick'),
            'sex'       => request('sex'),
            'avatar'    => request('avatar'),
        ]);

        return $this->retJson(0, '编辑资料成功');
    }

    /**
     * matchRecordList
     * 知识竞赛自测记录
     * @bodyParam  user_id int required 用户id
     * @bodyParam  page int required 页数
     * @responseFile responses/user/matchRecordList.json
     */
    public function matchRecordList()
    {
        $matchRecordList = MatchRecord::with('match')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($matchRecordList);
    }

    /**
     * healthRecordList
     * 健康自测自测记录
     * @bodyParam  user_id int required 用户id
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

        $userPraiseList = PostPraise::with(['toUser'])->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($userPraiseList);
    }

    /**
     * userCollectList
     * 用户收藏列表
     * @bodyParam  user_id int required 用户id
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
     * @bodyParam  page    int 页数
     * @responseFile responses/user/userAdvisoryOrder.json
     */
    public function userAdvisoryOrder()
    {
        $advisoryOrderList = AdvisoryOrder::with('advisory')->where('user_id', request('user_id'))->simplePaginate(10);

        return $this->retData($advisoryOrderList);
    }
}