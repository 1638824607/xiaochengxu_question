<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Knowledge\Banner;
use App\Model\Knowledge\Cate;
use App\Model\Knowledge\Health;
use App\Model\Knowledge\HealthCate;
use App\Model\Knowledge\HealthRecord;
use App\Model\Knowledge\Match;
use App\Model\Knowledge\MatchRecord;
use App\Model\Knowledge\Read;
use App\Model\Knowledge\ReadCate;

/**
 * @group Knowledge
 * 知识科普
 */
class KnowledgeController extends BaseController
{
    /**
     * bannerList
     * 轮播图列表
     * @responseFile responses/knowledge/bannerList.json
     */
    public function bannerList()
    {
        $bannerList = Banner::get();

        return $this->retData($bannerList);
    }

    /**
     * cateList
     * 分类列表
     * @responseFile responses/knowledge/cateList.json
     */
    public function cateList()
    {
        $cateList = Cate::orderBy('sort', 'desc')->orderBy('id', 'desc')->get();

        return $this->retData($cateList);
    }

    /**
     * readCateList
     * 知识阅读分类列表
     * @responseFile responses/knowledge/readCateList.json
     */
    public function readCateList()
    {
        $readCateList = ReadCate::orderBy('sort', 'desc')->orderBy('id', 'desc')->get();

        return $this->retData($readCateList);
    }

    /**
     * readList
     * 知识阅读文章列表
     * @bodyParam  cate_id int required 知识阅读分类id
     * @bodyParam  sort    string  排序（sort/hot）默认sort
     * @responseFile responses/knowledge/readList.json
     */
    public function readList()
    {
        $this->validator([
            'cate_id' => 'required',
            'sort'    => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $readList = Read::where('cate_id', request('cate_id'))->orderBy('id', 'desc');

        if(request('sort') == 'sort') {
            $readList->orderBy('sort', 'desc');
        }

        if(request('sort') == 'hot') {
            $readList->orderBy('hot', 'desc');
        }

        return $this->retData($readList->get());
    }

    /**
     * readInfo
     * 知识阅读文章详情
     * @bodyParam  id int required 文章id
     * @responseFile responses/knowledge/readInfo.json
     */
    public function readInfo()
    {
        $this->validator([
            'id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $readInfoList = Read::with('readCate')->where('id', request('id'))->first();

        return $this->retData($readInfoList);
    }

    /**
     * matchList
     * 知识竞赛测评列表
     * @bodyParam  sort string  排序（sort/hot）默认sort
     * @responseFile responses/knowledge/matchList.json
     */
    public function matchList()
    {
        $this->validator([
            'sort'    => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchList = Match::orderBy('id', 'desc');

        if(request('sort') == 'sort') {
            $matchList->orderBy('sort', 'desc');
        }

        if(request('sort') == 'hot') {
            $matchList->orderBy('hot', 'desc');
        }

        return $this->retData($matchList->get());
    }

    /**
     * matchInfo
     * 知识竞赛测评详情
     * @bodyParam  id int required 文章id
     * @responseFile responses/knowledge/matchInfo.json
     */
    public function matchInfo()
    {
        $this->validator([
            'id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchInfo = Match::with('question')->where('id', request('id'))->first();

        return $this->retData($matchInfo);
    }

    /**
     * matchRecordStart
     * 知识竞赛测评开始
     * @authenticated
     * @bodyParam  match_id int required 测评id
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/knowledge/matchRecordStart.json
     */
    public function matchRecordStart()
    {
        $this->validator([
            'match_id' => 'required',
            'user_id'  => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchRecord = MatchRecord::create([
            'user_id'     => request('user_id'),
            'match_id'    => request('match_id'),
            'start_time'  => date('Y-m-d H:i:s')
        ]);

        return $this->retJson(0, '测评开始', ['id' => $matchRecord->id]);
    }

    /**
     * matchRecordEnd
     * 知识竞赛测评结束
     * @authenticated
     * @bodyParam  record_id int required 测评记录id
     * @bodyParam  user_id int required 用户id
     * @bodyParam  score int required 测评分数
     * @responseFile responses/knowledge/matchRecordEnd.json
     */
    public function matchRecordEnd()
    {
        $this->validator([
            'record_id' => 'required',
            'user_id'   => 'required',
            'score'     => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchRecordInfo = MatchRecord::where('id', request('record_id'))->first();

        if(empty($matchRecordInfo)) {
            return $this->retJson(201, '未找到测评记录');
        }

        if(! empty($matchRecordInfo['end_time'])) {
            return $this->retJson(201, '测评已完成');
        }

        $matchRecordInfo->score    = request('score');
        $matchRecordInfo->end_time = date('Y-m-d H:i:s');
        $matchRecordInfo->save();

        return $this->retJson(0, '测评已完成');
    }

    /**
     * healthCateList
     * 健康自测分类列表
     * @responseFile responses/knowledge/readCateList.json
     */
    public function healthCateList()
    {
        $healthCateList = HealthCate::orderBy('sort', 'desc')->orderBy('id', 'desc')->get();

        return $this->retData($healthCateList);
    }

    /**
     * healthList
     * 健康自测测评列表
     * @bodyParam  cate_id int required 分类id
     * @bodyParam  sort string  排序（sort/hot）默认sort
     * @responseFile responses/knowledge/healthList.json
     */
    public function healthList()
    {
        $this->validator([
            'cate_id' => 'required',
            'sort'    => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthList = Health::where('cate_id', request('cate_id'))->orderBy('id', 'desc');

        if(request('sort') == 'sort') {
            $healthList->orderBy('sort', 'desc');
        }

        if(request('sort') == 'hot') {
            $healthList->orderBy('hot', 'desc');
        }

        return $this->retData($healthList->get());
    }

    /**
     * healthInfo
     * 健康自测测评详情
     * @bodyParam  id int required 测评id
     * @responseFile responses/knowledge/healthInfo.json
     */
    public function healthInfo()
    {
        $this->validator([
            'id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthInfo = Health::with('question')->where('id', request('id'))->first();

        return $this->retData($healthInfo);
    }

    /**
     * healthRecordStart
     * 健康自测测评开始
     * @authenticated
     * @bodyParam  health_id int required 测评id
     * @bodyParam  user_id int required 用户id
     * @responseFile responses/knowledge/healthRecordStart.json
     */
    public function healthRecordStart()
    {
        $this->validator([
            'health_id' => 'required',
            'user_id'   => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthRecord = HealthRecord::create([
            'user_id'     => request('user_id'),
            'health_id'   => request('health_id'),
            'start_time'  => date('Y-m-d H:i:s')
        ]);

        return $this->retJson(0, '测评开始', ['id'=> $healthRecord->id]);
    }

    /**
     * healthRecordEnd
     * 健康自测测评结束
     * @authenticated
     * @bodyParam  record_id int required 测评记录id
     * @bodyParam  user_id int required 用户id
     * @bodyParam  score int required 测评分数
     * @responseFile responses/knowledge/matchRecordEnd.json
     */
    public function healthRecordEnd()
    {
        $this->validator([
            'record_id' => 'required',
            'user_id'   => 'required',
            'score'     => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthRecordInfo = HealthRecord::where('id', request('record_id'))->first();

        if(empty($healthRecordInfo)) {
            return $this->retJson(201, '未找到测评记录');
        }

        if(! empty($healthRecordInfo['end_time'])) {
            return $this->retJson(201, '测评已完成');
        }

        $healthRecordInfo->score    = request('score');
        $healthRecordInfo->end_time = date('Y-m-d H:i:s');
        $healthRecordInfo->save();

        return $this->retJson(0, '测评已完成');
    }
}
