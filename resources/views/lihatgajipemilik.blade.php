<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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
  <div>
            <a href="{{ url('/dashboard/pemilik/pilihcabang') }}">
            <input type="submit" class="btn btn-primary" value="Kembali"></a>
        </div>
  </div>
  </div>
  </body>
 