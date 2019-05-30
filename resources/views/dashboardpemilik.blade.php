@extends('layouts.navpemilik')
@section('content')
<div class="container">
    <h4><b>Selamat Datang, {{ Auth::user()->name }}</b></h4>
    <button type="button" class="btn btn-outline-success"><b>Apotek {{Auth::user()->id_cabang}}</b></button>

    <div class="row pt-4">

        <div class="col-8">
            <h5><b>Ringkasan Informasi Apotek</b></h5>
            <h5>Penjualan Apotek</h5>

        </div>

        <div class="col-4">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Quick Tips</b></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-success">Telusuri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col pt-4">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Quick Tips</b></h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-success">Telusuri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection