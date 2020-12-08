<?php 
namespace App\Http\Controllers;
use App\Models\Santri;

class SantriController extends Controller{
	function index(){
		$data['list_santri'] = Santri::all();

		return view('admin.santri.index', $data);
	}
	function create(){
		return view('admin.santri.create');
	}
	function store(){
		$santri = new Santri;
		$santri->id_santri = request ('id_santri');
		$santri->nama_santri = request ('nama_santri');
		$santri->tpt_lahir = request ('tpt_lahir');
		$santri->tgl_lahir = request ('tgl_lahir');
		$santri->jk = request ('jk');
		$santri->alamat = request ('alamat');
		$santri->nm_wsantri = request ('nm_wsantri');
		$santri->no_hp = request ('no_hp');
		$santri->save();
			
			return redirect('admin/santri')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Santri $santri){
		$data['santri'] = $santri;
		return view('admin.santri.show', $data);
	}
	function edit(Santri $santri){
		$data['santri'] = $santri;
		return view('admin.santri.edit', $data);
	}
	function update(Santri $santri){
	
		$santri->id_santri = request ('id_santri');
		$santri->nama_santri = request ('nama_santri');
		$santri->tpt_lahir = request ('tpt_lahir');
		$santri->tgl_lahir = request ('tgl_lahir');
		$santri->jk = request ('jk');
		$santri->alamat = request ('alamat');
		$santri->nm_wsantri = request ('nm_wsantri');
		$santri->no_hp = request ('no_hp');
		$santri->save();

		return redirect('admin/santri')->with('success','Data Berhasil Diedit');
	}
	function destroy(Santri $santri){
		$santri->delete();

		return redirect('admin/santri')->with('danger','Data Berhasil Dihapus');

	}
}