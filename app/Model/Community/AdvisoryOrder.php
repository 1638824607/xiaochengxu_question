<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class AdvisoryOrder extends Model
{
    protected $table = "tp_community_advisory_order";

    protected $guarded = [''];

    public function advisory()
    {
        return $this->belongsTo('App\Model\Community\Advisory', 'advisory_id');
    }
}
