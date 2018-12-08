<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment_qa extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = "comment_qa";
     public function users()
	{
	    return $this->belongsTo('App\Users', 'user', '_id');
	}
	 public function quanans()
	{
	    return $this->belongsTo('App\Quanan', 'quanan', '_id');
	}
}
