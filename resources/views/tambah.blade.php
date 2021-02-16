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
    <body >
    
    <div id="wrapper" >
    <div class="row">
    <!-- MENU -->
    <navbar class= "navbar static-top navbar-light bg-light" id="header-navbar">
            <div class="container-fluid">
                <span class="navbar-brand mb-3 h1 text-primary"><H3>E - GUDANG</H3> </span>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active"  href="tambah" role="tab" aria-controls="pills-profile" aria-selected="false">Tambah Barang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="ambil" role="tab" aria-controls="pills-contact" aria-selected="false">Ambil Barang</a>
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
                                <H5>TAMBAH BARANG <a class="btn btn-primary btn-sm" href="tambahdetail">Riwayat Penambahan Barang</a></H5>
                                <hr>
                                <div class="col-6 col-sm-6">
                                    <!-- FORM AMBIL BARANG -->
                                    <form action = "tambahbarang" method="post">                                    
                                    {{ csrf_field() }}
 
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="col-form-label">TANGGAL</label>
                                            </div>
                                            <div class="col">
                                                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" required="">
                                            </div>
                                            <div class="col-auto">
                                                <span class="form-text"> tanggal barang masuk </span>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                        <div class="col-3">
                                            <label class="col-form-label">SUMBER</label>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-control" name="sumber" id="sumber" required="">
                                                    <option value="">---</option>
                                                    <option>BOP</option>
                                                    <option>BOS</option>
                                                    <option>HIBAH</option>
                                                </select>
                                            </div>                                           
                                           
                                        </div>

                                        <br>
                                        <div class="row">
                                        <div class="col-3">
                                            <label class="col-form-label">PERIODE</label>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="periode" id="periode" class="form-control" required=">
                                            </div>
                                            <div class="col-auto">
                                                <span class="form-text"> TW I II III IV / CW I II III tahun </span>
                                            </div>                                   
                                           
                                        </div>

                                        <br>
                                        <div class="row">
                                        <div class="col-3">
                                                <label class="col-form-label">UNIT</label>
                                            </div>
                                            <div class="col-6">
                                            <select class="form-control" name="id_unit" id="id_unit" required="">
                                                    <option  value="">----</option>
                                                    @foreach ($units as $unit)
                                                        <option value="{{ $unit->id_unit}}">{{ $unit->nama_unit}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                           
                                        </div>

                                        <br>

                                        <div class="row">
                                        <div class="col-3">
                                                <label class="col-form-label">BARANG</label>
                                            </div>
                                            <div class="col-6">
                                            <select class="form-control" name ="barang_id" id="barang_id" required="">
                                                <option value="">---</option>
                                                 @foreach ($barangs as $barang)
                                                    <option value='{{ $barang->barang_id}}''>{{ $barang->barang_id}} - {{$barang->barang_nama }}</option>
                                                @endforeach
                                            
                                                </select>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                        <div class="col-3">
                                                <label class="col-form-label">JUMLAH</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" id="jumlah_masuk" name="jumlah_masuk" class="form-control" required="">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="col-mb-5">
                                            <input type="submit" class="btn btn-primary" value="Tambah">
                                        </div>
                                    </from>
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
                <span>Copyright © 2021 Cetungningrum  - Laravel v{{ Illuminate\Foundation\Application::VERSION }} </span>
                </div>
                </div>
        </footer> 
            

    </div>
    </div>
    </body>
</html>
