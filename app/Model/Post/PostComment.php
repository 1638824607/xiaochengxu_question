<?php

namespace App\Model\Post;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = "post_comments";

    protected $guarded = [
        ''
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick_name','avatar'));
    }

    public function toUser()
    {
        return $this->belongsTo('App\Model\User\User', 'to_user_id')->select(array('id', 'nick_name','avatar'));
    }

    public function commentPriase()
    {
        return $this->hasOne('App\Model\User\UserPraise', 'comment_id')->select(array('comment_id', 'user_id'));
    }
}
