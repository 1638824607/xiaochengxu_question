<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class BaseController extends Controller
{
    protected $userInfo;
    protected $whiteRoute = ['LoginController'];

    public function __construct()
    {
        $route = $this->getRoute();
        $this->userInfo = ['id' => 1];
        if(! in_array($route['controller'], $this->whiteRoute)) {
           $this->checkLogin(request('user_id', 0), request('token', ''));
        }
    }

    public function getRoute()
    {
        $action = request()->route()->getActionName();
        list($class, $method) = explode('@', $action);
        $class = substr(strrchr($class,'\\'),1);
        return ['controller' => $class, 'method' => $method];
    }

    /**
     * 校验用户登陆
     * @param $userId
     * @param $userToken
     * @return bool
     */
    public function checkLogin($userId, $userToken)
    {
        header('content-type:application/json');
//        if(empty($userToken)|| empty($userId)) {
//            exit($this->retJson('203', '登陆失效')->content());
//        }

        $userInfo = User::where('id', $userId)->first();

//        if(empty($userInfo) || empty($userInfo['token'])) {
//            exit($this->retJson('203', '登陆失效')->content());
//        }
//
//        if($userInfo['token'] != $userToken || $userInfo['expire_time'] < time()) {
//            exit($this->retJson('203', '登陆失效')->content());
//        }

        $this->userInfo = $userInfo;

        return true;
    }

    /**
     * 输入响应
     * @param int $code
     * @param string $msg
     * @param array $data
     * @return JsonResponse
     */
    protected function retJson($code = 0, $msg = '请求成功', $data = [])
    {
        return response()->json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ]);
    }

    /**
     * 输入响应
     * @param int $code
     * @param string $msg
     * @param array $data
     * @return JsonResponse
     */
    protected function retData($data = [], $code = 0, $msg = '请求成功')
    {
        return response()->json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ]);
    }

    /**
     * 请求字段校验
     * @param array $rules
     * @param array $messages
     * @return bool
     */
    protected function validator(array $rules, array $messages)
    {
        $validator = Validator::make(request()->all(), $rules, $messages);

        if($validator->fails())
        {
            $errMsg = [];
            $errors = json_decode(json_encode($validator->errors()),true);
            foreach($errors as $k => $v){
                $errMsg[$k] = $v[0];
            }

            header('content-type:application/json');
            exit($this->retJson(203, '参数异常', $errMsg)->content());
        }

        return true;
    }

    /*
    * 用于测试生成用户token
    */
    public function makeToken()
    {
        return md5(md5(request('openid') . time()));
    }

}
