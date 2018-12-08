<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ward_mongodb extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'ward';
     public function address()
	{
	    return $this->hasMany('App\Address', 'ward', 'id');
	}
}
