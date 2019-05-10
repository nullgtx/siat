@extends('layouts.home')
@section('content')
<div class="container">
    <h3>Absensi Karyawan</h3>
    <h4>Apotek XXX</h4>
    <div class="row pt-4">
        <div class="col">
        <!-- Isi Kolom Kesatu -->
        </div>
        <div class="col-6">
            <form>
                <div class="form-group">
                    <label for="idKaryawan">Masukkan ID Karyawan</label>
                    <input type="text" class="form-control" id="idKaryawan" placeholder="ID Karyawan" required autofocus>
                </div>
                <button type="submit" class="btn btn-success">Absen</button>
            </form>
            <!--
            <a class= href="{{ route('home') }}">
            <input type="submit" class="btn btn-primary" value="Kembali"></a>
            -->
        </div>
        <div class="col">
        <!-- Isi Kolom Ketiga -->
        </div>
    </div>

    <div class="row pt-4">
        <div class="col">
        <!-- Isi Kolom Kesatu -->
        </div>
        <div class="col-6">
            <a href="{{ route('halamanutama') }}">
            <input type="submit" class="btn btn-primary" value="Kembali Halaman Utama"></a>
        </div>
        <div class="col">
        <!-- Isi Kolom Ketiga -->
        </div>
    </div>
</div>
@endsection