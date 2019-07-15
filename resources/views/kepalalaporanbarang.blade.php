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
              <input class="form-control" type="date" id="tanggallahir" required>
            </div>
            <div class="col-md-2">
              <input class="form-control" type="month" id="tanggallahir" required>
            </div>
          </div>
        </form>

        </div>
        
    </div>

    	
    <h5>Tabel Barang Masuk</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Satuan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Expired Date</th>
                <th scope="col">Supplier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>          
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
    
                <td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    	
    <h5>Tabel Barang Keluar</h5>
    <!-- ISI TABEL MULAI DARI SINI -->
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Satuan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Expired Date</th>
                <th scope="col">Supplier</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>          
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
    
                <td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
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
