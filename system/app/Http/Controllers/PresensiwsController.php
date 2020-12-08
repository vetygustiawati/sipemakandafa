<?php 
namespace App\Http\Controllers;
use App\Models\Presensi;

class PresensiwsController extends Controller{
	function index(){
		$data['list_presensi'] = Presensi::all();

		return view('walisantri.presensi.index', $data);
	}
}