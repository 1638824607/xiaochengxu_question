<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    protected $table = "tp_knowledge_health_record";

    protected $guarded = [''];

    public function health()
    {
        return $this->belongsTo('App\Model\Knowledge\health', 'health_id');
    }
}
