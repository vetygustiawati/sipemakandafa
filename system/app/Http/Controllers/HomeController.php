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
		$id_santri = request()->user()->id_santri;
		$data['total_santri'] = Santri::all()->count();
		$data['kehadiran'] = Presensi::all()->count();
		$data['jumlah_user'] = User::all()->count();
		$data['uang_makan'] = (Uangmakan::all()->count())*300000;
		$bulan = date('n');
		$tahun = date('Y');
		$data['mws'] = DB::table('mws')->where('bulan',$bulan)->where('tahun',$tahun)->get();
		$data['list_lunas'] = DB::table('uangmakan')
		->select('uangmakan.*','santri.id_santri')
		->join('santri','uangmakan.id_santri','santri.id_santri')
		->where('santri.id',$id_santri)
		->groupBy('id_administrasi')
		->get();
		$data['count_lunas'] = count($data['list_lunas']);
		$data['tunggakan'] = 12-$data['count_lunas'];

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