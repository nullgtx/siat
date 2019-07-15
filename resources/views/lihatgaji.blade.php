@extends('layouts.navkepala')
@section('content')
<div class="container">
<div class="row justify-content-center">
  <table class="table table-striped">
    <thead>
                <tr>
                <th scope="col">ID karyawan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Potongan Gaji</th>
                <th scope="col">Gaji Tunjangan</th>
                <th scope="col">Total Gaji Akhir</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($gajikaryawan as $gajiss)
                <tr>
                <td>{{$gajiss->idkaryawan}}</td>
                <td>{{$gajiss->tanggal}}</td>
                <td>{{$gajiss->namakaryawan}}</td>
                <td>{{$gajiss->jabatan}}</td>
                <td>{{$gajiss->gajipokok}}</td>
                <td>{{$gajiss->potongan}}</td>
                <td>{{$gajiss->tunjangan}}</td>
                <td>{{$gajiss->gajiakhir}}</td>
                <td>
                    <a href="/dashboard/kepala/gajikaryawan/cetakgaji/{{ $gajiss->id }}">
                        <input type="submit" class="btn btn-success" value="Cetak Gaji"></a>
                </td>
                </tr>
                @endforeach
            </tbody>
  </table>
  </div>
  </div>
  @endsection