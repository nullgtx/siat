@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Tambah Barang</h4>
    <div class="row">
      <div class="col-8">
      <form id="dataobat" method="post" action="javascript:void(0)">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Kode Barang</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan kode barang" id="kodebarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jenis Barang</label>
            <div class="col-9">
              <select id="jenisbarang" class="form-control" required>
                <option value="" selected disable>Pilih jenis barang</option>
                <option value="Serbuk">Serbuk</option>
                <option value="Tablet">Tablet</option>
                <option value="Tablet Kunyah">Tablet Kunyah</option>
                <option value="Pil">Pil</option>
                <option value="Kapsul">Kapsul</option>
                <option value="Kaplet">Kaplet</option>
                <option value="Salep">Salep</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Keterangan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan keterangan atau nama barang" id="keteranganbarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Satuan</label>
            <div class="col-9">
              <select id="satuanbarang" class="form-control" required>
                <option value="" selected disable>Pilih satuan barang</option>
                <option value="Strip">Strip</option>
                <option value="Botol">Botol</option>
                <option value="Pack">Pack</option>
                <option value="Butir">Butir</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Harga Barang</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  <input type="number" class="form-control" id="hargabarang" placeholder="Masukkan harga barang" required>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jumlah Barang</label>
            <div class="col-9">
              <input class="form-control" type="number" placeholder="Masukkan jumlah dalam satuan angka" id="jumlahbarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Tanggal Masuk Barang</label>
            <div class="col-9">
              <input class="form-control" type="date" id="tanggalmasuk" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Expired Barang</label>
            <div class="col-9">
              <input class="form-control" type="date" id="tanggalexpired" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
            </div>
            <script>
              async function onSubmitClicked()  {
                $("#send_form").html('Menyimpan...');
                  axios.post('http://localhost:8000/dashboard/kepala/stokbarang/tambahbarang/simpanbarang', {
                    id_cabang: '{{$cabang->id_cabang}}',
                    kodebarang: jQuery('#kodebarang').val(),
                    jenisbarang: jQuery('#jenisbarang').val(),
                    keteranganbarang: jQuery('#keteranganbarang').val(),
                    satuanbarang: jQuery('#satuanbarang').val(),
                    hargabarang: jQuery('#hargabarang').val(),
                    jumlahbarang: jQuery('#jumlahbarang').val(),
                    tanggalmasuk: jQuery('#tanggalmasuk').val(),
                    tanggalexpired: jQuery('#tanggalexpired').val()
                  })
                .then(function (response) {
                  Command: swal("Sukses", "Berhasil menambahkan barang", "success");
                  console.log(response);
                  $("#send_form").html('Simpan');
                })
                .catch(function (error) {
                  Command: swal("Gagal", "Gagal menambahkan barang", "error");
                  $("#send_form").html('Simpan');
                  console.log(error);
                });
              }
            </script>
            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('stokbarangkepala') }}" role="button">Kembali</a>
            </div>
            <div class="col-auto">
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>

        </form>
      </div>
      <div class="col-4">
        <!-- 2 of 2 -->
      </div>
    </div>
</div>
@endsection