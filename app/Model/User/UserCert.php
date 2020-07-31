<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserCert extends Model
{
    protected $table = "user_certs";

    protected $guarded = [
        ''
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User\User', 'user_id')->select(array('id', 'nick_name'));
    }
}
