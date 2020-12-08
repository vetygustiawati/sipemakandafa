<?php 
namespace App\Http\Controllers;
use App\Models\Presensi;

class PresensipController extends Controller{
	function index(){
		$data['list_presensi'] = Presensi::all();

		return view('pengasuh.presensi.index', $data);
	}
}