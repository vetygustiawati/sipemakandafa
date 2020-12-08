<?php

namespace App\Http\Controllers;

/**
 * 
 */
class PengasuhController extends Controller{
	
	function showBase(){
		return view('pengasuh.template.base');
	}
	function showDashboard(){
		return view('pengasuh.dashboard');
	}
	function showProfil(){
		return view('pengasuh.profil');
	}
	function showSantri(){
		return view('pengasuh.santri');
	}
	function showPresensi(){
		return view('pengasuh.presensi');
	}
	function showUangmakan(){
		return view('pengasuh.uangmakan');
	}
	
	
	
}