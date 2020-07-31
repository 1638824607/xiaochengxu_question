<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class UserNotice extends Model
{
    protected $table = "user_notices";

    protected $guarded = [
        ''
    ];

    public function notice()
    {
        return $this->belongsTo('App\Model\System\Notice', 'notice_id')
            ->where('status', 2)->select(array('id','content'));
    }
}
