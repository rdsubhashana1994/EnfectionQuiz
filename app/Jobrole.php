<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobrole extends Model
{
    public $fillable = [
      'role',
    ];

    public function employee(){
        return $this->belongsTo('App\user');
    }

    public function questiontype(){
        return$this->hasMany('App\questiontype');
    }
}
