<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mws;
use DB;
class MwsController extends Controller
{
    public function index()
    {
        $data['list_mws'] = Mws::all();
        return view('admin.mws.index',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->id !="" ||$request->id !=null ){
             DB::table('mws')->where('id', $request->id)->update([
                'bulan'=>$request->bulan,
                'tahun'=>$request->tahun,
                'hari'=>$request->hari,
                'ket'=>$request->ket
            ]);
        }else{
            DB::table('mws')->insert([
                'bulan'=>$request->bulan,
                'tahun'=>$request->tahun,
                'hari'=>$request->hari,
                'ket'=>$request->ket
            ]);
        }
        return redirect('admin/mws')->with('success','Data Berhasil Disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit(Mws $mws)
    {
        $data['mws'] = $mws;
        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Mws $mws)
    {
        $mws->delete();
        return redirect('admin/mws')->with('danger','Data Berhasil dihapus');
    }
}
