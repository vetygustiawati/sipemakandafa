<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;
use App\Models\User;
/**
 * 
 */
class Uangmakan extends Model{
	
	Protected $table = 'uangmakan';

	function Santri(){
   		return $this->belongsTo(Santri::class, 'id_santri');
   	}

   	function User(){
   		return $this->belongsTo(User::class, 'id_user');
   	}
}