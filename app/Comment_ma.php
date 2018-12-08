<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment_ma extends Eloquent
{
    protected $connection = 'mongodb';
    protected $table = "comment_ma";
     public function users()
	{
	    return $this->belongsTo('App\Users', 'user', '_id');
	}
	 public function monans()
	{
	    return $this->belongsTo('App\Monan', 'monan', '_id');
	}
}
