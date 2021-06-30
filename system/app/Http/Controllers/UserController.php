<?php 
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Santri;

class UserController extends Controller{
	function indexAdmin(){
		$data['list_user'] = User::all();
		$data['santri'] = Santri::all();
		return view('admin.user.index', $data);
	}
	function indexWalisantri(){
		$id_santri = request()->user()->id;
		$data['list_user'] = User::where('id',$id_santri)->get();
		return view('walisantri.user.index', $data);
	}
	function indexPengasuh(){
		$id_santri = request()->user()->id;
		$data['list_user'] = User::where('id',$id_santri)->get();
		return view('pengasuh.user.index', $data);
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
		$user->password = bcrypt(request ('password'));
		$user->level = request ('level');
		// dd(request()->all());
		$user->save();
			
		return redirect('admin/user')->with('success','Data Berhasil Disimpan');
		
	}
	function show(User $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}
	function editAdmin(User $user){
		$data['user'] = $user;
		$data['santri'] = Santri::all();
		return view('admin.user.edit', $data);
	}
	function editWaliSantri(User $user){
		$data['user'] = $user;
		$data['santri'] = Santri::all();
		return view('walisantri.user.edit', $data);
	}
	function editPengasuh(User $user){
		$data['user'] = $user;
		$data['santri'] = Santri::all();
		return view('pengasuh.user.edit', $data);
	}
	function updateAdmin(User $user){

		$user->id_santri = request ('id_santri');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->level = request ('level');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('admin/user')->with('success','Data Berhasil Diedit');
	}
	function updateWalisantri(User $user){

		$user->id_santri = request ('id_santri');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->level = request ('level');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('walisantri/user')->with('success','Data Berhasil Diedit');
	}
	function updatePengasuh(User $user){

		$user->id_santri = request ('id_santri');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->level = request ('level');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('pengasuh/user')->with('success','Data Berhasil Diedit');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');

	}
}