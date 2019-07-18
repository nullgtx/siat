@extends('layouts.navkasir')
@section('content')

<div class="container">
    <h4><b>History Transaksi</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek {{$cabang->nama_cabang}}</b></button>
    <form>
    <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Tanggal Transaksi</label>
        <div class="col-2">
            <input class="form-control" type="date" id="tanggaltransaksi" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2">
            <button type="submit" class="btn btn-success btn-block">Lihat</button>
        </div>
    </div>

    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Jam</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Total Transaksi</th>
                <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>PWT001010419</td>
                <td>UMUM</td>
                <td>10:25</td>
                <td>01-04-2019</td>
                <td>15000</td>
                <td>
                    <a href="#">
                        <input type="submit" class="btn btn-primary" value="Lihat">
                    </a>
                </td>
                </tr>
                <tr>
                <td>2</td>
                <td>PWT002010419</td>
                <td>UMUM</td>
                <td>10:30</td>
                <td>01-04-2019</td>
                <td>15000</td>
                <td>
                    <a href="#">
                        <input type="submit" class="btn btn-primary" value="Lihat">
                    </a>
                </td>
                </tr>
                <tr>
                <td>3</td>
                <td>PWT003010419</td>
                <td>UMUM</td>
                <td>10:35</td>
                <td>01-04-2019</td>
                <td>15000</td>
                <td>
                    <a href="#">
                        <input type="submit" class="btn btn-primary" value="Lihat">
                    </a>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection