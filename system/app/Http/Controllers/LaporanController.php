<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Presensi;

class LaporanController extends Controller
{
    public function indexAdmin()
    {
        $data['laporan_presensi'] =  DB::table('presensi')
            ->select('santri.id','santri.id_santri','santri.nama_santri', 'santri.nm_wsantri','tgl_presensi', 'status', 'keterangan', 'presensi.id as idpresensi',
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
        return view('admin.laporan.index', $data);
    }
    public function indexPengasuh()
    {
        $data['laporan_presensi'] =  DB::table('presensi')
            ->select('santri.id','santri.id_santri','santri.nama_santri', 'santri.nm_wsantri','tgl_presensi', 'status', 'keterangan', 'presensi.id as idpresensi',
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
        return view('pengasuh.laporan.index', $data);
    }

    public function cariAdmin()
    {
        $dari = request()->dari;
        $sampai = request()->sampai;
        $data['laporan_presensi'] = 
        // Presensi::whereBetween('tgl_presensi', [$dari, $sampai])->get();
        DB::table('presensi')->select('*','santri.id_santri','santri.nm_wsantri',
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
            DB::raw("max(case WHEN bln='12' THEN status ELSE 0 end) as des"))
        ->join('santri','santri.id_santri','presensi.id_santri')
        ->whereBetween('tgl_presensi', [$dari, $sampai])
        ->get();
        return view('admin.laporan.index',$data);
    }
    public function cariPengasuh()
    {
        $dari = request()->dari;
        $sampai = request()->sampai;
        $data['laporan_presensi'] = Presensi::whereBetween('tgl_presensi', [$dari, $sampai])->get();
        return view('admin.laporan.index',$data);
    }
}
