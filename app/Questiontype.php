<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questiontype extends Model
{
    public $fillable = [
      'type'
    ];

    public function jobrole(){
        return $this->belongsTo('App\jobrole');
    }

    public function question(){
        return$this->hasMany('App\question');
    }
}
