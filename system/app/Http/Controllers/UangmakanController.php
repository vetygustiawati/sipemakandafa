<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Uangmakan;
use App\Models\Santri;
use App\Models\User;

class UangmakanController extends Controller{
	function indexAdmin(){
		
		$data['list_uangmakan'] =  DB::table('uangmakan')
	        ->select('uangmakan.id as idu','santri.id','santri.id_santri','santri.nama_santri', 'santri.nm_wsantri','santri.foto','tgl', 'status', 'keterangan','user.id_user','user.nama', 'user.username','nama_administrasi', 'nominal', 'uangmakan.id as iduangmakan',
	        	DB::raw("sum(case when id_administrasi='01' THEN nominal else 0 end )as jan"),
	        	DB::raw("sum(case when id_administrasi='02' THEN nominal else 0 end )as feb"),
	        	DB::raw("sum(case when id_administrasi='03' THEN nominal else 0 end )as mar"),
	        	DB::raw("sum(case WHEN id_administrasi='04' THEN nominal ELSE 0 end) as apr"),
				DB::raw("sum(case WHEN id_administrasi='05' THEN nominal ELSE 0 end) as mei"),
				DB::raw("sum(case WHEN id_administrasi='06' THEN nominal ELSE 0 end) as juni"),
				DB::raw("sum(case WHEN id_administrasi='07' THEN nominal ELSE 0 end) as juli"),
				DB::raw("sum(case WHEN id_administrasi='08' THEN nominal ELSE 0 end) as agt"),
				DB::raw("sum(case WHEN id_administrasi='09' THEN nominal ELSE 0 end) as sep"),
				DB::raw("sum(case WHEN id_administrasi='10' THEN nominal ELSE 0 end) as okt"),
				DB::raw("sum(case WHEN id_administrasi='11' THEN nominal ELSE 0 end) as nov"),
				DB::raw("sum(case WHEN id_administrasi='12' THEN nominal ELSE 0 end) as des"),
				DB::raw("count(nominal) as acount")
	        	)
	    	->join ('santri', 'uangmakan.id_santri', '=', 'santri.id_santri')
	    	->join ( 'user', 'uangmakan.id_user', '=', 'user.id') 
	    	->join ( 'administrasi', 'uangmakan.id_administrasi', '=', 'administrasi.id') 
	    	->orderBy('nama_santri','asc')
	    	->groupBy ('id_santri')
	        ->get();
	    $data['list_santri'] = Santri::all();
		return view('admin.uangmakan.index', $data);
	}
	
	function indexWalisantri(){
		// $data['list_uangmakan'] = Uangmakan::all();
		$id_santri = request()->user()->id_santri;
		$data['list_uangmakan'] =  DB::table('uangmakan')
	        ->select('uangmakan.id as idu','santri.id','santri.id_santri','santri.nama_santri', 'santri.nm_wsantri','santri.foto','tgl', 'status', 'keterangan','user.id_user','user.nama', 'user.username','nama_administrasi', 'nominal', 'uangmakan.id as iduangmakan',
	        	DB::raw("sum(case when id_administrasi='01' THEN nominal else 0 end )as jan"),
	        	DB::raw("sum(case when id_administrasi='02' THEN nominal else 0 end )as feb"),
	        	DB::raw("sum(case when id_administrasi='03' THEN nominal else 0 end )as mar"),
	        	DB::raw("sum(case WHEN id_administrasi='04' THEN nominal ELSE 0 end) as apr"),
				DB::raw("sum(case WHEN id_administrasi='05' THEN nominal ELSE 0 end) as mei"),
				DB::raw("sum(case WHEN id_administrasi='06' THEN nominal ELSE 0 end) as juni"),
				DB::raw("sum(case WHEN id_administrasi='07' THEN nominal ELSE 0 end) as juli"),
				DB::raw("sum(case WHEN id_administrasi='08' THEN nominal ELSE 0 end) as agt"),
				DB::raw("sum(case WHEN id_administrasi='09' THEN nominal ELSE 0 end) as sep"),
				DB::raw("sum(case WHEN id_administrasi='10' THEN nominal ELSE 0 end) as okt"),
				DB::raw("sum(case WHEN id_administrasi='11' THEN nominal ELSE 0 end) as nov"),
				DB::raw("sum(case WHEN id_administrasi='12' THEN nominal ELSE 0 end) as des"),
				DB::raw("count(nominal) as acount")
	        	)
	        ->where('santri.id', '=', $id_santri)
	    	->join ('santri', 'uangmakan.id_santri', '=', 'santri.id_santri')
	    	->join ( 'user', 'uangmakan.id_user', '=', 'user.id') 
	    	->join ( 'administrasi', 'uangmakan.id_administrasi', '=', 'administrasi.id') 
	    	->groupBy ('id_santri')
	        ->get();

		return view('walisantri.uangmakan.index', $data);
	}

