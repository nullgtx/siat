@extends('layouts.navkasir')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/table-to-json@0.13.0/lib/jquery.tabletojson.min.js" integrity="sha256-AqDz23QC5g2yyhRaZcEGhMMZwQnp8fC6sCZpf+e7pnw=" crossorigin="anonymous"></script>


<div class="container">
    <h4><b>Transaksi Apotek</b></h4>
    <h5>Apotek {{Auth::user()->id_cabang}}</h5>
    <form method="post" action="javascript:void(0)">
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
                        <option value="UMUM">UMUM</option>
                        <option value="RESEP DOKTER">RESEP DOKTER</option>
                        <option value="BPJS">BPJS</option>
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
                    <button type="submit" class="btn btn-success btn-block" onclick="onSubmitClicked();">Bayar</button>
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
                            <input type="number" class="form-control" id="totalharga" value="0" disabled>
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
                            <input type="number" class="form-control" id="bayar" onkeyup="hitung();" required>
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
                <th scope="col">JenisPasien</th>
                <th scope="col">NamaDokter</th>
                <th scope="col">KodeBarang</th>
                <th scope="col">JumlahBarang</th>
                <th scope="col">TotalBiaya</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>

    <script>
        var stok;
        
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

                    var price = response.data.hargabarang * parseInt(jQuery('#jumlahbarang').val());
                    var ttl = parseInt($("#totalharga").val()) + price;
                    $("#totalharga").val(ttl);

                    $("#tabeltransaksi tbody").append(
                        "<tr id=" + response.data.kodebarang + ">" +
                        "<td>" + jQuery('#tanggaltransaksi').val() + "</td>" +
                        "<td>" + jQuery('#jenispasien').val() + "</td>" +
                        "<td>" + jQuery('#namadokter').val() + "</td>" +
                        "<td>" + response.data.kodebarang + "</td>" +
                        "<td>" + jQuery('#jumlahbarang').val() + "</td>" +
                        "<td id = 'totalhargabayar'>" + response.data.hargabarang * jQuery('#jumlahbarang').val() + "</td>" +
                        "<td><button type='button' onclick='hapusbarang(this, " + price + ");' id='btnHapus' class='btn btn-danger btn-sm'>Hapus</button></td>" +
                        "</tr>"
                    );
                })
                .catch(function (error) {
                    console.log(error);
                    Command: swal("Gagal", "Transaksi gagal dilakukan", "error");
                });
        }
        function hapusbarang(kodebarang, price){
            $(kodebarang).parents("tr").remove();
            var ttl = parseInt($("#totalharga").val()) - price;
            $("#totalharga").val(ttl);
        }
        function hitung(){
            var totalharga = $("#totalharga").val();
            var bayar = $("#bayar").val();
            var kembalian = bayar - totalharga;
            $("#kembalian").val(kembalian);
        }
        function onSubmitClicked(){
            var transaksi = $('#tabeltransaksi').tableToJSON({
                ignoreColumns: [6]
            });
            var trans = JSON.stringify(transaksi);
            console.log(trans);
            $("#send_form").html('Menyimpan'); 
            axios.post('/dashboard/kasir/simpantransaksi', {
            id_cabang : '{{$cabang->id_cabang}}',
            namakasir : '{{Auth::user()->name}}',
            tabeltransaksi : trans
            })
            .then(function (response) {
                Command: swal("Sukses", "Transaksi berhasil dilakukan", "success");
                console.log(response);
                $("#send_form").html('Bayar');
            })
            .catch(function (error) {
                Command: swal("Gagal", "Transaksi gagal dilakukan", "error");
                console.log(error);
                $("#send_form").html('Bayar');
            });
        }
    </script>

    </form>
</div>
@endsection