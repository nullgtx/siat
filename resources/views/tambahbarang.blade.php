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
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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
                                    axios.post('http://localhost:8000/tambahbarang/obat', {
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
                                            toastr.options = {
                                                "closeButton": false,
                                                "debug": false,
                                                "newestOnTop": false,
                                                "progressBar": false,
                                                "positionClass": "toast-top-center",
                                                "preventDuplicates": false,
                                                "onclick": null,
                                                "showDuration": "300",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "fadeIn",
                                                "hideMethod": "fadeOut"
                                            };
                                            Command: toastr["success"]("Berhasil menyimpan data", "Berhasil");

                                            console.log(response);
                                            $("#send_form").html('Simpan');
                                        })
                                        .catch(function (error) {
                                            toastr.error("Gagal menyimpan data", "Kesalahan");
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