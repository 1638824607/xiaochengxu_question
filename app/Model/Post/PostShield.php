<?php

namespace App\Model\Post;

use Illuminate\Database\Eloquent\Model;

class PostShield extends Model
{
    protected $table = "post_shields";

    protected $guarded = [
        ''
    ];
}
