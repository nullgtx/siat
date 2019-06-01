@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Edit Barang</h4>
    <div class="row">
      <div class="col-8">
        <form id="editbarang" method="POST" action="/dashboard/kepala/editbarang/updatebarang">
        {{ csrf_field() }}
        <input type="hidden" name="idbarang" value="{{ ($dataobat) ? $dataobat['id'] : '' }}">
        
          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Kode Barang</label>
            <div class="col-9">
              <input class="form-control" type="text" placeholder="Masukkan kode barang" value="{{ $dataobat->kodebarang }}" id="kodebarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jenis Barang</label>
            <div class="col-9">
              <select id="jenisbarang" class="form-control" required>
                <option value="{{ $dataobat->jenisbarang }}" selected>{{ $dataobat->jenisbarang }}</option>
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
              <input class="form-control" type="text" placeholder="Masukkan keterangan atau nama barang" value="{{ $dataobat->keteranganbarang }}" id="keteranganbarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Satuan</label>
            <div class="col-9">
              <select id="satuanbarang" class="form-control" required>
                <option value="{{ $dataobat->satuanbarang }}" selected>{{ $dataobat->satuanbarang }}</option>
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
                  <input type="number" class="form-control" id="hargabarang" placeholder="Masukkan harga barang" value="{{ $dataobat->hargabarang }}"required>
                <div class="input-group-append">
                  <span class="input-group-text">,00</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Jumlah Barang</label>
            <div class="col-9">
              <input class="form-control" type="number" placeholder="Masukkan jumlah dalam satuan angka" value="{{ $dataobat->jumlahbarang }}" id="jumlahbarang" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Tanggal Masuk Barang</label>
            <div class="col-9">
              <input class="form-control" type="date" id="tanggalmasuk" value="{{ $dataobat->tanggalmasuk }}" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-3 col-form-label">Expired Barang</label>
            <div class="col-9">
              <input class="form-control" type="date" id="tanggalexpired" value="{{ $dataobat->tanggalexpired }}" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('stokbarangkepala') }}" role="button">Kembali</a>
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