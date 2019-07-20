@extends('layouts.navpemilik')
@section('content')

<div class="container">
    <h4><b>Penjualan</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek {{$cabang->nama_cabang}}</b></button>
    <form>
    <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Tanggal Transaksi</label>
        <div class="col-2">
            <input class="form-control" type="date" id="tanggaltransaksi" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2">
            <button type="submit" class="btn btn-success btn-block">Lihat</button>
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-success btn-block">Cetak</button>
        </div>
    </div>

    

    <div class="row justify-content-center">
    <table class="table table-striped table-hover" id="tabeltransaksi">
            <thead class="bg-primary text-white">
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