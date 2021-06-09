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
		if(Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
			if(Auth::user()->level== 'admin'){
				return redirect('admin/dashboard')->with('success','Anda Berhasil Login');

			}else if(Auth::user()->level== 'walisantri'){
				return redirect('walisantri/dashboard')->with('success','Anda Berhasil Login');
			
			}else if(Auth::user()->level== 'pengasuh'){
				return redirect('pengasuh/dashboard')->with('success','Anda Berhasil Login');
			}	
			}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek username dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login')->with('success','Anda Berhasil Logout');
		
	}

	function registration(){

	}

	function forgotPassword(){

	}
}