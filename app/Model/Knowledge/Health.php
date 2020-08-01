<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $table = "tp_knowledge_health";

    protected $guarded = [''];

    public function question()
    {
        return $this->hasMany('App\Model\Knowledge\HealthQuestion', 'health_id');
    }
}
