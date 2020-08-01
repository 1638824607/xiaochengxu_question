<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Adv\AppStart;
use App\Model\User\User;
use Illuminate\Http\Request;

/**
 * @group Login
 * 第三方登陆
 */
class LoginController extends BaseController
{
    /**
     * loginByOauth
     * 第三方登陆注册
     * @bodyParam  openid string required 第三方标示openid
     * @bodyParam  login_type  string required 第三方登陆类型（wx/qq）
     * @bodyParam  login_device_type string required 登陆设备类型（android/ios）
     * @bodyParam  login_device string 登陆设备(小米10)
     * @bodyParam  nickname string 昵称
     * @bodyParam  avatar string 头像
     * @bodyParam  province string 省份
     * @bodyParam  city string 城市
     * @responseFile responses/login/loginByOauth.json
     */
    public function loginByOauth(Request $request)
    {
        $this->validator([
            'openid'            => 'required',
            'login_type'        => 'required',
            'login_device_type' => 'required',
            'login_device'      => 'present',
            'nickname'          => 'present',
            'avatar'            => 'present',
            'province'          => 'present',
            'city'              => 'present',
        ], [
            'required' => '缺少必要的参数',
            'present'  => '缺少必要的参数',
        ]);

        $userInfo = User::where(['openid' => request('openid')])->first();

        if (empty($userInfo)) {
            User::create([
                'openid'            => request('openid'),
                'name'              => request('login_type') . '_' . time() . rand(100, 999),
                'nick_name'         => request('nickname', ''),
                'avatar'            => request('avatar', request()->root() . '/img/default_avatar.jpg'),
                'login_type'        => request('login_type', ''),
                'login_device_type' => request('login_device_type'),
                'login_device'      => request('login_device', ''),
                'login_time'        => date('Y-m-d H:i:s'),
                'token'             => md5(md5(request('openid') . time())),
                'expire_time'       => time() + 60 * 60 * 24 * 100,
                'register_ip'       => $_SERVER['REMOTE_ADDR'],
                'province'          => request('province', ''),
                'city'              => request('city', ''),
            ]);
        } else {
            if ($userInfo['status'] != 1) {
                return $this->retJson(203, '用户已被屏蔽');
            }

            User::where('id', $userInfo['id'])->update([
                'login_type'        => request('login_type', ''),
                'login_device_type' => request('login_device_type', ''),
                'login_device'      => request('login_device', ''),
                'login_time'        => date('Y-m-d H:i:s'),
                'token'             => md5(md5(request('openid') . time())),
                'expire_time'       => time() + 60 * 60 * 24 * 100,
                'register_ip'       => $_SERVER['REMOTE_ADDR'],
                'updated_at'        => date('Y-m-d H:i:s'),
            ]);
        }

        $userInfo = User::where(['openid' => request('openid')])->first();

        return $this->retData($userInfo);
    }
}
