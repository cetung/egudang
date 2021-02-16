<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
       
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body >
    <div id="wrapper" >
    <div class="row">
        <div class="main">
			<div class="main-content">				
                <div class="container-fluid">
                    <div class="d-grid gap-3">
                        <div class="p-2">
                            <div class="col">
                                <center> <h5>DAFTAR PERSEDIAAN BARANG 
                                <BR>SMK NEGERI 1 WONOSOBO
                                <BR>TAHUN 2020
                                </h5></center>
                                <BR>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Pemakaian</th>
                                        <th>Jml Akhir</th>
                                        <th>Satuan</th>
                                    </tr>
                                    @php $no = 1; @endphp
                                    @foreach ($barangs as $home)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$home->barang_nama}}</td>
                                        <td>{{0 + $home->jml_tambah}}</td>
                                        <td>{{0 + $home->jml_ambil }}</td>
                                        <td>{{$home->jml_tambah - $home->jml_ambil }}</td>
                                        <td>{{$home->satuan}}</td>
                                    </tr>
                                    @endforeach
                                </table>

                                <div class="row">
                                    <div class="col">  </div>
                                    <div class="col">  </div>
                                    <div class="col">
                                        <table>
                                            <tr>
                                                <td>Wonosobo,</td>              
                                            </tr>
                                            <tr>
                                                <td>Petugas Gudang</td>              
                                            </tr>
                                            <tr>
                                                <td><br><br><br></td>
                                            </tr>
                                            <tr>
                                                <th>Catur Wahyuningrum</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>              
    </div>
    </div>
    </body>
</html>
