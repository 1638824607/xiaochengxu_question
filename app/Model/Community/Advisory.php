<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class Advisory extends Model
{
    protected $table = "tp_community_advisory";

    protected $guarded = [''];

    public $weekList = [
        0 => '星期日',
        1 => '星期一',
        2 => '星期二',
        3 => '星期三',
        4 => '星期四',
        5 => '星期五',
        6 => '星期六',
    ];


    public static function getDateRangeArray($strDateFrom, $strDateTo, $format = 'Y-m-d')
    {
        $stamps = [strtotime(date('Ymd', strtotime($strDateFrom))), strtotime(date('Ymd', strtotime($strDateTo)))];
        sort($stamps);
        list($min, $max) = $stamps;

        $return = [];
        while ($min <= $max) {
            $return[] = date($format, $min);
            $min      += 86400;
        }

        return $return;
    }
}
