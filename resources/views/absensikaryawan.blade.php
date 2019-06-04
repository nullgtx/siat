@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h3>Absensi Karyawan</h3>
    <h4><b>{{$cabang->nama_cabang}}</b></h4>
    <div class="row pt-4">
        <div class="col">
        <!-- Isi Kolom Kesatu -->
        </div>
        <div class="col-6">
            <form method="post" action="javascript:void(0)">
                <div class="form-group">
                    <label for="cabangapotek">Cabang Apotek</label>
                    <input type="text" id="cabangapotek" value="{{$cabang->nama_cabang}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="idKaryawan">Pilih ID Karyawan</label>
                    <select id="idkaryawan" class="form-control" required>
                    @foreach($datapegawai as $pegawai)
                        <option value="{{$pegawai->idkaryawan}}">{{$pegawai->idkaryawan}} ({{$pegawai->namakaryawan}})</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalabsen">Tanggal</label>
                    <input type="date" id="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-info">
                        <input type="radio" name="keterangan" id="keterangan1" value="Hadir"> Hadir
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" name="keterangan" id="keterangan2" value="Sakit"> Sakit
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" name="keterangan" id="keterangan3" value="Cuti"> Cuti
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" name="keterangan" id="keterangan4" value="Alfa"> Alfa
                    </label>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-success" onclick="onSubmitClicked();" id="send_form">Absen</button>
                <script>
                    async function onSubmitClicked()  {   
                        $("#send_form").html('Menyimpan');
                            axios.post('http://localhost:8000/dashboard/kepala/absensikaryawan/simpanabsen', {
                                id_cabang: '{{$cabang->id_cabang}}',
                                idkaryawan: jQuery('#idkaryawan').val(),
                                tanggal: jQuery('#tanggal').val(),
                                keterangan: jQuery("input[name='keterangan']:checked").val(),
                        })
                        .then(function (response) {
                            Command: swal("Sukses", "Absen berhasil Disimpan", "success");
                            console.log(response);
                            $("#send_form").html('Absen');
                        })
                        .catch(function (error) {
                             Command: swal("Gagal", "Absen tidak dapat disimpan atau absen sudah dimasukkan", "error");
                            $("#send_form").html('Absen');
                            console.log(error);
                        });
                    }
                </script>
            </form>
        </div>
        <div class="col">
        <!-- Isi Kolom Ketiga -->
        </div>
    </div>

    <div class="row pt-4">
        <div class="col">
        <!-- Isi Kolom Kesatu -->
        </div>
        <div class="col-6">
            <a href="{{ route('dashboardkepala') }}">
            <input type="submit" class="btn btn-primary" value="Kembali Halaman Dashboard"></a>
        </div>
        <div class="col">
        <!-- Isi Kolom Ketiga -->
        </div>
    </div>
</div>
@endsection