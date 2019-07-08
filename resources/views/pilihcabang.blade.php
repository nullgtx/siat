@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="row">
               @foreach($cabang as $c)
                <div class="col-sm-6 pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$c->nama_cabang}}</h5>
                            <p class="card-text">{{$c->alamat_cabang}}</p>
                            <a href="/dashboard/pemilik/cabang/{{$c->id_cabang}}/stokobat" class="btn btn-success">Masuk</a>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection