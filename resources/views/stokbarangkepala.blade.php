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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="{{ route('editbarang') }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>
                    <a href="{{ route('editbarang') }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                <td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>
                    <a href="{{ route('editbarang') }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
