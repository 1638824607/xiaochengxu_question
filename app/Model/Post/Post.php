<?php

namespace App\Model\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick_name', 'avatar', 'sex', 'desc'));
    }

    public function userPraise()
    {
        return $this->hasOne('App\Model\User\UserPraise', 'post_id')->where('type', 1)
            ->select(array('id', 'post_id', 'user_id'));
    }
}
