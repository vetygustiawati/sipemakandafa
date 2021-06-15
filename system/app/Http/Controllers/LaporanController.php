<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function cari()
    {
        $dari = request()->dari;
        $sampai = request()->sampai;
        $data['laporan_presensi'] = Presensi::whereBetween('tgl_presensi', [$dari, $sampai])->get();
        return view('admin.laporan.index',$data);
    }
}
