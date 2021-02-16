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
                                <center> <h5>DAFTAR PENGAMBILAN BARANG </h5></center>
                                <BR>
                                <div class="col">
                                   <table>
                                        <tr>
                                            <td>Unit</td>
                                            <td> : </td>
                                            <th>{{$unit}}</th>                                   
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td> : </td> 
                                            <th>{{$tanggal}}</th>  
                                        </tr>
                                    </table>
                                </div>
                                <hr> 
                                <div class="col">
                                    <table class="table">
                                        <tr>
                                            <th>No</th>
                                            <th>Barang</th>   
                                            <th>Jumlah</th>                        
                                        </tr>
                                        @php $no = 1; @endphp
                                        @foreach ($ambils as $cetak)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$cetak ->barang_nama}}</td> 
                                            <td>{{$cetak ->jumlah_ambil}}</td> 
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col">  </div>
                                    <div class="col">  </div>
                                    <div class="col">
                                        <table>
                                            <tr>
                                                <td>Pengambil</td>              
                                            </tr>
                                            <tr>
                                                <td><br><br><br></td>
                                            </tr>
                                            <tr>
                                                <th>{{$nama}}</th>
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
