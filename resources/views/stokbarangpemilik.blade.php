@extends('layouts.navpemilik')
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
    </div>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>PWTBTK001</td>
                <td>Obat uhuk</td>
                <td>OBH</td>
                <td>5</td>
                <td>1 Januari 2019</td>
                <td>1 Januari 2020</td>
                <td>Botol</td>
                <td>15000</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>PWTBTK001</td>
                <td>Obat uhuk</td>
                <td>OBH</td>
                <td>5</td>
                <td>1 Januari 2019</td>
                <td>1 Januari 2020</td>
                <td>Botol</td>
                <td>15000</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>PWTBTK001</td>
                <td>Obat uhuk</td>
                <td>OBH</td>
                <td>5</td>
                <td>1 Januari 2019</td>
                <td>1 Januari 2020</td>
                <td>Botol</td>
                <td>15000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
