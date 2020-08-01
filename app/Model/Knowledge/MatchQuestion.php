<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class MatchQuestion extends Model
{
    protected $table = "tp_knowledge_match_question";

    protected $guarded = [''];

    protected $casts = [
        'options' => 'array',
    ];
}
