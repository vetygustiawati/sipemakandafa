<?php 
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Santri;

class UserController extends Controller{
	function index(){
		$data['list_user'] = User::all();
		$data['santri'] = Santri::all();
		return view('admin.user.index', $data);
	}
	function create(){
		$data['santri'] = Santri::all();
		return view('admin.user.create',$data);
	}
	function store(){
		$user = new User;
		$user->id_santri = request ('id_santri');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->nama = request ('nama');
		$user->password = bcrypt(request ('password'));
		$user->level = request ('level');
		// dd(request()->all());
		$user->save();
			
		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(User $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		$data['santri'] = Santri::all();
		return view('admin.user.edit', $data);
	}
	function update(User $user){

		$user->nama = request ('nama');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->level = request ('level');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('admin/user')->with('success','Data Berhasil Diedit');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');

	}
}