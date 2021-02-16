<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E - GUDANG</title>

        <!-- JS -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
       
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
    </head>

    <body >
    
    <div id="wrapper" >
    <div class="row">
        <navbar class= "navbar static-top navbar-light bg-light" id="header-navbar">
            <div class="container-fluid">
                <span class="navbar-brand mb-3 h1 text-primary"><H3>E - GUDANG </H3> </span>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " href="home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link"  href="tambah" role="tab" aria-controls="pills-profile" aria-selected="false">Tambah Barang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="ambil" role="tab" aria-controls="pills-contact" aria-selected="false">Ambil Barang</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="laporan" role="tab" aria-controls="pills-contact" aria-selected="false">Laporan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="master" role="tab" aria-controls="pills-contact" aria-selected="false">Master</a>
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
                                <H5>TAMBAH WARGA</H5>
                                <hr>
                                <div class="col-6 col-sm-6">
                                    <!-- FORM AMBIL BARANG -->
                                    <from  action="tambah_warga" method="GET">
                                    <div class="row">
                                        <div class="col-3">
                                                <label class="col-form-label">ID</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" id="barang_id" class="form-control">
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                        <div class="col-3">
                                                <label class="col-form-label">NAMA</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" id="barang_nama" class="form-control">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="col-mb-5">
                                            <button type="submit" class="btn btn-primary" name="ambil">Tambah</button>
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
                <span>Copyright © 2021 Cetungningrum  - Laravel v{{ Illuminate\Foundation\Application::VERSION }}</span>
                </div>
                </div>
            </footer> 

    </div>
    </div>
    </body>
</html>
