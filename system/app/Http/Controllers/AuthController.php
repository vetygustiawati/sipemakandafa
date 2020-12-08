<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

/**
 * 
 */
class AuthController extends Controller{
	
	
	function showLogin(){
		return view('login');
	}
	function loginProcess(User $user){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('dashboard')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function registration(){

	}

	function forgotPassword(){

	}
}