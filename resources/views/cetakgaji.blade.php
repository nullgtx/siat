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
      font-size: 9pt;
    }
  </style>
  <center>
    <h5>Slip Gaji Karyawan</h4>
  </center>
 
  <table class='table table-bordered'>
    <thead>
                <tr>
                <th scope="col">ID karyawan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Potongan Gaji</th>
                <th scope="col">Gaji Tunjangan</th>
                <th scope="col">Total Gaji Akhir</th>
                </tr>
            </thead>
            <tbody>
            @foreach($gajikaryawan as $gajiss)
                <tr>
                <td>{{$gajiss->idkaryawan}}</td>
                <td>{{$gajiss->tanggal}}</td>
                <td>{{$gajiss->namakaryawan}}</td>
                <td>{{$gajiss->jabatan}}</td>
                <td>{{$gajiss->gajipokok}}</td>
                <td>{{$gajiss->potongan}}</td>
                <td>{{$gajiss->tunjangan}}</td>
                <td>{{$gajiss->gajiakhir}}</td>
                </tr>
                @endforeach
            </tbody>
  </table>
</body>
</html>