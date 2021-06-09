<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;
/**
 * 
 */
class Presensi extends Model{
	
	Protected $table = 'presensi';

	function Santri(){
   		return $this->belongsTo(Santri::class, 'id_santri');
   	}
}