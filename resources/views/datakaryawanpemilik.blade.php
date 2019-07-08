@extends('layouts.navpemilik')
@section('content')
<div class="container">
    <h4>Data Karyawan Apotek</h4>
    <h4><b>{{$cabang->nama_cabang}}</b></h4>
    <h4>{{$cabang->alamat_cabang}}</h4>
    <div class="row pt-3">
        <div class="col-sm-2 pt-1">
            <h5>Cari Karyawan</h5>
        </div>
        <div class="col-sm-5">
            <form class="form-inline md-form mr-auto mb-4" method="get" action="{{route('pencariankaryawan', ['id_cabang' => $cabang->id_cabang]) }}">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="ID atau Nama Karyawan" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">ID karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datapegawai as $pegawaiss)
                <tr>
                <td>{{$pegawaiss->id}}</td>
                <td>{{$pegawaiss->idkaryawan}}</td>
                <td>{{$pegawaiss->namakaryawan}}</td>
                <td>{{$pegawaiss->jeniskelamin}}</td>
                <td>{{$pegawaiss->alamat}}</td>
                <td>{{$pegawaiss->tanggallahir}}</td>
                <td>{{$pegawaiss->role}}</td>
                </tr>
                @endforeach
            </tbody>
            @if(!empty($errMessage))
            <div class="alert alert-danger">{{ $errMessage }}</div>
            @endif
        </table>
    </div>
</div>
@endsection
