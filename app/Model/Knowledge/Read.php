<?php

namespace App\Model\Knowledge;

use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    protected $table = "tp_knowledge_read";

    protected $guarded = [''];

    public function readCate()
    {
        return $this->belongsTo('App\Model\Knowledge\ReadCate', 'cate_id')->select(array('id', 'title'));
    }
}
