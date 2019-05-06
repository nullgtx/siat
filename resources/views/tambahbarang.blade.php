@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Tambah Barang</h4>
    <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Kode Obat</label>
  <div class="col-10">
    <input class="form-control" type="text" value="XXXXXXXXX" id="example-text-input">
  </div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Jenis Obat</label>
      <div class="col-10">
      <select id="inputState" class="form-control">
        <option selected>Pilih...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      </div>
    </div>
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
  <div class="col-10">
    <input class="form-control" type="text" value="XXXXXXXXX" id="example-text-input2">
  </div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Satuan</label>
      <div class="col-10">
      <select id="inputState" class="form-control">
        <option selected>Pilih...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      </div>
    </div>
    <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Jumlah</label>
  <div class="col-10">
    <input class="form-control" type="text" value="XXXXXXXXX" id="example-text-input3">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary">Kembali</button>
    </div>
  </div>
</div>
@endsection