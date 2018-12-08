<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
   protected $connection = 'mongodb';
   protected $table = "address";

        public function quanans(){
			return $this->belongsTo('App\Quanan','quanan','_id');
		}
		 public function districts(){
			return $this->belongsTo('App\district_mongodb','district','id');
		}
		public function provinces(){
			return $this->belongsTo('App\province_mongodb','province','id');
		}
		public function streets(){
			return $this->belongsTo('App\street_mongodb','street','id');
		}
		public function wards(){
			return $this->belongsTo('App\ward_mongodb','ward','id');
		}
		// public function provinces(){
		// 	return $this->belongsTo('App\district_mongodb','province','_id');
		// }
		
}
