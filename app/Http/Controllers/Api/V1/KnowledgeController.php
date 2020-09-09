<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Knowledge\Banner;
use App\Model\Knowledge\Cate;
use App\Model\Knowledge\Data;
use App\Model\Knowledge\Health;
use App\Model\Knowledge\HealthCate;
use App\Model\Knowledge\HealthRecord;
use App\Model\Knowledge\Match;
use App\Model\Knowledge\MatchRecord;
use App\Model\Knowledge\Read;
use App\Model\Knowledge\ReadCate;
use App\Model\User\User;

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

        foreach ($cateList as &$cate) {
            if ($cate['name'] == 'read') {
                $cate['info'] = Read::orderBy('hot', 'desc')->orderBy('sort', 'desc')->first();
            }

            if ($cate['name'] == 'match') {
                $cate['info'] = Match::orderBy('hot', 'desc')->orderBy('sort', 'desc')->first();
            }

            if ($cate['name'] == 'health') {
                $cate['info'] = Health::orderBy('hot', 'desc')->orderBy('sort', 'desc')->first();
            }
        }


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

        if (request('sort') == 'sort') {
            $readList->orderBy('sort', 'desc');
        }

        if (request('sort') == 'hot') {
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
            'sort' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchList = Match::orderBy('id', 'desc');

        if (request('sort') == 'sort') {
            $matchList->orderBy('sort', 'desc');
        }

        if (request('sort') == 'hot') {
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

        $data = Data::updateOrCreate([
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('click_num');

        return $this->retData($matchInfo);
    }

    /**
     * matchRecordStart
     * 知识竞赛测评开始
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  match_id int required 测评id
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
            'user_id'    => request('user_id'),
            'match_id'   => request('match_id'),
            'start_time' => date('Y-m-d H:i:s')
        ]);

        $matchInfo = Match::where('id', request('match_id'))->first();

        $data = Data::updateOrCreate([
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('join_num');

        User::where('id', $this->userInfo['id'])->increment('do_question_num');

        return $this->retJson(0, '测评开始', ['id' => $matchRecord->id]);
    }

    /**
     * matchRecordEnd
     * 知识竞赛测评结束
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  record_id int required 测评记录id
     * @bodyParam  score int required 测评分数
     * @responseFile responses/knowledge/matchRecordEnd.json
     */
    public function matchRecordEnd()
    {
        $this->validator([
            'record_id' => 'required',
            'user_id'   => 'required',
            'score'     => 'required',
            'question'  => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchRecordInfo = MatchRecord::where('id', request('record_id'))->first();

        if (empty($matchRecordInfo)) {
            return $this->retJson(201, '未找到测评记录');
        }

        if (! empty($matchRecordInfo['end_time'])) {
            return $this->retJson(201, '测评已完成');
        }

        $matchRecordInfo->score       = request('score');
        $matchRecordInfo->score_level = $this->scoreLevel(request('score'));
        $matchRecordInfo->end_time    = date('Y-m-d H:i:s');
        $matchRecordInfo->question    = request('question');
        $matchRecordInfo->save();

        return $this->retJson(0, '测评已完成');
    }

    /**
     * matchRecordInfo
     * 知识竞赛用户测评详情
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  record_id int required 测评记录id
     * @responseFile responses/knowledge/matchRecordInfo.json
     */
    public function matchRecordInfo()
    {
        $this->validator([
            'record_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchRecordInfo = MatchRecord::with(['match', 'user'])->where('id', request('record_id'))->first();

        return $this->retData($matchRecordInfo);
    }

    /**
     * matchShare
     * 知识竞赛分享
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   string required 用户token
     * @bodyParam  match_id  int required 知识科普id
     * @responseFile responses/knowledge/matchShare.json
     */
    public function matchShare()
    {
        $this->validator([
            'match_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $matchInfo = Match::where('id', request('match_id'))->first();

        if (empty($matchInfo)) {
            return $this->retJson(201, '数据异常');
        }

        $data = Data::updateOrCreate([
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $matchInfo->id,
            'knowledge_name' => $matchInfo->title,
            'knowledge_type' => 'match',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('share_num');

        return $this->retJson(0, '分享成功');
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

        if (request('sort') == 'sort') {
            $healthList->orderBy('sort', 'desc');
        }

        if (request('sort') == 'hot') {
            $healthList->orderBy('hot', 'desc');
        }

        return $this->retData($healthList->get());
    }

    /**
     * healthInfo
     * 健康自测用户测评详情
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

        if (empty($healthInfo)) {
            return $this->retJson(201, '未获取到题目');
        }

        $data = Data::updateOrCreate([
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('click_num');

        return $this->retData($healthInfo);
    }

    /**
     * healthRecordStart
     * 健康自测测评开始
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  health_id int required 测评id
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
            'user_id'    => request('user_id'),
            'health_id'  => request('health_id'),
            'start_time' => date('Y-m-d H:i:s')
        ]);

        $healthInfo = Health::where('id', request('health_id'))->first();

        $data = Data::updateOrCreate([
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('join_num');

        User::where('id', $this->userInfo['id'])->increment('do_question_num');

        return $this->retJson(0, '测评开始', ['id' => $healthRecord->id]);
    }

    /**
     * healthRecordEnd
     * 健康自测测评结束
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  record_id int required 测评记录id
     * @bodyParam  score int required 测评分数
     * @responseFile responses/knowledge/matchRecordEnd.json
     */
    public function healthRecordEnd()
    {
//        $a = [
//            ['num' => 1, 'answer' => 1],
//            ['num' => 2, 'answer' => 1],
//            ['num' => 3, 'answer' => 1],
//            ['num' => 4, 'answer' => 1],
//            ['num' => 5, 'answer' => 1],
//            ['num' => 6, 'answer' => 1],
//            ['num' => 7, 'answer' => 1],
//            ['num' => 8, 'answer' => 1],
//            ['num' => 9, 'answer' => 1],
//            ['num' => 10, 'answer' => 1],
//            ['num' => 11, 'answer' => 1],
//            ['num' => 12, 'answer' => 1],
//            ['num' => 13, 'answer' => 1],
//            ['num' => 14, 'answer' => 1],
//            ['num' => 15, 'answer' => 1],
//            ['num' => 16, 'answer' => 1],
//            ['num' => 17, 'answer' => 1],
//            ['num' => 18, 'answer' => 1],
//            ['num' => 19, 'answer' => 1],
//            ['num' => 20, 'answer' => 1],
//        ];

        $this->validator([
            'record_id' => 'required',
            'user_id'   => 'required',
            'score'     => 'required',
            'question'  => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthRecordInfo = HealthRecord::where('id', request('record_id'))->first();

        if (empty($healthRecordInfo)) {
            return $this->retJson(201, '未找到测评记录');
        }

        if (! empty($healthRecordInfo['end_time'])) {
            return $this->retJson(201, '测评已完成');
        }

        $healthInfo = Health::where('id', $healthRecordInfo['health_id'])->first();

        if (empty($healthInfo)) {
            return $this->retJson(201, '未找到测评题目');
        }

        $res = [];

        # 抑郁
        if ($healthInfo['type'] == 'depression') {
            $res = $this->healthDepression(request('question'));
        }

        # 焦虑
        if ($healthInfo['type'] == 'anxiety') {
            $res = $this->healthAnxiety(request('question'));
        }

        # 自评
        if ($healthInfo['type'] == 'self') {
            $res = $this->healthSelf(request('question'));
        }

        $healthRecordInfo->score       = $res['score'] ?? request('score');
        $healthRecordInfo->score_level = $res['score_level'] ?? $this->scoreLevel(request('score'));
        $healthRecordInfo->summary     = $res['summary'] ?? '';
        $healthRecordInfo->end_time    = date('Y-m-d H:i:s');
        $healthRecordInfo->question    = request('question');
        $healthRecordInfo->save();

        return $this->retJson(0, '测评已完成');
    }

    # 抑郁
    public function healthDepression($questions)
    {
        $questionList = json_decode($questions, true);

        $totalScore = 0;
        $scoreLevel = '';
        $summary    = '';

        $reverse = [
            1 => 4,
            2 => 3,
            3 => 2,
            4 => 1,
        ];

        foreach ($questionList as $question) {
            $answer = $question['answer'];

            if (in_array($question['num'], [2, 5, 6, 11, 12, 14, 16, 17, 18, 20])) {
                $answer = $reverse[$answer];
            }

            $totalScore += $answer;
        }

        $quotaScore = number_format($totalScore / 80, 2);

        if ($quotaScore < 0.5) {
            $scoreLevel = '正常';
            $summary    = '根据测评结果，您的抑郁水平正常。很少会有情绪低落，苦恼忧伤的状态，表明您对自身状态的掌控，能够时刻让自己保持积极的状态。<br>指导建议：<br>面对挫折，每个人都可以体验到悲伤和消极情绪，这是正常的情绪变化，重要的是，当我们出现这种心境时能够以积极的心态来面对。请继续保持！';
        }

        if ($quotaScore >= 0.5 && $quotaScore <= 0.59) {
            $scoreLevel = '轻微至轻度抑郁';
            $summary    = '根据测评结果，您的抑郁水平为轻度。偶尔会有情绪低落，苦恼忧伤的状态，但自己也能进行有效调节，使自己回到更好的状态。<br>指导建议<br>世界上从来都不缺少美，只是缺少发现美的眼睛，人生有许多有趣、有意义的事情等待我们去发现。平时收集一些使自己有积极情感体验的素材，并把它们记录下来，然后深呼吸、放松身心，排除一切杂念，想象那些素材，体验当时的情感状态。';
        }

        if ($quotaScore >= 0.6 && $quotaScore <= 0.69) {
            $scoreLevel = '中度抑郁';
            $summary    = '根据测评结果，您的抑郁水平中等。偶尔会有情绪低落，苦恼忧伤的状态，但这种状态持续时间不会很长，多数时候自己能够进行调节和掌控。<br>指导建议<br>感到忧郁苦闷时，应努力寻找情感支持，可以找亲朋好友一吐为快，也可以找一些平时最感兴趣的事情做。平时收集一些使自己有积极情感体验的素材，并把它们记录下来，然后深呼吸、放松身心，排除一切杂念，想象那些素材，体验当时的情感状态。';
        }

        if ($quotaScore >= 0.7) {
            $scoreLevel = '重度抑郁';
            $summary    = '根据测评结果，您的抑郁水平偏高。可能长时间处于情绪低落，苦恼忧伤的状态，会觉得痛苦难熬，有度日如年的感觉。<br>指导建议<br>感到忧郁苦闷时，应努力寻找情感支持，可以找亲朋好友一吐为快，也可以找一些平时最感兴趣的事情做。正确的认识自己，不要让消极的心境和思维主导你的生活，想一些美好的事情，寻找自己的闪光点，从积极的方面评价自己。如果这种心境已经持续时间较长（两年及以上），建议去找专业的医生寻求帮助。';
        }

        return ['score' => $totalScore, 'score_level' => $scoreLevel, 'summary' => $summary];

    }

    # 焦虑
    public function healthAnxiety($questions)
    {
        $questionList = json_decode($questions, true);

        $totalScore = 0;
        $scoreLevel = '';
        $summary    = '';

        $reverse = [
            1 => 4,
            2 => 3,
            3 => 2,
            4 => 1,
        ];

        foreach ($questionList as $question) {
            $answer = $question['answer'];

            if (in_array($question['num'], [5, 9, 13, 17, 19])) {
                $answer = $reverse[$answer];
            }

            $totalScore += $answer;
        }

        $standardScore = $totalScore * 1.25;

        if ($standardScore >= 29.78) {
            $scoreLevel = '偏高';
            $summary    = '根据测评结果，您的焦虑水平正常，无明显的恐惧、不安、紧张等感受。<br>指导建议<br>学习一些放松的方法将有助于帮助我们对抗来自生活和工作中的焦虑情绪。请继续保持！';
        }

        if ($standardScore < 29.78) {
            $scoreLevel = '正常';
            $summary    = '根据测评结果，您的焦虑水平偏高。表明您近期可能受到恐惧、不安、紧张等情绪的困扰，但还需进一步筛查。<br>指导建议<br>客观的认识自我，不对自己有过高的期望，设置一个合理的生活目标。当焦虑的感受出现时，保持自我的觉察，提醒自己，尝试一些放松技巧，如深呼吸、想象放松等方法，来转移自己的注意力，让自己慢慢地平静下来。';
        }

        return ['score' => $totalScore, 'score_level' => $scoreLevel, 'summary' => $summary];

    }

    # 症状自评
    public function healthSelf($questions)
    {
        $questionList = json_decode($questions, true);

        $totalScore = 0;
        $scoreLevel = '';
        $summary    = '';

        $qutihua  = 0;
        $qutihua_num  = 0;
        $qiangpo  = 0;
        $qiangpo_num  = 0;
        $renji    = 0;
        $renji_num    = 0;
        $yiyu     = 0;
        $yiyu_num     = 0;
        $jiaolv   = 0;
        $jiaolv_num   = 0;
        $didui    = 0;
        $didui_num    = 0;
        $kongbu   = 0;
        $kongbu_num   = 0;
        $pianzhi  = 0;
        $pianzhi_num  = 0;
        $jingshen = 0;
        $jingshen_num = 0;
        $qita     = 0;
        $qita_num     = 0;

        foreach ($questionList as $question) {
            $answer = $question['answer'];

            if (in_array($question['num'], [1, 4, 12, 27, 40, 42, 48, 49, 52, 53, 56, 58])) {
                $qutihua += $answer;
                $qutihua_num += 1;
            }

            if (in_array($question['num'], [3,9,10,28,38,45,46,51,55,65])) {
                $qiangpo += $answer;
                $qiangpo_num += 1;
            }

            if (in_array($question['num'], [6,21,34,36,37,41,61,69,73])) {
                $renji += $answer;
                $renji_num += 1;
            }

            if (in_array($question['num'], [5,14,15,20,22,26,29,30,31,32,54,71,79])) {
                $yiyu += $answer;
                $yiyu_num += 1;
            }

            if (in_array($question['num'], [2,17,23,33,39,57,72,78,80,86])) {
                $jiaolv += $answer;
                $jiaolv_num += 1;
            }

            if (in_array($question['num'], [11,24,63,67,74,81])) {
                $didui += $answer;
                $didui_num += $answer;
            }

            if (in_array($question['num'], [13,25,47,50,70,75,82])) {
                $kongbu += $answer;
                $kongbu_num += $answer;
            }

            if (in_array($question['num'], [8,18,43,68,76,83])) {
                $pianzhi += $answer;
                $pianzhi_num += $answer;
            }

            if (in_array($question['num'], [7,16,35,62,77,84,85,87,88,90])) {
                $jingshen += $answer;
                $jingshen_num += $answer;
            }

            if (in_array($question['num'], [19,44,59,60,64,66,89])) {
                $qita += $answer;
                $qita_num += $answer;
            }

            $totalScore += $answer;
        }

        $qutihua  = $qutihua/$qutihua_num;
        $qiangpo  = $qiangpo/$qiangpo_num;
        $renji  = $renji/$renji_num;
        $yiyu  = $yiyu/$yiyu_num;
        $jiaolv  = $jiaolv/$jiaolv_num;
        $didui  = $didui/$didui_num;
        $kongbu  = $kongbu/$kongbu_num;
        $pianzhi  = $pianzhi/$pianzhi_num;
        $jingshen  = $jingshen/$jingshen_num;
        $qita  = $qita/$qita_num;


        $standardScore = ($qutihua+$qiangpo+$renji+$yiyu+$jiaolv+$didui+$kongbu+$pianzhi+$jingshen+$qita)/10;

        if ($standardScore < 1) {
            $scoreLevel = '正常';
        }

        if ($standardScore >= 1) {
            $scoreLevel = '较高';
        }

        if($qutihua < 1) {
            $summary .= '1、躯体化<br>根据测评结果，您在这一维度状态正常。表明您躯体化状态正常，自己没有感到身体有明显的不舒服和疼痛感，自我感觉身体健康状况还比较好。<br>指导建议<br>您应该积极参加各项体育运动，认真做广播体操，养成良好的作息习惯，注意劳逸结合，避免使身体过度劳累。注意饮食，少吃有刺激性的食物，保持消化系统的健康。保持正确坐姿，合理用脑。<br>';
        }else {
            $summary .= '1、躯体化<br>根据测评结果，您在这一维度得分较高。表明您最近可能感觉到身体有点不舒服。这可能只是由您的心理因素所引起的，也可能是客观存在的<br>指导建议<br>您可以去做一个全面的身体检查，在排除身体疾病后，可以在专业人士的指导下寻找造成这一现象的心理因素，并进行相关的训练。另外您应该积极参加各项体育运动，养成良好的生活习惯。<br>';
        }

        if($qiangpo < 1) {
            $summary .= '2、强迫症状<br>根据测评结果，您在这一维度状态正常。表明您没有明显的强迫症状，自己没有或只有很少的强迫的行为和思想，认知状况表现也良好。<br>指导建议<br>请您继续保持良好的心态，正确处理生活中的各种问题，认识到没有完美的事和完美的人。对于已经发生的错误、造成的损失，后悔已经于事无补，亡羊补牢为时不晚，因此没有必要为一些小事而无法释怀，要用积极的心态面对一切变化，对自己充满信心。<br>';
        }else {
            $summary .= '2、强迫症状<br>根据测评结果，您在这一维度得分较高。具体表现为明知没有必要，但又无法摆脱的无意义的思想、冲动、行为，感觉自己很健忘，常常因此而无法将注意力集中到工作或学习中，大大降低了工作效率。这可能与您对自己的要求很严格，事事都追求完美的性格有关。<br>指导建议<br>您可以适当降低对自己的要求，做事不要过于追求完美，时时提醒自己没有人会不犯错，金无足赤，人无完人。另外主动寻找专业人士的帮助，在他们的指导下找出造成这一现象的心理因素，并进行相关的训练。<br>';
        }

        if($renji < 1) {
            $summary .= '3、人际关系敏感<br>根据测评结果，您在这一维度状态正常。表明在人际交往过程中，您表现正常，没有明显的自卑感和不自在感。人际关系和谐，能与他人保持友好关系。您对自我的认识比较积极，有足够的信心。<br>指导建议<br>建议您进一步学习人际交往技巧，客观的认识自我，知道自己的长处和短处，充分发挥自己的优点，不盲目与人攀比。遇事心胸宽广，不斤斤计较、钻牛角尖。<br>';
        }else {
            $summary .= '3、人际关系敏感<br>根据测评结果，您在这一维度得分较高。表明您最近可能有人际关系敏感问题，但还需进一步筛查。在人际交往中，您感到有些自卑，害怕受到别人的关注，总感觉自己不如别人，别人都不理解自己，为此感到心神不安。这可能与您自身的消极期待和对自我的消极认识有关。<br>指导建议<br>积极参加一些集体活动，不要把自己封闭在自己的小圈子里。尽可能多的在一些社交场合勇敢地展现自己，比如上课时主动举手发言，文体活动中主动担当一些角色，对自己的消极想法采取置之不理的态度，多从积极的方面评价自己、肯定自己，可以问问周围人你的优点有哪些，进一步增强自信心。<br>';
        }

        if($renji < 1) {
            $summary .= '4、抑郁<br>根据测评结果，您在这一维度状态正常。表明您在兴趣减退或丧失、对前途悲观、无助感、自我评价低、感到精神疲惫、感到生活或生命本身没有意义这几个方面没有明显的症状，大部分时间都能够拥有乐观积极的情感和心境。<br>指导建议<br>面对挫折，每个人都可以体验到悲伤和消极情绪，这是正常的情绪变化。重要的是当出现这种心境时能够以积极的心态来面对。平时收集一些使自己有积极情感体验的素材，并把它们记录下来，然后深呼吸、放松身心，排除一切杂念，想象那些素材，体验当时的情感状态。有什么不开心的事及时找亲友倾诉一下，不要怕给别人添麻烦，也不要怕自己丢面子，倾诉是保持身心健康的一个好方法。<br>';
        }else {
            $summary .= '4、抑郁<br>根据测评结果，您在这一维度状态得分较高。表明您最近可能有感觉情绪有些低落，但还需进一步筛查。具体表现为可能有兴趣减退或丧失、对前途悲观、无助感、自我评价低、感到精神疲惫、感到生活没有意义等问题。<br>指导建议<br>世界上从来都不缺少美，只是缺少发现美的眼睛，人生有许多有趣、有意义的事情等待我们去发现。感到忧郁苦闷时，应努力寻找情感支持，可以找亲朋好友一吐为快，也可以找一些平时最感兴趣的事情做。注意重塑自我，正确的认识自己，不要让消极的心境和思维主导你的生活，想一些美好的事情，寻找自己的闪光点，从积极的方面评价自己。如果这种心境已经持续两年，并且三分之二的时间都处于这种抑郁心态，就应该找专业的人士寻求帮助。<br>';
        }

        if($jiaolv < 1) {
            $summary .= '5、焦虑<br>根据测评结果，您在这一维度状态正常。表明您没有明显的焦虑症状，具体表现为不常有恐惧、不安、紧张等感受，也很少有由焦虑引发的心跳加速和发抖等躯体症状。<br>指导建议<br>客观的认识自我，不对自己有过高的期望，设置一个合理的生活目标。学习一些放松的方法将有助于你对抗焦虑。例如，想象放松：“我静静地俯卧在海滩上，周围没有其他的人；我感觉到了阳光温暖的照射，触到了身下海滩上的沙子，我全身感到无比的舒适；海风轻轻地吹来，带着一丝丝海腥味．海涛在轻轻地拍打着海岸，有节奏地唱着自己的歌；我静静地躺着，静静地倾听这永恒的波涛声……”。<br>';
        }else {
            $summary .= '5、焦虑<br>根据测评结果，您在这一维度得分较高。表明您近期可能感到有些焦虑，但还需进一步筛查。具体表现为受到恐惧、不安、紧张等情绪的困扰，可能伴有由焦虑引发的心跳加速和发抖等躯体症状。<br>指导建议<br>学习一些放松技巧，比如，肌肉放松训练、深呼吸想象放松等等，或者转移注意力，比如注意地板的颜色、注意周围的声音等。<br>';
        }

        if($didui < 1) {
            $summary .= '6、敌对<br>根据测评结果，您在这一维度状态正常。表明您在思想、感情及行为方面没有明显的敌对表现，也没有或很少有冲动、打人、毁物等举动。<br>指导建议<br>平时与周围人交往时，多站在对方的立场上想问题，告诉自己“如果我是他，我也会……”，这样就可以与周围的人达到心灵沟通和情感的共鸣。学会用幽默化解自己的冲动和不满情绪，培养自己良好的忍耐力。<br>';
        }else {
            $summary .= '6、敌对<br>根据测评结果，您在这一维度得分较高。表明您可能会看不惯周围的人、事、物，具体表现为容易恼怒或发脾气，有陷入到争论之中的倾向，甚至有打人，摔东西的冲动。<br>指导建议<br>多站在对方的立场上想问题，会让你更容易理解他人，也就会减少与他人的矛盾冲突。角色心理互换能改变“以自我为中心”的交往倾向，设身处地地替对方考虑，从而达到心灵沟通和情感的共鸣，可以帮助消除敌对心理。学会控制自己的情绪和行为，可以制定一个表格监控自己敌对行为、思想或情感发生的频率，根据情况给予自己适当奖励或惩罚。<br>';
        }

        if($kongbu < 1) {
            $summary .= '7、恐怖<br>根据测评结果，您在这一维度状态正常。表明您没有明显的恐怖症状，具体表现为几乎不觉得出门旅行、空旷场地、人群，或公共场合和交通工具是令人感到恐怖的事，社会交往状况也正常。<br>指导建议<br>积极参加集体活动，学会合理宣泄情绪。当处于压抑状态时，应该加以合理宣泄，这样才能调节机体的平衡，缓解不良情绪的困扰和压抑，恢复正常的情绪情感状态。<br>';
        }else {
            $summary .= '7、恐怖<br>根据测评结果，您在这一维度得分较高。表明您可能害怕去某些场所、回避一些社交活动。具体表现为感觉出门旅行、空旷场地、人群，或公共场合和交通工具会令你感到不愉快，社会交往状况也不顺利。<br>指导建议<br>把自己感到恐怖的方面列出来，寻找使自己感到恐怖的原因，分析其不合理性。找一个人作为自己的榜样，看他在这些场所是如何表现的，模仿他的行为举止和言谈，并去相关场合实践。勇于将自己暴露在感到恐怖的场所，克服恐惧感，直到反应减轻为止，并持续5-10分钟。接下来再进行几次这样的练习，就会发现自己不再为先前的事物而恐惧了。<br>';
        }

        if($kongbu < 1) {
            $summary .= '8、偏执<br>根据测评结果，您在这一维度状态正常。表明您没有明显的偏执思维，很少有敌对、猜疑、投射性思维、关系观念等情绪和观念，能够保持主观世界和客观世界的统一。<br>指导建议<br>学会调整认识事物的角度 ，现实生活中的许多情绪困扰都是这样，如果从非理性的角度去认识某一事物或问题，会使人恨恨不已；如果换个角度去认识，理性一些去认识，就会使人豁然开朗。正所谓“退一步海阔天空”或者说“换个角度天地宽”。要能客观评价别人和自己，善取人之长补己之短。<br>';
        }else {
            $summary .= '8、偏执<br>根据测评结果，您在这一维度得分偏高，表明您可能有一些偏执的想法思维。具体表现为可能有一些敌对、猜疑、投射性思维、妄想、夸大、关系观念等情绪和观念，出现主观世界和客观世界的不统一的情况。<br>指导建议<br>寻找自己爱走极端、夸大、敌对等非理性观念。分析非理性观念，并与非理性观念进行辩论。<br>';
        }

        if($jingshen < 1) {
            $summary .= '9、精神病性<br>根据测评结果，您在这一维度状态正常。表明您没有明显的精神病性症状，表现为主观世界和客观世协调统一，能够保持认知、情绪情感、意志行为等心理活动的内在协调性。<br>指导建议<br>希望您能正视现实；正确的自我认识；保持和谐的人际关系；保持开朗的心境；能尽自己最大努力发挥自己的聪明才智。<br>';
        }else {
            $summary .= '9、精神病性<br>根据测评结果，您在这一维度得分较高。具体表现为主观世界和客观世界不能达到统一，认知、情绪情感、意志行为等心理活动的内在协调性也欠佳。<br>指导建议<br>希望您能正视客观现实，在自我调节和他人帮助都没有效果后，主动寻求专业心理咨询师的帮助。<br>';
        }

        if($jingshen < 1) {
            $summary .= '10、其他<br>根据测评结果，您在这一维度状态正常。睡眠饮食状况较好。<br>指导建议<br>请继续保持。<br>';
        }else {
            $summary .= '10、其他<br>根据测评结果，您在这一维度得分偏高。睡眠饮食状况不佳。<br>指导建议<br>建议你和家人共同创造一个良好的睡眠环境。环境对睡眠的影响是显而易见的，大环境难以改变，但改变一下小环境还是大有作为的。合理的饮食制度，可成为机体的条件刺激。坚持定时进餐，到了进餐时间，就会产生食欲，分泌多种消化液，利于食物中各种营养素的吸收。<br>';
        }

        return ['score' => $totalScore, 'score_level' => $scoreLevel, 'summary' => $summary];

    }

    /**
     * healthRecordInfo
     * 知识竞赛用户测评详情
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  record_id int required 测评记录id
     * @responseFile responses/knowledge/healthRecordInfo.json
     */
    public function healthRecordInfo()
    {
        $this->validator([
            'record_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthRecordInfo = HealthRecord::with(['health', 'user'])->where('id', request('record_id'))->first();

        return $this->retData($healthRecordInfo);
    }

    /**
     * shareHealth
     * 健康自测分享
     * @authenticated
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   string required 用户token
     * @bodyParam  health_id  int required 健康自测id
     * @responseFile responses/knowledge/shareHealth.json
     */
    public function shareHealth()
    {
        $this->validator([
            'health_id' => 'required',
        ], [
            'required' => '缺少必要的参数',
        ]);

        $healthInfo = Health::where('id', request('health_id'))->first();

        if (empty($healthInfo)) {
            return $this->retJson(201, '数据异常');
        }

        $data = Data::updateOrCreate([
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ], [
            'knowledge_id'   => $healthInfo->id,
            'knowledge_name' => $healthInfo->title,
            'knowledge_type' => 'health',
            'create_day'     => date('Y-m-d')
        ]);

        $data->increment('share_num');

        return $this->retJson(0, '分享成功');
    }

    public function scoreLevel($score)
    {
        if ($score >= 90) {
            return '优秀';
        } elseif ($score >= 70) {
            return '良好';
        } else {
            return '一般';
        }
    }
}
