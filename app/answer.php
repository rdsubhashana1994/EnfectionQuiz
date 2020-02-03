<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
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
