<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    protected $table    = 'tp_users';
    protected $guarded = [];

    protected $hidden = ['updated_at', 'deleted_at'];
}
