<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public $fillable = [
      'question',
      'date',
      'time',
    ];

    public function answer(){
        $this->hasOne('App\answer');
    }

    public function questiontype(){
        $this->belongsTo('App\questiontype');
    }
}
