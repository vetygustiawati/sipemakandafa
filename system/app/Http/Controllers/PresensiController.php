<?php 
namespace App\Http\Controllers;
use App\Models\Presensi;
class PresensiController extends Controller{
	function index(){
		$data['list_presensi'] = Presensi::all();

		return view('admin.presensi.index', $data);
	}
	function create(){
		return view('admin.presensi.create');
	}
	function store(){
		$presensi = new Presensi;
		$presensi->id_santri = request ('id_santri');
		$presensi->tgl_presensi = request ('tgl_presensi');
		$presensi->status = request ('status');
		$presensi->keterangan = request ('keterangan');
		$presensi->save();
			
			return redirect('admin/presensi')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Presensi $presensi){
		$data['presensi'] = $presensi;
		return view('admin.presensi.show', $data);
	}
	function edit(Presensi $presensi){
		$data['presensi'] = $presensi;
		return view('admin.presensi.edit', $data);
	}
	function update(Presensi $presensi){
	
		$presensi->id_santri = request ('id_santri');
		$presensi->tgl_presensi = request ('tgl_presensi');
		$presensi->status = request ('status');
		$presensi->keterangan = request ('keterangan');
		$presensi->save();
			
		return redirect('admin/presensi')->with('success','Data Berhasil Diedit');
	}
	function destroy(Presensi $presensi){
		$presensi->delete();

		return redirect('admin/presensi')->with('danger','Data Berhasil Dihapus');

	}
}