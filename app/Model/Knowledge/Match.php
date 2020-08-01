<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = "tp_knowledge_match";

    protected $guarded = [''];

    public function question()
    {
        return $this->hasMany('App\Model\Knowledge\MatchQuestion', 'match_id');
    }
}
