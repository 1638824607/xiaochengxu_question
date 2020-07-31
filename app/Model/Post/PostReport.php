<?php

namespace App\Model\Post;

use Illuminate\Database\Eloquent\Model;

class PostReport extends Model
{
    protected $table = "post_reports";

    protected $guarded = [
        ''
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick_name'));
    }
}
