@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Buat Gaji Karyawan</h4>
    <div class="row">
      <div class="col-8">
        <form method="post" action="javascript:void(0)">
        
          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Tanggal</label>
            <div class="col-9">
              <input type="date" id="tanggal" class="form-control" required>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nama Karyawan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Nama Karyawan" id="namakaryawan" value="{{$datapegawai->namakaryawan}}" required disabled>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">ID Karyawan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="ID Karyawan" id="idkaryawan" value="{{$datapegawai->idkaryawan}}" required disabled> 
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jabatan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Jabatan Karyawan" id="jabatan" value="{{$datapegawai->role}}" required disabled>  
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jumlah Alfa</label>
            <div class="col-9">
              <input class="form-control" type="number" placeholder="Jumlah ketidakhadiran (alfa)" id="jumlahalfa" value="{{$jumlahalfa}}" required disabled>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Gaji Pokok</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  
                    <input type="number" class="form-control" id="gajipokok" placeholder="Masukkan Gaji Pokok" value="{{$gajipokok}}" required disabled>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Potongan Gaji</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  
                  <input type="number" class="form-control" id="potongan" placeholder="Masukkan Potongan Gaji" value="{{$potongan}}" required disabled>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Gaji Tunjangan</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  <input type="number" class="form-control" id="tunjangan" placeholder="Masukkan Gaji Tunjangan" value="{{$tunjangan}}" required disabled>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Total Gaji Akhir</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  <input type="number" class="form-control" id="gajiakhir" placeholder="Masukkan Total Gaji" value="{{$gajiakhir}}" required disabled>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
              <button type="submit" onclick="onSubmitClicked();" class="btn btn-success" id="send_form">Simpan</button>
                <script>
                    async function onSubmitClicked()  {   
                        $("#send_form").html('Menyimpan');
                            axios.post('http://localhost:8000/dashboard/kepala/gajikaryawan/buatgaji/{idkaryawan}/simpangaji', {
                                id_cabang: '{{$cabang->id_cabang}}',
                                idkaryawan: jQuery('#idkaryawan').val(),
                                tanggal: jQuery('#tanggal').val(),
                                namakaryawan: jQuery('#namakaryawan').val(),
                                jabatan: jQuery('#jabatan').val(),
                                gajipokok: jQuery('#gajipokok').val(),
                                potongan: jQuery('#potongan').val(),
                                tunjangan: jQuery('#tunjangan').val(),
                                gajiakhir: jQuery('#gajiakhir').val(),
                        })
                        .then(function (response) {
                            Command: swal("Sukses", "Gaji berhasil dibuat", "success");
                            console.log(response);
                            $("#send_form").html('Simpan');
                        })
                        .catch(function (error) {
                             Command: swal("Gagal", "Gaji tidak dapat dibuat atau gaji sudah dibuat", "error");
                            $("#send_form").html('Simpan');
                            console.log(error);
                        });
                    }
                </script>
            </div>
            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('gajikaryawankepala') }}" role="button">Kembali</a>
            </div>
            <div class="col-auto">
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>

        </form>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <div class="card-header bg-info text-white">
            Quick Info
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Gaji pokok</b> didapatkan dari UMR lokasi cabang apotek.</li>
            <li class="list-group-item"><b>Potongan gaji</b> bernilai Rp.50.000 yang dikalikan dengan jumlah alfa karyawan.</li>
            <li class="list-group-item"><b>Tunjangan gaji</b> didapatkan dari bonus UMR dengan ketentuan : 
            (1) Kepala cabang mendapatkan bonus 100% dari UMR,
            (2) Apoteker mendapatkan bonus 80% dari UMR,
            (3) Asisten Apoteker mendapatkan bonus 60% dari UMR,
            (4) Staff Keuangan mendapatkan bonus 80% dari UMR, dan
            (5) Kasir mendapatkan bonus 60% dari UMR. </li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection