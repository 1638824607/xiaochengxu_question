<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\User\User;
use http\Client;

use Illuminate\Http\Request;
use App\Model\User\WXBizDataCrypt;



/**
 * @group Login
 * 第三方登陆
 */
class LoginController extends BaseController
{
    const APPID        = 'wx53e535fb5fdd4b8e';
    const APPID_SECERT = 'd03ad0fa1264acc244f71b11ea7daf57';

    /**
     * registerByOauth
     * 第三方注册
     * @bodyParam  openid string required 第三方标示openid
     * @bodyParam  nick string 昵称
     * @bodyParam  avatar string 头像
     * @bodyParam  gender int 性别 0未知 1男性 2女性
     * @bodyParam  province string 省份
     * @bodyParam  city string 城市
     * @responseFile responses/login/registerByOauth.json
     */
    public function registerByOauth()
    {
        $this->validator([
            'openid'            => 'required',
//            'nick'              => 'required',
//            'avatar'            => 'required',
//            'gender'            => 'required',
//            'province'          => 'required',
//            'city'              => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userInfo = User::where(['openid' => request('openid')])->first();

        if(! empty($userInfo)) {
            return $this->retJson(201, '用户已注册');
        }

        $userInfo = User::create([
            'openid'            => request('openid'),
            'user_name'         => time() . rand(100, 999),
            'nick'              => request('nick')? request('nick'):'',
            'avatar'            => request('avatar')? request('avatar'):'',
            'login_time'        => date('Y-m-d H:i:s'),
            'token'             => md5(md5(request('openid') . time())),
            'expire_time'       => time() + 60 * 60 * 24 * 100,
            'province'          => request('province')? request('province'):'',
            'city'              => request('city')?request('city'):'',
            ]
        );

        $userInfo = User::where('id', $userInfo->id)->first();
        $userInfo->isTemp = false;

        return $this->retData($userInfo);
    }

    /**
     * loginByOauth
     * 第三方登陆
     * @bodyParam  code string required 登录时获取的 code
     * @responseFile responses/login/loginByOauth.json
     */
    public function loginByOauth()
    {
        $this->validator([
            'code' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $params = [
            'appid'      => self::APPID,
            'secret'     => self::APPID_SECERT,
            'js_code'    => request('code'),
            'grant_type' => 'authorization_code'
        ];

        // 拼接url
        $wxCodeUrl = 'https://api.weixin.qq.com/sns/jscode2session';

        $res = $this->http_query($wxCodeUrl, $params);
        $res = json_decode($res, true);

        if(! empty($res['errcode'])) {
            return $this->retJson(201, $res['errmsg']);
        }

        $sessionKey = $res['session_key'];
        $openid     = $res['openid'];

        $userInfo = User::where(['openid' => $openid])->first();

        if (empty($userInfo)) {
            return $this->retData([
                'isTemp'     => true,
                'openId'     => $openid,
                'sessionKey' => $sessionKey,
            ]);
        }

        User::where('id', $userInfo->id)->update([
            'login_time'  => date('Y-m-d H:i:s'),
            'token'       => md5(md5( time())),
            'expire_time' => time() + 60 * 60 * 24 * 100,
        ]);

        $userInfo = User::where('id', $userInfo->id)->first();
        $userInfo->isTemp = false;

        return $this->retData($userInfo);
    }

    public function http_query($url, $get = null, $post = null)
    {
        if (isset($get)) {
            if (substr_count($url, '?') > 0) {
                $url .= "&" . http_build_query($get);
            } else {
                $url .= "?" . http_build_query($get);
            }
        }
        // 初始化一个cURL会话
        $ch = curl_init($url);
        if (isset($post)) {
            curl_setopt($ch, CURLOPT_POST, TRUE);         #开启post
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);  #post数据
        }
        curl_setopt($ch, CURLOPT_HEADER, 0);            #是否需要头部信息（否）
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    #如果成功只将结果返回，不自动输出任何内容。
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);           #设置允许执行的最长秒数。
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);    #在发起连接前等待的时间，如果设置为0，则无限等待。
        //忽略证书
        if (substr($url, 0, 5) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        }
        $curl_result = curl_exec($ch);
        if ($curl_result) {
            $data = $curl_result;
        } else {
            $data = curl_error($ch);
        }
        curl_close($ch);    #关闭cURL会话
        return $data;
    }


    public function getPhone()
    {
        $this->validator([
            'code' => 'required',
            'openid'=>'required',
            'iv'=>'required',
            'encryptedData'=>'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $userInfo = User::where(['openid' => request('openid')])->first();
        if(empty($userInfo)){
//            return $this->retJson(211, '用户不存在');
        }


        $test = new WXBizDataCrypt(self::APPID,self::APPID_SECERT);

        $returnCode = $test->decryptData(request('encryptedData'),request('iv'),$data);
        if($returnCode != 0){
            return $this->retJson(212, '手机号绑定失败'.$returnCode);
        }

        if($userInfo->phone && $userInfo->phone == $returnCode['purePhoneNumber']){
            return $this->retJson(213, '手机号已绑定');
        }

        $res = User::where(['openid' => request('openid')])->update([
            'phone' => $returnCode['purePhoneNumber'],
        ]);
        if($res){
            $userInfo = User::where(['openid' => request('openid')])->first();
            return $this->retJson(0, '绑定成功',$userInfo);
        }else{
            return $this->retJson(214, '绑定失败');
        }


    }
}
