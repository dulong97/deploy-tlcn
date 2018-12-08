<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class district_mongodb extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'district';
     public function address()
	{
	    return $this->hasMany('App\Address', 'district', 'id');
	}
}
