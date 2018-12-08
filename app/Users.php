<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Users extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
     public function comment_qa()
	{
	    return $this->hasMany('App\Comment_qa', 'quanan', '_id');
	}
}
