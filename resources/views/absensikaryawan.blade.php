@extends('layouts.home')
@section('content')
<div class="container">
    <h3>Absensi Karyawan</h3>
    <h4><b>Apotek Aja Mriyang</b></h4>
    <div class="row pt-4">
        <div class="col">
        <!-- Isi Kolom Kesatu -->
        </div>
        <div class="col-6">
            <form>
                <div class="form-group">
                    <label for="cabangapotek">Pilih Cabang Apotek</label>
                    <select id="cabangapotek" class="form-control" required>
                    @foreach($cabang as $cab)
                        <option value="{{$cab->id_cabang}}">{{$cab->nama_cabang}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idKaryawan">Pilih ID Karyawan</label>
                    <select id="idkaryawan" class="form-control" required>
                    @foreach($cabang as $cab)
                        <option value="{{$cab->id_cabang}}">{{$cab->nama_cabang}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Absen</button>
            </form>
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