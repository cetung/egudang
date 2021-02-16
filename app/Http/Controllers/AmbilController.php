<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmbilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $warga = DB::table('wargas')->get();
        $barang = DB::table('barangs')->get();
        $unit = DB::table('units')->get();
       
        return view('ambil',['wargas' =>$warga, 'barangs' =>$barang , 'units' =>$unit]);
    }

    public function detail()
    {
        $warga = DB::table('wargas')->get();
        $unit = DB::table('units')->get();

        $abl = DB::table('ambils')
        ->join('barangs','ambils.barang_id','=','barangs.barang_id')
        ->orderby('tanggal_ambil','desc')
        ->paginate(20);

        return view ('ambildetail' , ['wargas'=>$warga, 'units'=>$unit, 'ambils'=>$abl]);
    }

    public function cetakambil(Request $request)
    {
        $tanggal = $request->tanggal;
        $unit = $request->unit;
        $nama = $request->nama;

        $cetak = DB::table('ambils')
                ->join('barangs','ambils.barang_id','=','barangs.barang_id')
                ->where('tanggal_ambil','like','%'.$tanggal.'%')
                ->where('nama','like','%'.$nama.'%')
                ->get();

        return view('ambilcetak', ['tanggal'=>$tanggal, 'nama'=>$nama, 'unit'=>$unit, 'ambils'=>$cetak]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('ambils')->insert([
            'barang_id'=>$request->barang_id,
            'unit'=>$request->unit,
            'nama'=>$request->nama,
            'tanggal_ambil'=>$request->tanggal_ambil,
            'jumlah_ambil'=>$request->jumlah_ambil
        ]);

        return redirect('ambildetail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
