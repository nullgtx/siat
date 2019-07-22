<!DOCTYPE html>
<html>
<head>
  <title>Laporan Penjualan </title>
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
  <h3><b>Laporan Penjualan</b></h3>
  <h3 style="font-size: 85%;"><b>Tanggal : {{$awal}} s/d {{$akhir}} </b></h3>
</center>


  <table style="border: 1px solid black;width: 100%; margin-top: 10px; border-spacing: 10px;">
    <tr>
      <th><b>Tanggal</b></th>
      <th><b>Jenis Pasien</b></th>
      <th><b>Nama Dokter</b></th>
      <th><b>Kode Obat</b></th>
      <th><b>Jumlah Obat</b></th>
      <th><b>Total Biaya</b></th>
</tr>
@foreach($transaksi as $trans)
<tr>
      <td>{{$trans->tanggal}}</td>
      <td>{{$trans->jenispasien}}</td>
      <td>{{$trans->namadokter}}</td>
      <td>{{$trans->kodebarang}}</td>
      <td>{{$trans->jumlahbarang}}</td>
      <td>{{$trans->totalbiaya}}</td>

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