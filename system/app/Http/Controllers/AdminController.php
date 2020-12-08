<?php

namespace App\Http\Controllers;

/**
 * 
 */
class AdminController extends Controller{
	
	function showBase(){
		return view('admin.template.base');
	}
	function showDashboard(){
		return view('admin.dashboard');
	}
	function showProfil(){
		return view('admin.profil');
	}
	function showSantri(){
		return view('admin.santri');
	}
	function showPresensi(){
		return view('admin.presensi');
	}
	function showUangmakan(){
		return view('admin.uangmakan');
	}
	function showUser(){
		return view('admin.user');
	}
	
	
}