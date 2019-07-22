@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Gaji Karyawan</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek Karya Sehat {{$cabang->nama_cabang}}</b></button>
    <div class="row pt-3">
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">ID karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jabatan</th>
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
                    <a href="/dashboard/kepala/gajikaryawan/buatgaji/{{ $pegawaiss->idkaryawan }}">
                        <input type="submit" class="btn btn-primary" value="Buat Gaji"></a>&nbsp;
                    <a href="/dashboard/kepala/gajikaryawan/lihatgaji/{{ $pegawaiss->idkaryawan }}">
                        <input type="submit" class="btn btn-info text-white" value="Lihat Gaji"></a>&nbsp;

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
