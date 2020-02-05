<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $fillable = [
        'answer',
        'date,',
        'time',
    ];

    public function question(){
        $this->belongsTo('App\question');
    }
}
