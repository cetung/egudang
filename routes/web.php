<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//halaman Home
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


//halaman tambah barang
Route::get('tambah', 'TambahController@index');
//insert tambah barang
Route::post('tambahbarang', 'TambahController@store');
//halaman daftar tambah barang
Route::get('tambahdetail', 'TambahController@detail');

//halaman ambil barang
Route::get('ambil','AmbilController@index');
//insert ambil barang
Route::post('ambilbarang','AmbilController@store');
//riwayat ambil barang
Route::get('ambildetail','AmbilController@detail');
//mencari pengambilan barang dalam sehari berdasarkan unit
Route::get('cetakambil', 'AmbilController@cetakambil');

//halaman Master
Route::get('master', 'MasterController@index');
//tambah master barang - belum
Route::get('barangtambah', function () {
    return view('barangtambah');
});
//tambah master barang -bekum
Route::get('wargatambah', function () {
    return view('wargatambah');
});

//halaman laporan
Route::get('laporan', 'LaporanController@index');
//cetak stok
Route::get('cetakstok','LaporanController@cetakstok');
//cetak stok unit
Route::get('cetakunit','LaporanController@cetakunit');
