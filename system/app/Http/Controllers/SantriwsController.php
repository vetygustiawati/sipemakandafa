<?php 
namespace App\Http\Controllers;
use App\Models\Santri;

class SantriwsController extends Controller{
	function index(){
		$data['list_santri'] = Santri::all();

		return view('walisantri.santri.index', $data);
	}
	function dashboard(){
		return view('walisantri/dashboard')->with('success','Login Berhasil');
	}
	function profil(){
		return view('walisantri/profil');
	}
}