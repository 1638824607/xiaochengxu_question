<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserSearch extends Model
{
    protected $table = "user_searchs";

    protected $guarded = [
        ''
    ];
}
