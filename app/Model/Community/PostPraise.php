<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class PostPraise extends Model
{
    protected $table = "tp_community_post_praise";

    protected $guarded = [
        ''
    ];

    public function toUser()
    {
        return $this->belongsTo('App\Model\User\User', 'to_user_id')->select(array('id', 'nick', 'avatar'));
    }
}
