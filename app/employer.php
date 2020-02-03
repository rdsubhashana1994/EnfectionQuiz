<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    public $fillable = [
      'fullname',
      'address',
      'nic',
      'dob',
      'gender',
      'telephone',
      'email',
    ];

    public function jobrole(){
        return $this->hasMany('App\jobrole');
    }
}


