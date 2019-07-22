@extends('layouts.navpemilik')
@section('content')

<div class="container">
<h4><b>Barang Masuk Keluar</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek Karya Sehat {{$cabang->nama_cabang}}</b></button>
    <div class="row pt-3">
        <div class="col-sm">
            <h5>Filter Barang Masuk dan Keluar</h5>
            <form>
                <div class="form-group row">
                    <div class="col-md-2">
                        <span>Tanggal Awal</span>
                        @if(isset($awal))
                        <input class="form-control" type="text" id="awal" name="awal" value="{{$awal}}" placeholder="yyyy-mm-dd" required>
                        @else
                        <input class="form-control" type="text" id="awal" name="awal"  placeholder="yyyy-mm-dd" required>
                        @endif  
                    </div>
                    <div class="col-md-2">
                        <span>Tanggal Akhir</span>
                        @if(isset($akhir))
                        <input class="form-control" type="text" id="akhir" name="akhir" value="{{$akhir}}"  placeholder="yyyy-mm-dd" required>
                        @else
                        <input class="form-control" type="text" id="akhir" name="akhir"  placeholder="yyyy-mm-dd" required>
                        @endif  
                    </div>
                </div>
            </form>
                <script>
                    $(document).ready(function () {
                        $('#awal').datepicker({
                            format: "yyyy-mm-dd",
                            autoclose:true
                        });
                        $('#akhir').datepicker({
                            format: "yyyy-mm-dd",
                            autoclose:true
                        });
                    });
                </script>
            <div class="col-xs-12">
                <button type="button" id="lihatbutton" class="btn btn-outline-success" onclick="ontambahclicked();">Lihat</button>
                <input type="submit" onclick="onclicked();" class="btn btn-success" value="Cetak Laporan Barang"></a>
            </div>
        </div>
        <div class="row float-right">
        <script>
          function onclicked(){
          
            var awal = $("#awal").val();
             var akhir = $("#akhir").val();
             window.location.replace("/dashboard/pemilik/cabang/{{$cabang->id_cabang}}/barangmasukkeluar/cetaklaporan/" + awal + "/" + akhir);
          }
        </script>
  </div>
        <script>
             function ontambahclicked()  {
              var awal = $("#awal").val();
             var akhir = $("#akhir").val();
             window.location.replace("/dashboard/pemilik/cabang/{{$cabang->id_cabang}}/barangmasukkeluar/" + awal + "/" + akhir);
           
     };
        </script>
    </div>
    <hr>        
    <h5>Tabel Barang Masuk</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Satuan Obat</th>
                <th scope="col">Harga Obat</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barangmasuk as $brgmsk)
            <tr>    
                <td>{{$brgmsk->kodebarang}}</td>
                <td>{{$brgmsk->keteranganbarang}}</td>
                <td>{{$brgmsk->jenisbarang}}</td>
                <td>{{$brgmsk->jumlahbarang}}</td>
                <td>{{$brgmsk->tanggalmasuk}}</td>
                <td>{{$brgmsk->tanggalexpired}}</td>
                <td>{{$brgmsk->satuanbarang}}</td>
                <td>{{$brgmsk->hargabarang}}</td>
            </tr>
            @endforeach
            </tbody>
            @if(!empty($errorMsg))
                <div class="alert alert-danger"> {{ $errorMsg }}</div>
            @endif
            </tbody>
        </table>
    </div>

        
    <h5>Tabel Barang Keluar</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
    <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID Obat</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Satuan Obat</th>
                <th scope="col">Harga Obat</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barangkeluar as $brgklr)
            <tr>    
                <td>{{$brgklr->id}}</td>
                <td>{{$brgklr->kodebarang}}</td>
                <td>{{$brgklr->keteranganbarang}}</td>
                <td>{{$brgklr->jenisbarang}}</td>
                <td>{{$brgklr->jumlahbarang}}</td>
                <td>{{$brgklr->tanggalmasuk}}</td>
                <td>{{$brgklr->tanggalexpired}}</td>
                <td>{{$brgklr->satuanbarang}}</td>
                <td>{{$brgklr->hargabarang}}</td>
            </tr>
            @endforeach
            </tbody>
            @if(!empty($errorMsg))
                <div class="alert alert-danger"> {{ $errorMsg }}</div>
            @endif
            </tbody>
        </table>
    </div>

</div>
@endsection
