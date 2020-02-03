<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $fillable = [
      'fullname',
      'nic',
      'occupation',
      'telephone',
      'email'
    ];
}
