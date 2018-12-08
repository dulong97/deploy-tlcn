<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Monan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'monans';
    public function quanans()
	{
	    return $this->belongsTo('App\Quanan', 'quanan', '_id');
	}
}
