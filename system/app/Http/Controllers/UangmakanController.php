<?php 
namespace App\Http\Controllers;
use App\Models\Uangmakan;

class UangmakanController extends Controller{
	function index(){
		$data['list_uangmakan'] = Uangmakan::all();

		return view('admin.uangmakan.index', $data);
	}
	function create(){
		return view('admin.uangmakan.create');
	}
	function store(){
		$uangmakan = new Uangmakan;
		$uangmakan->id_santri = request ('id_santri');
		$uangmakan->id_user = request ('id_user');
		$uangmakan->nama_adm = request ('nama_adm');
		$uangmakan->nominal = request ('nominal');
		$uangmakan->tgl = request ('tgl');
		$uangmakan->status = request ('status');
		$uangmakan->keterangan = request ('keterangan');
		$uangmakan->save();
			
			return redirect('admin/uangmakan')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Uangmakan $uangmakan){
		$data['uangmakan'] = $uangmakan;
		return view('admin.uangmakan.show', $data);
	}
	function edit(Uangmakan $uangmakan){
		$data['uangmakan'] = $uangmakan;
		return view('admin.uangmakan.edit', $data);
	}
	function update(Uangmakan $uangmakan){
	
		$uangmakan->id_santri = request ('id_santri');
		$uangmakan->id_user = request ('id_user');
		$uangmakan->nama_adm = request ('nama_adm');
		$uangmakan->nominal = request ('nominal');
		$uangmakan->tgl = request ('tgl');
		$uangmakan->status = request ('status');
		$uangmakan->keterangan = request ('keterangan');
		$uangmakan->save();

		return redirect('admin/uangmakan')->with('success','Data Berhasil Diedit');
	}
	function destroy(Uangmakan $uangmakan){
		$uangmakan->delete();

		return redirect('admin/uangmakan')->with('danger','Data Berhasil Dihapus');

	}
	function kwitansi(Uangmakan $uangmakan){
		$data['uangmakan'] = $uangmakan;
		return view('admin.uangmakan.kwitansi');
	}
}