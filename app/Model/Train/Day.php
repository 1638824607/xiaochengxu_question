<?php

namespace App\Model\Train;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = "tp_train_day";

    protected $guarded = [''];

    public function dayStep()
    {
        return $this->hasMany('App\Model\Train\DayStep', 'day_id');
    }
}
