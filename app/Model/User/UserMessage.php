<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    protected $table = "user_messages";

    protected $guarded = [
        ''
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick_name', 'avatar'));
    }

    public function toUser()
    {
        return $this->belongsTo('App\Model\User\User', 'to_user_id')->select(array('id', 'nick_name', 'avatar'));
    }

}
