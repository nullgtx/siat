@extends('layouts.navkasir')
@section('content')

<div class="container">
    <h4><b>History Transaksi</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek Karya Sehat {{$cabang->nama_cabang}}</b></button>
    <form>
    <div class="form-group row">
            <div class="col-md-2">
            <span>Tanggal</span>
            @if(isset($awal))
              <input class="form-control" type="text" id="awal" name="awal" value="{{$awal}}" placeholder="yyyy-mm-dd" required>
            @else
            <input class="form-control" type="text" id="awal" name="awal"  placeholder="yyyy-mm-dd" required>
            
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
            });
        </script>
        <div class="col-xs-12 mb-2">
          <button type="button" id="lihatbutton" class="btn btn-outline-success" onclick="ontambahclicked();">Lihat Transaksi</button>
        </div>
        <div class="row float-right">
    </div>
        <script>
             function ontambahclicked()  {
              var awal = $("#awal").val();
             window.location.replace("/dashboard/kasir/historitransaksi/" + awal );
           
     };
        </script>
        

    <div class="row justify-content-center">
    <table class="table table-striped table-hover" id="tabeltransaksi">
            <thead>
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">JenisPasien</th>
                <th scope="col">NamaDokter</th>
                <th scope="col">KodeBarang</th>
                <th scope="col">JumlahBarang</th>
                <th scope="col">TotalBiaya</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $trans)
                <tr>
                    <td>{{$trans->tanggal}}</td>
                    <td>{{$trans->jenispasien}}</td>
                    <td>{{$trans->namadokter}}</td>
                    <td>{{$trans->kodebarang}}</td>
                    <td>{{$trans->jumlahbarang}}</td>
                    <td>{{$trans->totalbiaya}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection