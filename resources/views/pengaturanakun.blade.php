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
                @foreach($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <a href="{{ route('ubahpassword') }}">
                        <input type="submit" class="btn btn-primary" value="Ubah Password"></a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
