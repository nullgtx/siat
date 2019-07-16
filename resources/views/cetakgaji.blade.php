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

      font-size: 12px;

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
  <h3><b>SLIP GAJI KARYAWAN</b></h3>
</center>
  <table style="border: 1px solid black;width: 100%; margin-top: 10px; border-spacing: 10px;">
    @foreach($gajikaryawan as $gajiss)
    <tr>
    <td><b>Tanggal:</b>{{$gajiss->tanggal}}</th>
    </tr>
    <tr>
    <td><b>Nama:</b>{{$gajiss->namakaryawan}}</th>
    </tr>
    <tr>
    <td><b>Jabatan:</b>{{$gajiss->jabatan}}</th>
    </tr>
  </table>
    <table style="border: 1px solid black;width: 100%; margin-top: 10px; border-spacing: 10px;">
    
    <tr>
    <td><b>Gaji Pokok:</b> {{$gajiss->gajipokok}}</th>
    </tr>
    <tr>
    <td><b>Potongan(-):</b> {{$gajiss->potongan}}</th>
    </tr>
    <tr>
    <td><b>Tunjangan(+):</b>{{$gajiss->tunjangan}}</th>
    </tr>
    <tr>
      <th><hr style="width: 98%"></th>
    </tr>
    <tr>
    <td><b>Gaji Bersih:</b>{{$gajiss->gajiakhir}}</th>
    </tr>
  </table>
  <p style="text-align: right;">Diterima Oleh: </p>
<br>
<br>
<br>
<br>
  <p style="text-align: right;">{{$gajiss->namakaryawan}}</p>
  @endforeach
  <hr style="width: 100%">

</body>
</html>