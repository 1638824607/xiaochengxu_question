<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Adv\AppStart;
use App\Model\Knowledge\Banner;
use App\Model\User\User;
use Illuminate\Http\Request;

/**
 * @group Knowledge
 * 知识科普
 */
class KnowledgeController extends BaseController
{
    /**
     * bannerList
     * banner列表
     * @responseFile responses/knowledge/bannerList.json
     */
    public function bannerList()
    {
        $bannerList = Banner::get();

        return $this->retData($bannerList);
    }
}
