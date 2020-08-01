<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Adv\Adv;
use App\Model\Adv\CateAdv;
use App\Model\Adv\CatePostDetailAdv;
use App\Model\Adv\PostAdv;
use App\Model\Community\Post;

/**
 * @group adv
 * 广告
 */
class AdvController extends BaseController
{
    /**
     * cateAdvList
     * 分类广告列表
     * @bodyParam  cate_id int required 分类id
     * @responseFile responses/adv/cateAdvList.json
     */
    public function cateAdvList()
    {
        $this->validator([
            'cate_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $cateAdvList = CateAdv::where(['cate_id' => request('cate_id'), 'status' => 1])->get();

        return $this->retData($cateAdvList);
    }

    /**
     * catePostAdvList
     * 分类帖子详情广告列表
     * @bodyParam  post_id int required 帖子id
     * @responseFile responses/adv/catePostAdvList.json
     */
    public function catePostAdvList()
    {
        $this->validator([
            'post_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $postInfo = Post::where(['id' => request('post_id'), 'status' => 1])->first();

        if(empty($postInfo)) {
            return $this->retJson(201, '帖子不存在');
        }

        $postAdvList = CatePostDetailAdv::where(['cate_id' => $postInfo['cate_id'], 'status' => 1])->get();

        return $this->retData($postAdvList);
    }

    /**
     * advList
     * 便民广告列表
     * @responseFile responses/adv/advList.json
     */
    public function advList()
    {
        $advList = Adv::where('status', 1)->orderBy('created_at', 'desc')->get();

        return $this->retData($advList);
    }
}