	function create(){
		$data['list_santri'] = Santri::all();
		return view('admin.uangmakan.create',$data);
	}
	function store(){
		$uangmakan = new Uangmakan;
		$uangmakan->id_santri = request ('id_santri');
		$uangmakan->id_user = request ('id_user');
		$uangmakan->id_administrasi = request ('id_administrasi');
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
		$uangmakan->id_administrasi = request ('id_administrasi');
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

	function kwitansiThermo(Uangmakan $uangmakan){
		$id = $uangmakan->id;
		$data['list_uangmakan'] = DB::table('uangmakan')
		->select('santri.id','santri.id_santri','santri.nama_santri', 'tgl', 'status', 'keterangan','user.id_user','user.nama', 'user.username','administrasi.nama_administrasi', 'nominal', 'uangmakan.id as iduangmakan')
		->join ('santri', 'uangmakan.id_santri', '=', 'santri.id_santri')
    	->join ( 'user', 'uangmakan.id_user', '=', 'user.id') 
    	->join ( 'administrasi', 'uangmakan.id_administrasi', '=', 'administrasi.id') 
		->where('uangmakan.id',$id)
		->get();
		$data['list_uangmakan'] = $data['list_uangmakan'][0];
		// dd($data['list_uangmakan']);
		return view('admin.uangmakan.kwitansiThermo', $data);
	}

	

	function laporanBulananAdmin(Uangmakan $uangmakan){
		$data['list_uangmakan'] =  DB::table('uangmakan')
	        ->select('santri.id','santri.id_santri','santri.nama_santri', 'tgl', 'user.id_user','user.nama', 'nama_administrasi', 'nominal', 'uangmakan.id as iduangmakan',
	        	DB::raw("sum(case when id_administrasi='01' THEN nominal else 0 end )as jan"),
	        	DB::raw("sum(case when id_administrasi='02' THEN nominal else 0 end )as feb"),
	        	DB::raw("sum(case when id_administrasi='03' THEN nominal else 0 end )as mar"),
	        	DB::raw("sum(case WHEN id_administrasi='04' THEN nominal ELSE 0 end) as apr"),
				DB::raw("sum(case WHEN id_administrasi='05' THEN nominal ELSE 0 end) as mei"),
				DB::raw("sum(case WHEN id_administrasi='06' THEN nominal ELSE 0 end) as juni"),
				DB::raw("sum(case WHEN id_administrasi='07' THEN nominal ELSE 0 end) as juli"),
				DB::raw("sum(case WHEN id_administrasi='08' THEN nominal ELSE 0 end) as agt"),
				DB::raw("sum(case WHEN id_administrasi='09' THEN nominal ELSE 0 end) as sep"),
				DB::raw("sum(case WHEN id_administrasi='10' THEN nominal ELSE 0 end) as okt"),
				DB::raw("sum(case WHEN id_administrasi='11' THEN nominal ELSE 0 end) as nov"),
				DB::raw("sum(case WHEN id_administrasi='12' THEN nominal ELSE 0 end) as des"),
				DB::raw("count(nominal) as acount")
	        	)
	    	->join ('santri', 'uangmakan.id_santri', '=', 'santri.id_santri')
	    	->join ( 'user', 'uangmakan.id_user', '=', 'user.id') 
	    	->join ( 'administrasi', 'uangmakan.id_administrasi', '=', 'administrasi.id') 
	    	->groupBy ('id_santri')
	        ->get();
		return view('admin.uangmakan.laporanBulanan', $data);
	}
	function laporanBulananPengasuh(Uangmakan $uangmakan){
		$data['list_uangmakan'] =  DB::table('uangmakan')
	        ->select('santri.id','santri.id_santri','santri.nama_santri', 'tgl', 'user.id_user','user.nama', 'administrasi.nama_administrasi', 'nominal', 'uangmakan.id as iduangmakan',
	        	DB::raw("sum(case when id_administrasi='01' THEN nominal else 0 end )as jan"),
	        	DB::raw("sum(case when id_administrasi='02' THEN nominal else 0 end )as feb"),
	        	DB::raw("sum(case when id_administrasi='03' THEN nominal else 0 end )as mar"),
	        	DB::raw("sum(case WHEN id_administrasi='04' THEN nominal ELSE 0 end) as apr"),
				DB::raw("sum(case WHEN id_administrasi='05' THEN nominal ELSE 0 end) as mei"),
				DB::raw("sum(case WHEN id_administrasi='06' THEN nominal ELSE 0 end) as juni"),
				DB::raw("sum(case WHEN id_administrasi='07' THEN nominal ELSE 0 end) as juli"),
				DB::raw("sum(case WHEN id_administrasi='08' THEN nominal ELSE 0 end) as agt"),
				DB::raw("sum(case WHEN id_administrasi='09' THEN nominal ELSE 0 end) as sep"),
				DB::raw("sum(case WHEN id_administrasi='10' THEN nominal ELSE 0 end) as okt"),
				DB::raw("sum(case WHEN id_administrasi='11' THEN nominal ELSE 0 end) as nov"),
				DB::raw("sum(case WHEN id_administrasi='12' THEN nominal ELSE 0 end) as des"),
				DB::raw("count(nominal) as acount")
	        	)
	    	->join ('santri', 'uangmakan.id_santri', '=', 'santri.id_santri')
	    	->join ( 'user', 'uangmakan.id_user', '=', 'user.id') 
	    	->join ( 'administrasi', 'uangmakan.id_administrasi', '=', 'administrasi.id') 
	    	->groupBy ('id_santri')
	        ->get();
		return view('pengasuh.uangmakan.laporanBulanan', $data);
	}

	
}