@extends('layouts.navpemilik')
@section('content')

<div class="container">
    <h4><b>Data Karyawan Apotek XYZ</b></h4>
    <div class="row pt-3">
        <div class="col-sm-2 pt-1">
            <h5>Cari Karyawan</h5>
        </div>
        <div class="col-sm-5">
            <form class="form-inline md-form mr-auto mb-4">
                <input class="form-control mr-sm-2" type="text" placeholder="ID atau Nama Karyawan" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Udin</td>
                <td>Laki-laki</td>
                <td>purwokerto</td>
                <td>14 agustus 1994</td>
                <td>Kasir</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Ucok</td>
                <td>Laki-laki</td>
                <td>purwokerto</td>
                <td>14 agustus 1994</td>
                <td>Pemilik</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Umam</td>
                <td>Laki-laki</td>
                <td>purwokerto</td>
                <td>14 agustus 1994</td>
                <td>kepalacabang</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
