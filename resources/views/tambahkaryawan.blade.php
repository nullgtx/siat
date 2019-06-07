@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Tambah Karyawan</h4>
    <div class="row">
      <div class="col-8">
      <form id="datapegawai" method="post" action="javascript:void(0)">

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">ID Karyawan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan ID karyawan" id="idkaryawan" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nama</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan Nama Karyawan" id="namakaryawan" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jenis Kelamin</label>
            <div class="col-9">
              <select id="jeniskelamin" class="form-control" required>
                <option value="" selected disable>Pilih jenis kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Alamat</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan Alamat Karyawan" id="alamat" required>
            </div>
          </div>

 
          <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Tanggal Lahir</label>
            <div class="col-9">
              <input class="form-control" type="date" id="tanggallahir" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jabatan</label>
            <div class="col-9">
              <select id="role" class="form-control" required>
                <option value="" selected disable>Pilih Jabatan Karyawan</option>
                <option value="Kepala Cabang">Kepala Cabang</option>
                <option value="Apoteker">Apoteker</option>
                <option value="Asisten Apoteker">Asisten Apoteker</option>
                <option value="Staff Keuangan">Staff Keuangan</option>
                <option value="Kasir">Kasir</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
            <button type="submit" onclick="onSubmitClicked();" id="send_form" class="btn btn-outline-success">Simpan</button>
            </div>
            <script>
              async function onSubmitClicked()  {
                $("#send_form").html('Menyimpan...');
                  axios.post('http://localhost:8000/dashboard/kepala/datakaryawankepala/tambahkaryawan/simpan', {
                    id_cabang: '{{$cabang->id_cabang}}',
                    idkaryawan: jQuery('#idkaryawan').val(),
                    namakaryawan: jQuery('#namakaryawan').val(),
                    jeniskelamin: jQuery('#jeniskelamin').val(),
                    alamat: jQuery('#alamat').val(),
                    tanggallahir: jQuery('#tanggallahir').val(),
                    role: jQuery('#role').val()
                  })
                .then(function (response) {
                  Command: swal("Sukses", "Berhasil menambahkan karyawan", "success");
                  console.log(response);
                  $("#send_form").html('Simpan');
                })
                .catch(function (error) {
                  Command: swal("Gagal", "Gagal menambahkan karyawan", "error");
                  $("#send_form").html('Simpan');
                  console.log(error);
                });
              }
            </script>

            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('datakaryawankepala') }}" role="button">Kembali</a>
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