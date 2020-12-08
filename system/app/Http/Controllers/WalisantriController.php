<?php

namespace App\Http\Controllers;

/**
 * 
 */
class WalisantriController extends Controller{
	
	function showBase(){
		return view('walisantri.template.base');
	}
	function showDashboard(){
		return view('walisantri.dashboard');
	}
	function showProfil(){
		return view('walisantri.profil');
	}
	function showSantri(){
		return view('walisantri.santri');
	}
	function showPresensi(){
		return view('walisantri.presensi');
	}
	function showUangmakan(){
		return view('walisantri.uangmakan');
	}
	
	
}