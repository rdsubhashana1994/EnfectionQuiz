<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobrole extends Model
{
    public $fillable = [
      'role',
    ];

    public function employee(){
        return $this->belongsTo('App\employer');
    }

    public function questiontype(){
        return$this->hasMany('App\questiontype');
    }
}
