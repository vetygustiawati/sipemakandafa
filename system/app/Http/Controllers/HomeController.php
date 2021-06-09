<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Santri;
use App\Models\Presensi;
use App\Models\Uangmakan;
/**
 * 
 */
class HomeController extends Controller{
	
	function showBaseAdmin(){
		return view('admin.template.base');
	}
	function showBasePengasuh(){
		return view('pengasuh.template.base');
	}
	function showBaseWalisantri(){
		return view('walisantri.template.base');
	}
	function showHomeAdmin(){
		return view('admin.home');
	}
	function showHomePengasuh(){
		return view('pengasuh.home');
	}
	function showHomeWalisantri(){
		return view('walisantri.home');
	}
	function dashboardAdmin(){
		$data['total_santri'] = Santri::all()->count();
		$data['kehadiran'] = Presensi::all()->count();
		$data['jumlah_user'] = User::all()->count();
		$data['uang_makan'] = (Uangmakan::all()->count())*300000;
		
		return view('admin.dashboard', $data);
	}
	function dashboardPengasuh(){
		$data['total_santri'] = Santri::all()->count();
		$data['kehadiran'] = Presensi::all()->count();
		$data['jumlah_user'] = User::all()->count();
		$data['uang_makan'] = (Uangmakan::all()->count())*300000;
		
		return view('pengasuh.dashboard', $data);
	}
	function dashboardWalisantri(){
		$data['total_santri'] = Santri::all()->count();
		$data['kehadiran'] = Presensi::all()->count();
		$data['jumlah_user'] = User::all()->count();
		$data['uang_makan'] = (Uangmakan::all()->count())*300000;
		
		return view('walisantri.dashboard', $data);
	}
	
	function profilAdmin(){
		return view('admin/profil');
	}
	function profilPengasuh(){
		return view('pengasuh/profil');
	}
	function profilWalisantri(){
		return view('walisantri/profil');
	}
	function homeAdmin(){
		return view('admin/home');
	}
	function homePengasuh(){
		return view('pengasuh/home');
	}
	function homeWalisantri(){
		return view('walisantri/home');
	}
	function profileAdmin(){
		return view('admin/profile');
	}
	function showProfilAdmin(){
		return view('admin.profil');
	}
	function showProfilPengasuh(){
		return view('pengasuh.profil');
	}
	function showProfilWalisantri(){
		return view('walisantri.profil');
	}
	function showSantriAdmin(){
		return view('admin.santri');
	}
	function showSantriWalisantri(){
		return view('walisantri.santri');
	}
	function showPresensiAdmin(){
		return view('admin.presensi');
	}
	function showPresensiWalisantri(){
		return view('walisantri.presensi');
	}
	function showUangmakanAdmin(){
		return view('admin.uangmakan');
	}
	function showUangmakanPengasuh(){
		return view('pengasuh.uangmakan');
	}
	function showUangmakanWalisantri(){
		return view('walisantri.uangmakan');
	}
	function showUser(){
		return view('admin.user');
	}
	function showProfile(){
		return view('admin.profile');
	}
	
	
}