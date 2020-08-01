<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Community\Post;
use App\Model\Community\PostComment;
use App\Model\User\System;
use App\Model\User\User;
use App\Model\User\UserCert;
use App\Model\User\UserFollow;
use App\Model\User\UserSuggest;

/**
 * @group user
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

        $userInfo = User::where(['id' => request('user_id'), 'status' => 1])->first();
        $userInfo['user_id'] = strval($userInfo['id']);
        return $this->retData($userInfo);
    }

    /**
     * userInfoEdit
     * 用户信息修改
     * @bodyParam  nick_name string required 昵称
     * @bodyParam  sex string required 性别 男|女
     * @bodyParam  avatar string required 头像
     * @bodyParam  desc string required 简介
     * @bodyParam  province string required 省份
     * @bodyParam  city string required 城市
     * @bodyParam  birthday string required 生日
     * @bodyParam  feeling string required 感情状态
     * @bodyParam  job string required 职业
     * @responseFile responses/user/userInfoEdit.json
     */
    public function userInfoEdit()
    {
        $this->validator([
            'nick_name' => 'required',
            'sex'       => 'required',
            'avatar'    => 'required',
            'desc'      => 'required',
            'province'  => 'required',
            'city'      => 'required',
            'birthday'  => 'required',
            'feeling'   => 'required',
            'job'       => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        User::where('id', $this->userInfo['id'])->update([
            'nick_name' => request('nick_name'),
            'sex'       => request('sex'),
            'avatar'    => request('avatar'),
            'desc'      => request('desc'),
            'province'  => request('province'),
            'city'      => request('city'),
            'birthday'  => request('birthday'),
            'feeling'   => request('feeling'),
            'job'       => request('job'),
        ]);

        return $this->retJson(0, '编辑资料成功');
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

        $userInfo = User::where(['id' => request('user_id'), 'status' => 1])->first();

        if (empty($userInfo)) {
            return $this->retJson(201, '用户不存在');
        }

        $where = ['user_id' => $userInfo['id']];

        if ($userInfo['id'] != $this->userInfo['id']) {
            $where['status'] = 1;
        }

        $userPostList = Post::with(['user', 'userPraise' => function ($q) {
            $q->where('user_id', $this->userInfo['id']);
        }])->where($where)->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return $this->retData($userPostList);
    }

    /**
     * userFollowStatus
     * 用户关注状态
     * @bodyParam  to_user_id int required 对方用户id
     * @responseFile responses/user/userFollowStatus.json
     */
    public function userFollowStatus()
    {
        $this->validator([
            'to_user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userFollowInfo = UserFollow::where(['user_id' => $this->userInfo['id'], 'to_user_id' => request('to_user_id')])->first();

        if (empty($userFollowInfo)) {
            return $this->retJson(0, '未关注', ['status' => 0]);
        }

        return $this->retJson(0, '已关注', ['status' => 1]);
    }

    /**
     * userFollow
     * 用户关注
     * @bodyParam  to_user_id int required 对方用户id
     * @responseFile responses/user/userFollow.json
     */
    public function userFollow()
    {
        $this->validator([
            'to_user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        if($this->userInfo['id'] == request('to_user_id')) {
            return $this->retJson(201, '不能关注自己');
        }

        $userFollowInfo = UserFollow::where(['user_id' => $this->userInfo['id'], 'to_user_id' => request('to_user_id')])->first();

        if (! empty($userFollowInfo)) {
            $userFollowInfo->delete();
            return $this->retJson(0, '已取消关注');
        }

        UserFollow::create([
            'user_id'    => $this->userInfo['id'],
            'to_user_id' => request('to_user_id'),
        ]);

        return $this->retJson(0, '关注成功');
    }

    /**
     * userFollowList
     * 用户关注列表
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/user/userFollowList.json
     */
    public function userFollowList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userFollowList = UserFollow::with('toUser')->where('user_id', request('user_id'))->get();

        return $this->retData($userFollowList);
    }

    /**
     * userFollowedList
     * 用户被关注列表
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/user/userFollowedList.json
     */
    public function userFollowedList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userFollowedList = UserFollow::with('user')->where('to_user_id', request('user_id'))->get();

        return $this->retData($userFollowedList);
    }

    /**
     * userCommentedList
     * 用户被评论列表
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/user/userCommentedList.json
     */
    public function userCommentedList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userCommentList = PostComment::with('user')->where('to_user_id', request('user_id'))->get();

        return $this->retData($userCommentList);
    }

    public function userPraiseList()
    {

    }

    /**
     * userPostSourceList
     * 用户相册列表
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/user/userPostSourceList.json
     */
    public function userPostSourceList()
    {
        $this->validator([
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userPostList = Post::where('user_id', request('user_id'))->where('status', 1)->orderBy('create_day', 'desc')->get();

        if (empty($userPostList)) {
            return $this->retJson(0, '暂无图片');
        }

        $userSourceList = [];

        foreach ($userPostList as $userPost) {
            if (empty($userPost['source'])) {
                continue;
            }

            if (empty($userPost['create_day'])) {
                continue;
            }

            if (empty($userSourceList[$userPost['create_day']])) {
                $userSourceList[$userPost['create_day']] = [];
            }

            $postSourceList = json_decode($userPost['source'], true);

            $userSourceList[$userPost['create_day']] = array_merge($userSourceList[$userPost['create_day']], $postSourceList);
        }

        return $this->retData($userSourceList);
    }

    /**
     * userCert
     * 用户认证
     * @bodyParam  truename string required 姓名
     * @bodyParam  tel string required 手机号码
     * @bodyParam  id_card string required 身份证号码
     * @bodyParam  img_zheng string required 身份证正面
     * @bodyParam  img_fan string required 身份证反面
     * @responseFile responses/user/userCert.json
     */
    public function userCert()
    {
        $this->validator([
            'truename'  => 'required',
            'tel'       => 'required',
            'id_card'   => 'required',
            'img_zheng' => 'required',
            'img_fan'   => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userCertInfo = UserCert::where('user_id', $this->userInfo['id'])->first();

        if (! empty($userCertInfo)) {
            if ($userCertInfo['status'] == 1) {
                return $this->retJson(201, '审核中');
            }

            if ($userCertInfo['status'] == 2) {
                return $this->retJson(202, '已认证');
            }
        }

        UserCert::create([
            'user_id'   => $this->userInfo['id'],
            'truename'  => request('truename'),
            'tel'       => request('tel'),
            'id_card'   => request('id_card'),
            'img_zheng' => request('img_zheng'),
            'img_fan'   => request('img_fan')
        ]);

        return $this->retJson(0, '审核中');
    }

    /**
     * userCertStatus
     * 用户认证状态
     * @responseFile responses/user/userCertStatus.json
     */
    public function userCertStatus()
    {
        $userCertInfo = UserCert::where('user_id', $this->userInfo['id'])->first();

        if (! empty($userCertInfo)) {
            if ($userCertInfo['status'] == 1) {
                return $this->retJson(201, '审核中');
            }

            if ($userCertInfo['status'] == 2) {
                return $this->retJson(202, '已认证');
            }
        }

        return $this->retJson(200, '未认证');
    }

    /**
     * userSuggest
     * 用户反馈
     * @bodyParam  content string required 反馈内容
     * @responseFile responses/user/userSuggest.json
     */
    public function userSuggest()
    {
        $this->validator([
            'content' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $content = trim(htmlspecialchars(request('content')));

        UserSuggest::create([
            'user_id' => $this->userInfo['id'],
            'content' => $content
        ]);

        return $this->retJson(0, '反馈成功');
    }

    /**
     * help
     * 帮助中心
     * @responseFile responses/user/help.json
     */
    public function help()
    {
        $helpInfo = System::where('type', 'help')->first();

        return $this->retData($helpInfo);
    }

    /**
     * about
     * 关于我们
     * @responseFile responses/user/about.json
     */
    public function about()
    {
        $aboutInfo = System::where('type', 'about')->first();

        return $this->retData($aboutInfo);
    }
}
