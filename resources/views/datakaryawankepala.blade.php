@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Data Karyawan Apotek {{Auth::user()->id_cabang}}</b></h4>
    <div class="row pt-3">
        <div class="col-sm-2 pt-1">
            <h5>Cari Karyawan</h5>
        </div>
        <div class="col-sm-5">
            <form class="form-inline md-form mr-auto mb-4" method="get" action="/dashboard/kepala/datakaryawankepala/pencarian">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="ID atau Nama Karyawan" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-sm-5">
            <a href="{{ route('tambahkaryawan') }}"><input type="submit" class="btn btn-outline-success" value="Tambah karyawan"></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">ID karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
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
                <td>
                    <a href="/dashboard/kepala/datakaryawankepala/editkaryawan/{{ $pegawaiss->id }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="/dashboard/kepala/datakaryawankepala/deletekaryawan/{{ $pegawaiss->id }}">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
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
