@switch($role)
    @case($role === 'pemilik')
        @extends('layouts.navpemilik')
    @break
    @case($role === 'kepalacabang')
        @extends('layouts.navkepala')
    @break
    @case($role === 'kasir')
        @extends('layouts.navkasir')
    @break
@endswitch
@section('content')

<div class="container">
    <h4><b>Gaji Karyawan Apotek XYZ</b></h4>
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
        @if ($role == 'kepalacabang')
        <div class="col-sm-5">
            <a href="{{ route('tambahgaji') }}"><input type="submit" class="btn btn-outline-success" value="Buat Gaji Karyawan"></a>
        </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">Role</th>
                <th scope="col">Absensi</th>
                <th scope="col">Tanggal masuk</th>
                <th scope="col">Gaji</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>xxx</td>
                <td>Udin</td>
                <td>Kasir</td>
                <td>30 hari</td>
                <td>14 agustus 1994</td>
                <td>2100000</td>
                <td>
                    <a href="{{ route('editgaji') }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>xxx</td>
                <td>Udin</td>
                <td>Kasir</td>
                <td>30 hari</td>
                <td>14 agustus 1994</td>
                <td>2100000</td>
                <td>
                    <a href="{{ route('editgaji') }}">
                        <input type="submit" class="btn btn-primary" value="Edit"></a>&nbsp;
                    <a href="#">
                        <input type="submit" class="btn btn-danger" value="Hapus"></a>
                </td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>xxx</td>
                <td>Udin</td>
                <td>Kasir</td>
                <td>30 hari</td>
                <td>14 agustus 1994</td>
                <td>2100000</td>
                <td>
                    <a href="{{ route('editgaji') }}">
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
