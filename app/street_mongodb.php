<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class street_mongodb extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'street';
     public function address()
	{
	    return $this->hasMany('App\Address', 'street', 'id');
	}
}
