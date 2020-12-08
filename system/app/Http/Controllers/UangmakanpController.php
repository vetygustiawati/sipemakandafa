<?php 
namespace App\Http\Controllers;
use App\Models\Uangmakan;

class UangmakanpController extends Controller{
	function index(){
		$data['list_uangmakan'] = Uangmakan::all();

		return view('pengasuh.uangmakan.index', $data);
	}
	function kwitansi(Uangmakan $uangmakan){
		$data['uangmakan'] = $uangmakan;
		return view('pengasuh.uangmakan.kwitansi');
	}
}