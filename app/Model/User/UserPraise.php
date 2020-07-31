<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserPraise extends Model
{
    protected $table = "user_praise";

    protected $guarded = [
        ''
    ];

    public function toUser()
    {
        return $this->belongsTo('App\Model\User\User', 'to_user_id')->select(array('id', 'nick_name', 'avatar'));
    }
}
