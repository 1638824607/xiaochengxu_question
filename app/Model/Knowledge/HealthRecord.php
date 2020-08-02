<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    protected $table = "tp_knowledge_health_record";

    protected $guarded = [''];

    public function health()
    {
        return $this->belongsTo('App\Model\Knowledge\Health', 'health_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id');
    }
}
