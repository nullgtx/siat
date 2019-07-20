<!DOCTYPE html>
<html>
<head>
  <title>Slip Gaji Karyawan </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">
    table tr td,
    table tr th{

      font-size: 15px;

    }
    hr {
      border-style: solid;
  border-width: thin;
  border-color: black;
    }
    body{
      margin-top: 30px;
      margin-left: 30px;
      margin-right: 30px;
    }
  </style>
<br>
<br>
  <center>
    <h3><b>APOTEK KARYA SEHAT CABANG {{$cabang->nama_cabang}}</b></h3>
    <h4>{{$cabang->alamat_cabang}}</h4>
  </center>

  <hr style="
  width: 90%;">
  <center>
  <h3><b>Laporan Barang Masuk Keluar</b></h3>
  <h3 style="font-size: 85%;"><b>Tanggal : {$awal} s/d {$akhir} </b></h3>
</center>

<h3 style="text-align: left;">Barang Masuk</h3>
  <table style="border: 1px solid black;width: 100%; margin-top: 10px; border-spacing: 10px;">
    <tr>
      <th><b>ID Obat</b></th>
      <th><b>Kode Obat</b></th>
      <th><b>Nama Obat</b></th>
      <th><b>Jenis Obat</b></th>
      <th><b>Stok Obat</b></th>
      <th><b>Tanggal Masuk</b></th>
      <th><b>Tanggal Kadaluarsa</b></th>
      <th><b>Satuan Obat</b></th>
      <th><b>Harga Obat</b></th>
</tr>
@foreach($barangmasuk as $br)
<tr>
      <td>{{$br->id}}</td>
      <td>{{$br->kodebarang}}</td>
      <td>{{$br->keteranganbarang}}</td>
      <td>{{$br->jenisbarang}}</td>
      <td>{{$br->jumlahbarang}}</td>
      <td>{{$br->tanggalmasuk}}</td>
      <td>{{$br->tanggalexpired}}</td>
      <td>{{$br->satuanbarang}}</td>
      <td>{{$br->hargabarang}}</td>
</tr>
@endforeach
  </table>

 
<h3 style="text-align: left;">Barang Keluar</h3>
  <table style="border: 1px solid black;width: 100%; margin-top: 10px; border-spacing: 10px;">
    <tr>
      <th><b>ID Obat</b></th>
      <th><b>Kode Obat</b></th>
      <th><b>Nama Obat</b></th>
      <th><b>Jenis Obat</b></th>
      <th><b>Stok Obat</b></th>
      <th><b>Tanggal Masuk</b></th>
      <th><b>Tanggal Kadaluarsa</b></th>
      <th><b>Satuan Obat</b></th>
      <th><b>Harga Obat</b></th>
</tr>
@foreach($barangkeluar as $kr)
<tr>
      <td>{{$kr->id}}</td>
      <td>{{$kr->kodebarang}}</td>
      <td>{{$kr->keteranganbarang}}</td>
      <td>{{$kr->jenisbarang}}</td>
      <td>{{$kr->jumlahbarang}}</td>
      <td>{{$kr->tanggalmasuk}}</td>
      <td>{{$kr->tanggalexpired}}</td>
      <td>{{$kr->satuanbarang}}</td>
      <td>{{$kr->hargabarang}}</td>
</tr>
@endforeach
  </table>

<br>
<br>
<br>
<br>

  <hr style="width: 100%">

</body>
</html>