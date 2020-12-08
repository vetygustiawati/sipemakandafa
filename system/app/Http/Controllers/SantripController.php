<?php 
namespace App\Http\Controllers;
use App\Models\Santri;

class SantripController extends Controller{
	function index(){
		$data['list_santri'] = Santri::all();

		return view('pengasuh.santri.index', $data);
	}
	function dashboard(){
		return view('pengasuh/dashboard')->with('success','Login Berhasil');
	}
	function profil(){
		return view('pengasuh/profil');
	}
}