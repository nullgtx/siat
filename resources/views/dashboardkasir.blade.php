@extends('layouts.navkasir')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/table-to-json@0.13.0/lib/jquery.tabletojson.min.js" integrity="sha256-AqDz23QC5g2yyhRaZcEGhMMZwQnp8fC6sCZpf+e7pnw=" crossorigin="anonymous"></script>


<div class="container">
    <h4><b>Transaksi Apotek</b></h4>
    <h5>Apotek {{Auth::user()->id_cabang}}</h5>
    <form>
    <div class="row">
        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Nama Kasir</label>
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Nama Kasir" value="{{Auth::user()->name}}" id="namakasir" required disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-5 col-form-label">Tanggal Transaksi</label>
                <div class="col-7">
                    <input class="form-control" type="date" value="{{ date('Y-m-d') }}"id="tanggaltransaksi" disabled required>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-5 col-form-label">Pasien</label>
                <div class="col-7">
                    <select id="jenispasien" class="form-control" required>
                        <option value="" selected disable>Jenis Pasien</option>
                        <option value="1">UMUM</option>
                        <option value="2">RESEP DOKTER</option>
                        <option value="3">BPJS</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Dokter</label>
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Nama Dokter" id="namadokter">
                </div>
            </div>

        </div>

        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Kode/Nama Barang</label>
                <div class="col-7">
                    <select id="kodebarang" class="form-control mr-sm-2" type="text" placeholder="Kode atau Nama Barang" aria-label="Search">
                    @foreach($dataobat as $obat)
                    <option value ="{{ $obat->kodebarang }}"> ({{ $obat->kodebarang }}) <b> {{ $obat->keteranganbarang }} </b> ({{ $obat->jumlahbarang }})  </option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Jumlah Barang</label>
                <div class="col-7">
                    <input class="form-control" type="number" placeholder="Jumlah Barang" id="jumlahbarang" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-success btn-block">Bayar</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block" onclick="ontambahclicked();">Tambah</button>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Total Harga</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="totalharga" disabled>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Bayar</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="bayar" required>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Kembalian</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="kembalian" required>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <table class="table table-striped table-hover" id="tabeltransaksi">
            <thead class="bg-primary text-white">
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Jenis Pasien</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Total Biaya</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>

    <script>
        var stok;
        var totalbayar = new Map();
        function ontambahclicked()  {
            axios.post('/dashboard/kasir/loadbarang', {
                kodebarang: jQuery('#kodebarang').val(),
                id_cabang: '{{$cabang->id_cabang}}'
                })
                .then(function (response) {
                    stok = response.data.jumlahbarang;
                    if (stok<jQuery('#jumlahbarang').val())
                        Command: swal("Gagal", "Stok barang yang diminta tidak memadahi", "error");
                    else
                    
                    totalbayar.set(response.data.kodebarang,response.data.hargabarang)

                    $("#tabeltransaksi tbody").append(
                        "<tr id=" + response.data.kodebarang + ">" +
                        "<td>" + jQuery('#tanggaltransaksi').val() + "</td>" +
                        "<td>" + jQuery('#jenispasien').val() + "</td>" +
                        "<td>" + jQuery('#namadokter').val() + "</td>" +
                        "<td>" + response.data.kodebarang + "</td>" +
                        "<td>" + jQuery('#jumlahbarang').val() + "</td>" +
                        "<td>" + response.data.hargabarang * jQuery('#jumlahbarang').val() + "</td>" +
                        "<td><button type='button' onclick='hapusbarang(this);' class='btn btn-danger btn-sm'>Hapus</button></td>" +
                        "</tr>"
                    );
                    console.log(response);
                    var total = 0;
                    for (var b in totalbayar){
                        console.log(b);
                    }
                    $("#totalharga").val(total)
                })
                .catch(function (error) {
                    console.log(error);
                    Command: swal("Gagal", "Transaksi gagal dilakukan", "error");
                });
        }
        function hapusbarang(kodebarang){
            var rowid = $(kodebarang).parents("tr").attr('id');
            $(kodebarang).parents("tr").remove();
            delete totalbayar[kodebarang];
            for (var b in totalbayar){
                        console.log(b);
                    }
        }
    </script>

    </form>
</div>
@endsection