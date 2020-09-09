<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    protected $table = "tp_login_log";

    protected $guarded = [
        ''
    ];

    public $timestamps = false;
}
