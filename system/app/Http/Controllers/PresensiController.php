<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Presensi;
use App\Models\Santri;

class PresensiController extends Controller{
	function indexAdmin(){
		// $data['list_presensi'] = Presensi::all();
	$data['list_presensi'] =  DB::table('presensi')
	        ->select('santri.id','santri.id_santri','santri.nama_santri', 'tgl_presensi', 'status', 'keterangan', 'presensi.id as idpresensi',
	        	DB::raw("max(case when bln='01' THEN status else 0 end )as jan"),
	        	DB::raw("max(case when bln='02' THEN status else 0 end )as feb"),
	        	DB::raw("max(case when bln='03' THEN status else 0 end )as mar"),
	        	DB::raw("max(case WHEN bln='04' THEN status ELSE 0 end) as apr"),
				DB::raw("max(case WHEN bln='05' THEN status ELSE 0 end) as mei"),
				DB::raw("max(case WHEN bln='06' THEN status ELSE 0 end) as jun"),
				DB::raw("max(case WHEN bln='07' THEN status ELSE 0 end) as jul"),
				DB::raw("max(case WHEN bln='08' THEN status ELSE 0 end) as agu"),
				DB::raw("max(case WHEN bln='09' THEN status ELSE 0 end) as sep"),
				DB::raw("max(case WHEN bln='10' THEN status ELSE 0 end) as okt"),
				DB::raw("max(case WHEN bln='11' THEN status ELSE 0 end) as nov"),
				DB::raw("max(case WHEN bln='12' THEN status ELSE 0 end) as des"),
				DB::raw("count(status) as acount")
	        	)
	    	->join ('santri', 'presensi.id_santri', '=', 'santri.id_santri')
	    	->orderBy('nama_santri','asc')
	    	->groupBy ('id_santri')
	        ->get();

		return view('admin.presensi.index', $data);
	}
	function indexWalisantri(){
	// 	// $data['list_presensi'] = Presensi::all();
		$id_santri = request()->user()->id_santri;
		// dd($id_santri);

		$data['list_presensi'] = DB::table('presensi')
	      ->select('santri.id','santri.id_santri','santri.nama_santri', 'tgl_presensi', 'status', 'keterangan', 'presensi.id as idpresensi',
	        	DB::raw("max(case when bln='01' THEN status else 0 end )as jan"),
	        	DB::raw("max(case when bln='02' THEN status else 0 end )as feb"),
	        	DB::raw("max(case when bln='03' THEN status else 0 end )as mar"),
	        	DB::raw("max(case WHEN bln='04' THEN status ELSE 0 end) as apr"),
				DB::raw("max(case WHEN bln='05' THEN status ELSE 0 end) as mei"),
				DB::raw("max(case WHEN bln='06' THEN status ELSE 0 end) as jun"),
				DB::raw("max(case WHEN bln='07' THEN status ELSE 0 end) as jul"),
				DB::raw("max(case WHEN bln='08' THEN status ELSE 0 end) as agu"),
				DB::raw("max(case WHEN bln='09' THEN status ELSE 0 end) as sep"),
				DB::raw("max(case WHEN bln='10' THEN status ELSE 0 end) as okt"),
				DB::raw("max(case WHEN bln='11' THEN status ELSE 0 end) as nov"),
				DB::raw("max(case WHEN bln='12' THEN status ELSE 0 end) as des"),
				DB::raw("count(status) as acount")
	        	)
	      	->where('santri.id', '=', $id_santri)
	    	->join ('santri', 'presensi.id_santri', '=', 'santri.id')
	    	->groupBy ('id_santri')
	        ->get();

	        // dd(request()->all());
		return view('walisantri.presensi.index', $data);
	}
	function create(){
		return view('admin.presensi.create');
	}
	function store(){
		dd(request()->all());
		$presensi = new Presensi;
		$presensi->id_santri = request ('id_santri');
		$presensi->bln = request ('bln');
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
		$presensi->bln = request ('bln');
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