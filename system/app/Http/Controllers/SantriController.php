<?php 
namespace App\Http\Controllers;
use App\Models\Santri;
use DB;

class SantriController extends Controller{
	function indexAdmin($gender){
		// dd($gender);
		$data['gender'] = $gender;
		$data['putra_total'] = DB::table('santri')
			->select('*')
			->where('jk','=','laki-laki')
			->get();
		$data['putri_total'] = DB::table('santri')
			->select('*')
			->where('jk','=','perempuan')
			->get();
		$data['list_santri_a'] = Santri::where('jk','laki-laki')->orderBy('nama_santri','asc')->get();
		$data['list_santri_i'] = Santri::where('jk','perempuan')->orderBy('nama_santri','asc')->get();

		return view('admin.santri.index', $data);
	}
	function indexWalisantri(){
		$id_santri=request()->user()->id_santri;
		$data['list_santri'] = DB::table('santri')->where('id',$id_santri)->get();

		return view('walisantri.santri.index', $data);
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

		$santri->handleUploadFoto();
			
		return redirect('admin/santri/putra')->with('success','Data Berhasil Disimpan');
		
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
		$santri->foto = request ('foto');
		$santri->tpt_lahir = request ('tpt_lahir');
		$santri->tgl_lahir = request ('tgl_lahir');
		$santri->jk = request ('jk');
		$santri->alamat = request ('alamat');
		$santri->nm_wsantri = request ('nm_wsantri');
		$santri->no_hp = request ('no_hp');
		$santri->save();

		$santri->handleUploadFoto();

		return redirect('admin/santri/putra')->with('success','Data Berhasil Diedit');
	}
	function destroy($santri){
		// dd($santri);
		$del = DB::table('santri')->where('id', $santri)->delete();
		return redirect('admin/santri/putra')->with('danger','Data Berhasil Dihapus');

	}
}