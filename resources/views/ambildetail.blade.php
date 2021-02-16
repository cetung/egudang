<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>P E R S E D I A A N</title>

         <!-- Scripts -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
       
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>

    <body >
    
    <div id="wrapper" >
    <div class="row">
        <navbar class= "navbar static-top navbar-light bg-light" id="header-navbar">
            <div class="container-fluid">
                <span class="navbar-brand mb-3 h1 text-primary"><H3>E - GUDANG</H3> </span>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " href="home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"  href="tambah" role="tab" aria-controls="pills-profile" aria-selected="false">Tambah Barang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="ambil" role="tab" aria-controls="pills-contact" aria-selected="false">Ambil Barang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="laporan" role="tab" aria-controls="pills-contact" aria-selected="false">Laporan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="master" role="tab" aria-controls="pills-contact" aria-selected="false">Master</a>
                        </li>
                    </ul>
            </div>
        </navbar>

        <div class="main">
			<div class="main-content">				
                <div class="container">
                <P>
                <p>
                </div>
                <div class="container-fluid">
                    <div class="d-grid gap-3">
                        <div class="p-2 bg-light border">
                            <div class="col">
                                <H5>RIWAYAT PENGAMBILAN BARANG <a class="btn btn-primary btn-sm" href="ambil">Ambil Barang</a> </H5>
                                <hr>
                                <span class="form-text"> isi form dibawah ini untuk mencetak pengambilan barang</span>
                                <br>
                                <div class="col">
                                    <!-- FORM CETAK AMBIL BARANG -->
                                    <form action="cetakambil" method="get">
                                        <div class="row">
                                            <div class="col-auto">
                                                <label class="col-form-label">TANGGAL</label>
                                            </div>
                                            <div class="col">
                                                <input type="date" name="tanggal" id="tanggal" class="form-control" required="">
                                            </div>
                                            <div class="col-auto">
                                                <label class="col-form-label">UNIT</label>
                                            </div>
                                            <div class="col">
                                            <select class="form-control" name="unit" id="unit" required="">
                                                <option value="">----</option>
                                                @foreach ($units as $unit)
                                                    <option>{{ $unit->nama_unit}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-auto">
                                                <label class="col-form-label">NAMA</label>
                                            </div>
                                            <div class="col">
                                            <select class="form-control" name="nama" id="nama" required="">
                                                <option value="">----</option>
                                                @foreach ($wargas as $warga)
                                                    <option>{{ $warga->nama}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="col-auto">
                                            <button type="submit" class="btn btn-primary btn-sm" name="cariambil">CETAK</button>
                                            </div>
                                        </div>
                                    </form>
                                <hr>
                                
                                <div class="col">
                                    <table class="table table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Ambil</th>
                                        <th>Unit</th>
                                        <th>Nama Pengambil</th>
                                        <th>Barang</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        
                                    </tr>
                                    @php $no = 1; @endphp
                                    @foreach ($ambils as $abl)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$abl->tanggal_ambil}}</td>
                                            <td>{{$abl->unit}}</td>
                                            <td>{{$abl->nama}}</td>
                                            <td>{{$abl->barang_nama}}</td>
                                            <td>{{$abl->jumlah_ambil}}</td>
                                            <td>{{$abl->satuan}}</td>
                                            
                                        </tr>
                                    @endforeach
                                        
                                </table>
                                {{ $ambils->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>              

         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
            </a>
            <footer class="sticky-footer">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                <P>
                <p>
                <span>Copyright © 2021 Cetungningrum  - Laravel v{{ Illuminate\Foundation\Application::VERSION }}</span>
                </div>
                </div>
            </footer> 

    </div>
    </div>
    </body>
</html>
