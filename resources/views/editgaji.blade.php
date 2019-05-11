@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Edit Gaji Karyawan</h4>
    <div class="row">
      <div class="col-8">
        <form>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Nama Karyawan</label>
            <div class="col-9">
              <select id="namakaryawan" class="form-control" required>
                <option value="" selected disable>Pilih nama karyawan</option>
                <option value="1">Udin</option>
                <option value="2">Ujang</option>
                <option value="3">Utet</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">ID Karyawan</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Nampil ID Karyawan" id="idkaryawan" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jabatan</label>
            <div class="col-9">
              <select id="jabatan" class="form-control" required>
                <option value="" selected disable>Pilih jabatan</option>
                <option value="1">Kasir</option>
                <option value="2">Kepala Cabang</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Absensi</label>
            <div class="col-9">
              <select id="Absensi" class="form-control" required>
                <option value="" selected disable>Pilih Absensi</option>
                <option value="1">1 hari</option>
                <option value="2">2 hari</option>
                <option value="2">xxx hari</option>
                <option value="2">30 hari</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Gaji Pokok</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  <input type="number" class="form-control" id="gajipokok" placeholder="Masukkan Gaji Pokok" required>
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
                  <input type="number" class="form-control" id="potongangaji" placeholder="Masukkan Potongan Gaji" required>
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
                  <input type="number" class="form-control" id="gajitunjangan" placeholder="Masukkan Gaji Tunjangan" required>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Total Gaji</label>
            <div class="col-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                  <input type="number" class="form-control" id="Total Gaji" placeholder="Masukkan Total Gaji" required>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('gajikaryawankepala') }}" role="button">Kembali</a>
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