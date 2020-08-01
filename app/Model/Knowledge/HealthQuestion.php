<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class HealthQuestion extends Model
{
    protected $table = "tp_knowledge_health_question";

    protected $guarded = [''];

    protected $casts = [
        'options' => 'array',
    ];
}
