<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Knowledge\MatchRecord;
use App\Model\Train\Banner;
use App\Model\Train\Day;
use App\Model\Train\DayCate;
use App\Model\Train\Game;
use App\Model\Train\GameRecord;
use App\Model\User\User;

/**
 * @group Train
 * 训练提升
 */
class TrainController extends BaseController
{
    /**
     * bannerList
     * 轮播图列表
     * @responseFile responses/train/bannerList.json
     */
    public function bannerList()
    {
        $bannerList = Banner::get();

        return $this->retData($bannerList);
    }

    /**
     * dayCateList
     * 每日静心分类列表
     * @responseFile responses/train/dayCateList.json
     */
    public function dayCateList()
    {
        $dayCateList = DayCate::get();

        return $this->retData($dayCateList);
    }

    /**
     * dayList
     * 每日静心列表
     * @bodyParam cate_id int required 分类id
     * @responseFile responses/train/dayList.json
     */
    public function dayList()
    {
        $this->validator([
            'cate_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $dayList = Day::where('cate_id', request('cate_id'))->get();

        return $this->retData($dayList);
    }

    /**
     * dayInfo
     * 每日静心详情
     * @bodyParam day_id int required day_id
     * @responseFile responses/train/dayInfo.json
     */
    public function dayInfo()
    {
        $this->validator([
            'day_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $dayInfo = Day::with('dayStep')->where('id', request('day_id'))->first();
        $dayInfo = $dayInfo->toarray();
        $day_step_list = $dayInfo['day_step'];
        foreach($day_step_list as $key=>$item)
        {
            if(strpos(strtolower($item['src']),'.mp3'))
            {
                $day_step_list[$key]['src_type'] = 1;
            }else{
                $day_step_list[$key]['src_type'] = 2;
            }

        }
        $dayInfo['day_step'] = $day_step_list;
        return $this->retData($dayInfo);
    }

    /**
     * gameList
     * 益脑游戏列表
     * @responseFile responses/train/gameList.json
     */
    public function gameList()
    {
        $gameList = Game::get();

        return $this->retData($gameList);
    }

    /**
     * gameInfo
     * 益脑游戏训练详情
     * @bodyParam game_id int required 游戏id
     * @responseFile responses/train/gameInfo.json
     */
    public function gameInfo()
    {
        $this->validator([
            'game_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $gameInfo = Game::where('id', request('game_id'))->first();

        return $this->retData($gameInfo);
    }

    /**
     * gameRecordStart
     * 益脑游戏训练开始
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  game_id int required 游戏id
     * @responseFile responses/train/gameRecordStart.json
     */
    public function gameRecordStart()
    {
        $this->validator([
            'game_id' => 'required',
            'user_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $gameRecord = GameRecord::create([
            'user_id'  => request('user_id'),
            'game_id'  => request('game_id'),
            'start_at' => date('Y-m-d H:i:s')
        ]);

        User::where('id', $this->userInfo['id'])->increment('do_game_num');

        return $this->retJson(0, '游戏开始', ['id' => $gameRecord->id]);
    }

    /**
     * gameRecordEnd
     * 益脑游戏训练结束
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  record_id int required 测评记录id
     * @bodyParam  summary string required 完成总结语
     * @responseFile responses/train/gameRecordEnd.json
     */
    public function gameRecordEnd()
    {
        $this->validator([
            'record_id' => 'required',
            'summary'   => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $gameRecordInfo = GameRecord::where('id', request('record_id'))->first();

        if(empty($gameRecordInfo)) {
            return $this->retJson(201, '未找到游戏训练记录');
        }

        if(! empty($gameRecordInfo['end_at'])) {
            return $this->retJson(201, '游戏训练已完成');
        }

        $gameRecordInfo->summary = request('summary');
        $gameRecordInfo->end_at  = date('Y-m-d H:i:s');
        $gameRecordInfo->save();

        return $this->retJson(0, '游戏训练已完成');
    }
}
