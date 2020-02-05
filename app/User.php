<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = [
        'fullname',
        'address',
        'nic',
        'dob',
        'gender',
        'occupation',
        'telephone',
        'email',
    ];

    public function jobrole(){
        return $this->hasMany('App\jobrole');
    }
}
