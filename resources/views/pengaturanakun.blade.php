@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Pengaturan Akun</b></h4>
    <div class="row justify-content-center pt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID Akun</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1</td>
                <td>Kepala Cabang A</td>
                <td>kepalacabanga@siat.med</td>
                <td>kepalacabang</td>
                <td>
                    <a href="{{ route('ubahpassword') }}">
                        <input type="submit" class="btn btn-primary" value="Ubah Password"></a>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
