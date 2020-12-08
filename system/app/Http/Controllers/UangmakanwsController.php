<?php 
namespace App\Http\Controllers;
use App\Models\Uangmakan;

class UangmakanwsController extends Controller{
	function index(){
		$data['list_uangmakan'] = Uangmakan::all();

		return view('walisantri.uangmakan.index', $data);
	}
}