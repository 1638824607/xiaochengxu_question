<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class PostCollect extends Model
{
    protected $table = "tp_community_post_collect";

    protected $guarded = [''];

    public function post()
    {
        return $this->belongsTo('App\Model\Community\Post', 'post_id');
    }
}
