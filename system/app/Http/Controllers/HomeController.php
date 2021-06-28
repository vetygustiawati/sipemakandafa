<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Santri;
use App\Models\Presensi;
use App\Models\Uangmakan;
use DB;

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
		$bulan = date('n');
		$tahun = date('Y');
		$data['mws'] = DB::table('mws')->where('bulan',$bulan)->where('tahun',$tahun)->get();
		// dd($data['mws']);
		
		return view('walisantri.dashboard', $data);
	}
	
	function profileAdmin(){
		return view('admin/profile');
	}

	function showHome(){
		return view('home');
	}
	function showVisimisi(){
		return view('visimisi');
	}
	function showInfopondok(){
		return view('infopondok');
	}
	
}