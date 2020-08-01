<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = "tp_community_post_comment";

    protected $guarded = [
        ''
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick','avatar'));
    }

    public function toUser()
    {
        return $this->belongsTo('App\Model\User\User', 'to_user_id')->select(array('id', 'nick','avatar'));
    }

    public function commentPriase()
    {
        return $this->hasOne('App\Model\Community\PostPraise', 'comment_id')->select(array('comment_id', 'user_id'));
    }
}
