<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{  public function index()
    {    
        $unit = DB::table('units')->get();

        $tambah = DB::table('tambahs')
                ->select('barang_id', DB::raw('SUM(jumlah_masuk) as jml_tambah'))
                ->groupby('barang_id');
        
        $ambil = DB::table('ambils')
                ->select('barang_id', DB:: raw('SUM(jumlah_ambil) as jml_ambil'))
                ->groupby('barang_id'); 

        $home = DB::table('barangs')
        ->leftjoinSub($tambah,'tambah',function ($join)
            { $join->on('tambah.barang_id','=','barangs.barang_id');})
        ->leftjoinSub($ambil,'ambil',function ($join)
            { $join->on('ambil.barang_id','=','barangs.barang_id');})
        ->paginate(20);            

        return view('laporan',['units'=>$unit, 'barangs'=>$home]);
    }

    public function cetakstok()
    {
        $tambah = DB::table('tambahs')
        ->select('barang_id', DB::raw('SUM(jumlah_masuk) as jml_tambah'))
        ->groupby('barang_id');

        $ambil = DB::table('ambils')
                ->select('barang_id', DB:: raw('SUM(jumlah_ambil) as jml_ambil'))
                ->groupby('barang_id'); 

        $home = DB::table('barangs')
        ->leftjoinSub($tambah,'tambah',function ($join)
            { $join->on('tambah.barang_id','=','barangs.barang_id');})
        ->leftjoinSub($ambil,'ambil',function ($join)
            { $join->on('ambil.barang_id','=','barangs.barang_id');})
        ->get();         

        return view('cetakstok',['barangs'=>$home]);
    }
    public function pengambilanunit(Request $request)
    {
        $unit= $request->unit;
    }
      
    public function cetakunit(Request $request)
    {
        $unit= $request->unit;

        $tambah = DB::table('tambahs')
        ->select('barang_id', DB::raw('SUM(jumlah_masuk) as jml_tambah'))
        ->where('id_unit','like','%'.$unit.'%')
        ->groupby('barang_id');

        $ambil = DB::table('ambils')
                ->select('barang_id', DB:: raw('SUM(jumlah_ambil) as jml_ambil'))
                ->where('unit','like','%'.$unit.'%')
                ->groupby('barang_id'); 

        $cetak = DB::table('barangs')
        ->joinSub($tambah,'tambah',function ($join)
            { $join->on('tambah.barang_id','=','barangs.barang_id');})
        ->leftjoinSub($ambil,'ambil',function ($join)
            { $join->on('ambil.barang_id','=','barangs.barang_id');})
        ->orderby('barang_nama','asc')
        ->get(); 
        
        return view('cetakunit',['unit'=>$unit,'barangs'=>$cetak]);
    }
}
