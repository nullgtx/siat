@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Tambah Karyawan</h4>
    <div class="row">
      <div class="col-8">
        <form>

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
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
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
            <label for="example-text-input" class="col-3 col-form-label">Role</label>
            <div class="col-9">
              <select id="role" class="form-control" required>
                <option value="" selected disable>Pilih Role Karyawan</option>
                <option value="1">Pemilik</option>
                <option value="2">Karyawan</option>
                <option value="3">Kasir</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
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