<?php

namespace App\Model\Community;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "tp_community_post";

    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick', 'avatar'));
    }

    public function postComment()
    {
        return $this->hasMany('App\Model\Community\PostComment', 'post_id');
    }

    public function postPraise()
    {
        return $this->hasOne('App\Model\Community\PostPraise', 'post_id')->where('type', 1)
            ->select(array('id', 'post_id', 'user_id'));
    }
}
