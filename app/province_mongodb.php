<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class province_mongodb extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'province';
     public function address()
	{
	    return $this->hasMany('App\Address', 'province', 'id');
	}
}
