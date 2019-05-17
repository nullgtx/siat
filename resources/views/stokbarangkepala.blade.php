@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Stok Barang Apotek XYZ</b></h4>
    <div class="row pt-3">
        <div class="col-sm-2 pt-1">
            <h5>Cari Barang</h5>
        </div>
        <div class="col-sm-5">
            <form class="form-inline md-form mr-auto mb-4">
                <input class="form-control mr-sm-2" type="text" placeholder="Kode atau Nama Barang" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-sm-5">
            <a href="{{ route('tambahbarang') }}"><input type="submit" class="btn btn-outline-success" value="Tambah Barang"></a>
        </div>
    </div>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
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
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dataobat as $khintil)
            <tr>
                
                <td>{{$khintil->id}}</td>
                <td>{{$khintil->kodebarang}}</td>
                <td>{{$khintil->keteranganbarang}}</td>
                <td>{{$khintil->jenisbarang}}</td>
                <td>{{$khintil->jumlahbarang}}</td>
                <td>{{$khintil->tanggalmasuk}}</td>
                <td>{{$khintil->tanggalexpired}}</td>
                <td>{{$khintil->satuanbarang}}</td>
                <td>{{$khintil->hargabarang}}</td>
                <td>
                    <a href="/dashboard/kepala/editbarang/{{ $khintil->kodebarang }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
