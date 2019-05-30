@extends('layouts.navkasir')
@section('content')

<div class="container">
    <h4><b>Transaksi Apotek</b></h4>
    <h5>Apotek {{Auth::user()->id_cabang}}</h5>
    <form>
    <div class="row">
        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">ID Transaksi</label>
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Kode Transaksi" id="idtransaksi" required disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-5 col-form-label">Tanggal Transaksi</label>
                <div class="col-7">
                    <input class="form-control" type="date" id="tanggaltransaksi" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-5 col-form-label">Pasien</label>
                <div class="col-7">
                    <select id="jenispasien" class="form-control" required>
                        <option value="" selected disable>Jenis Pasien</option>
                        <option value="1">UMUM</option>
                        <option value="2">RESEP DOKTER</option>
                        <option value="3">BPJS</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Dokter</label>
                <div class="col-7">
                    <input class="form-control" type="text" placeholder="Nama Dokter" id="namadokter">
                </div>
            </div>

        </div>

        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Kode/Nama Barang</label>
                <div class="col-7">
                    <input class="form-control mr-sm-2" type="text" placeholder="Kode atau Nama Barang" aria-label="Search">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-5 col-form-label">Jumlah Barang</label>
                <div class="col-7">
                    <input class="form-control" type="number" placeholder="Jumlah Barang" id="jumlahbarang" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-danger btn-block">Hapus</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-success btn-block">Bayar</button>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Total Harga</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="totalharga" disabled>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Bayar</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="bayar" required>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-4 col-form-label">Kembalian</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                            <input type="number" class="form-control" id="kembalian" required>
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Item</th>
                <th scope="col">No</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </div>
                </td>
                <td>1</td>
                <td>PWTBTK001</td>
                <td>OBH</td>
                <td>1</td>
                <td>Botol</td>
                <td>15000</td>
                <td>15000</td>
                </tr>
                <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </div>
                </td>
                <td>2</td>
                <td>PWTBTK002</td>
                <td>Vics</td>
                <td>1</td>
                <td>Botol</td>
                <td>15000</td>
                <td>15000</td>
                </tr>
                <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </div>
                </td>
                <td>3</td>
                <td>PWTBTK003</td>
                <td>Decadryl</td>
                <td>1</td>
                <td>Botol</td>
                <td>15000</td>
                <td>15000</td>
                </tr>
            </tbody>
        </table>
    </div>

    </form>
</div>
@endsection