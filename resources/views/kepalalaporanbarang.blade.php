@extends('layouts.navkepala')
@section('content')

<div class="container">
    <h4><b>Barang Masuk Keluar</b></h4>
    <div class="row pt-3">
        <div class="col-sm">
            <h5>Filter Barang Masuk dan Keluar</h5>
        <form>
        <div class="form-group row">
            <div class="col-md-2">
              <select id="jeniskelamin" class="form-control" required>
                <option value="" selected disable>Pilih</option>
                <option value="1">Harian</option>
                <option value="2">Bulanan</option>
                <option value="3">Tahunan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-2">
              <input class="form-control" type="date" id="tanggalAwal" name="awal" required>
            </div>
            <div class="col-md-2">
              <input class="form-control" type="date" id="tanggalAkhir" name="akhir" required>
            </div>
          </div>
        </form>
        <div class="col-xs-12">
        <button type="submit" class="btn btn-outline-success" onclick="ontambahclicked();">Lihat</button>
        </div>
        </div>
        <script>
             function ontambahclicked()  {
              var awal = $("#tanggalAwal").val();
             var akhir = $("#tanggalAkhir").val();
             window.location.replace("/dashboard/kepala/laporanbarang/" + awal + "/" + akhir);
     };
        </script>
    </div>

        
    <h5>Tabel Barang Masuk</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID Obat</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Satuan Obat</th>
                <th scope="col">Harga Obat</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barangmasuk as $brgmsk)
            <tr>    
                <td>{{$brgmsk->id}}</td>
                <td>{{$brgmsk->kodebarang}}</td>
                <td>{{$brgmsk->keteranganbarang}}</td>
                <td>{{$brgmsk->jenisbarang}}</td>
                <td>{{$brgmsk->jumlahbarang}}</td>
                <td>{{$brgmsk->tanggalmasuk}}</td>
                <td>{{$brgmsk->tanggalexpired}}</td>
                <td>{{$brgmsk->satuanbarang}}</td>
                <td>{{$brgmsk->hargabarang}}</td>
            </tr>
            @endforeach
            </tbody>
            @if(!empty($errorMsg))
                <div class="alert alert-danger"> {{ $errorMsg }}</div>
            @endif
            </tbody>
        </table>
    </div>

        
    <h5>Tabel Barang Keluar</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
    <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID Obat</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Satuan Obat</th>
                <th scope="col">Harga Obat</th>
                </tr>
            </thead>
            <tbody>
            @foreach($barangkeluar as $brgklr)
            <tr>    
                <td>{{$brgklr->id}}</td>
                <td>{{$brgklr->kodebarang}}</td>
                <td>{{$brgklr->keteranganbarang}}</td>
                <td>{{$brgklr->jenisbarang}}</td>
                <td>{{$brgklr->jumlahbarang}}</td>
                <td>{{$brgklr->tanggalmasuk}}</td>
                <td>{{$brgklr->tanggalexpired}}</td>
                <td>{{$brgklr->satuanbarang}}</td>
                <td>{{$brgklr->hargabarang}}</td>
            </tr>
            @endforeach
            </tbody>
            @if(!empty($errorMsg))
                <div class="alert alert-danger"> {{ $errorMsg }}</div>
            @endif
            </tbody>
        </table>
    </div>
 <div class="row float-right">
     <div class="col-xs-12">
            <a href="#"><input type="submit" class="btn btn-outline-success" value="Buat Laporan"></a>
        </div>
  </div>
</div>
@endsection
