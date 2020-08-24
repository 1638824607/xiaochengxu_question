<?php

namespace App\Model\Train;

use Illuminate\Database\Eloquent\Model;

class GameRecord extends Model
{
    protected $table = "tp_train_game_record";

    protected $guarded = [''];

    public function game(){
        return $this->belongsTo('App\Model\Train\Game', 'game_id');
    }
}
