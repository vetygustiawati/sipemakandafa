<?php 
namespace App\Http\Controllers;
use App\Models\User;

class PengaturanController extends Controller{
	function index(){
		$data['list_user'] = User::all();
		return view('walisantri.pengaturan.index', $data);
	}
	// function create(){
	// 	$data['santri'] = Santri::all();
	// 	return view('admin.user.create',$data);
	// }
	// function store(){
	// 	$user = new User;
	// 	$user->nama = request ('nama');
	// 	$user->username = request ('username');
	// 	$user->email = request ('email');
	// 	$user->level = request ('level');
	// 	$user->password = bcrypt(request ('password'));
	// 	$user->save();
			
	// 		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
		
	// }
	// function show(User $user){
	// 	$data['user'] = $user;
	// 	return view('admin.user.show', $data);
	// }
	function edit(User $user){
		$data['user'] = $user;
		return view('walisantri.pengaturan.edit', $data);
	}
	function update(User $user){

		$user->nama = request ('nama');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->level = request ('level');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('walisantri/pengaturan')->with('success','Data Berhasil Diedit');
	}
}