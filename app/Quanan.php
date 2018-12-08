<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Quanan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'quanans';
   public function monans()
    {
        return $this->hasMany('App\Monan','quanan', '_id');
    }
     public function address()
    {
        return $this->hasMany('App\Address','quanan', '_id');
    }
}
