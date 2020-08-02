<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class MatchRecord extends Model
{
    protected $table = "tp_knowledge_match_record";

    protected $guarded = [''];

    public function match()
    {
        return $this->belongsTo('App\Model\Knowledge\Match', 'match_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id');
    }
}
