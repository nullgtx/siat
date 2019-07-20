<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('halamanutama');



/* Route untuk KASIR */

Route::get('/dashboard/kasir', function () {
    return view('dashboardkasir');
})->name('dashboardkasir');

Route::get('/dashboard/kasir/stokbarang', function () {
    return view('stokbarangkasir');
})->name('stokbarangkasir');

/* ------------------------------------------------------------------------------ */

/* Route untuk Kepala Cabang */

Route::get('/dashboard/kepala/datakaryawan/tambahkaryawan', function () {
    return view('tambahkaryawan');
})->name('tambahkaryawan');

Route::get('/dashboard/kepala/datakaryawan/editkaryawan', function () {
    return view('editkaryawan');
})->name('editkaryawan');

Route::get('/dashboard/kepala/datakaryawan', function () {
    return view('datakaryawankepala');
})->name('datakaryawankepala');

Route::get('/dashboard/kepala/editgaji', function () {
    return view('editgaji');
})->name('editgaji');

Route::get('/dashboard/kepala/pengaturanakun', function () {
    return view('pengaturanakun');
})->name('pengaturanakun');

Route::get('/dashboard/kepala/pengaturanakun/ubahpassword', function () {
    return view('ubahpassword');
})->name('ubahpassword');

/* ------------------------------------------------------------------------------ */

/* Route untuk Pemilik */

Route::get('/dashboard/pemilik', function () {
    return view('dashboardpemilik');
})->name('dashboardpemilik');


Route::get('/dashboard/pemilik/datakaryawan', function () {
    return view('datakaryawanpemilik');
})->name('datakaryawanpemilik');

/* ------------------------------------------------------------------------------ */

Auth::routes();

/* -----------------------------------ABSENSI------------------------------------ */

Route::get('/dashboard/kepala/absensikaryawan', 'AbsensiController@index')->name('absensikaryawan');
Route::post('/dashboard/kepala/absensikaryawan/simpanabsen', 'AbsensiController@store')->name('simpanabsen');

/* --------------------------------KEPALA CABANG--------------------------------- */

/* -------DASHBOARD------ */

Route::get('/dashboard/kepala', 'cabangcontroller@indexKepala')->name('dashboardkepala');

Route::get('/dashboard/kepala/penjualan', 'TransaksiController@indexPenjualanKepala')->name('PenjualanKepalaCabang');

/* -----STOK BARANG------ */

Route::get('/dashboard/kepala/stokbarang', 'obatcontroller@index')->name('stokbarangkepala');
Route::get('/dashboard/kepala/stokbarang/tambahbarang', 'obatcontroller@inputBarang')->name('tambahbarang');
Route::post('/dashboard/kepala/stokbarang/tambahbarang/simpanbarang','obatController@store')->name('simpanbarang');
Route::get('/dashboard/kepala/stokbarang/deletebarang/{id}', 'obatcontroller@deleteBarang')->name('deleteBarang');
Route::get('/dashboard/kepala/stokbarang/editbarang/{id}', 'obatcontroller@editBarang')->name('editbarang');
Route::post('/dashboard/kepala/stokbarang/editbarang/updatebarang', 'obatcontroller@updateBarang')->name('updatebarang');
Route::get('/dashboard/kepala/stokbarang/pencarian','obatcontroller@search');


/* -----BARANG MASUK KELUAR----- */

Route::get('/dashboard/kepala/laporanbarang', 'BarangMasukController@index')->name('kepalalaporanbarang');


/* -----DATA KARYAWAN----- */

Route::get('/dashboard/kepala/datakaryawankepala/pencarian','PegawaisController@search');
Route::post('/dashboard/kepala/datakaryawankepala/editkaryawan/updatekaryawan','PegawaisController@updatepegawai')->name('updatepegawai');
Route::get('/dashboard/kepala/datakaryawankepala/editkaryawan/{id}','PegawaisController@editkaryawan')->name('editkaryawan');
Route::post('/dashboard/kepala/datakaryawankepala/tambahkaryawan/simpan','PegawaisController@store')->name('pegawai');
Route::get('/dashboard/kepala/datakaryawankepala/tambahkaryawan', 'PegawaisController@inputPegawai')->name('tambahkaryawan');
Route::get('/dashboard/kepala/datakaryawankepala', 'PegawaisController@index')->name('datakaryawankepala');
Route::get('/dashboard/kepala/datakaryawankepala/deletekaryawan/{id}', 'PegawaisController@deleteKaryawan')->name('deleteKaryawan');


/* ------GAJI KARYAWAN------ */

Route::get('/dashboard/kepala/gajikaryawan', 'GajiKaryawanController@index')->name('gajikaryawankepala');
Route::get('/dashboard/kepala/gajikaryawan/buatgaji/{idkaryawan}', 'GajiKaryawanController@buatGaji')->name('tambahgaji');
Route::post('/dashboard/kepala/gajikaryawan/buatgaji/{idkaryawan}/simpangaji', 'GajiKaryawanController@store')->name('simpangaji');
Route::get('/dashboard/kepala/gajikaryawan/lihatgaji/{idkaryawan}', 'GajiKaryawanController@lihatGaji')->name('lihatgaji');
Route::get('/dashboard/kepala/gajikaryawan/cetakgaji/{id}', 'GajiKaryawanController@exportPDF')->name('cetakgaji');


/* -----PENGATURAN AKUN----- */

Route::get('/dashboard/kepala/pengaturanakun', 'UserController@index')->name('pengaturanakun');


/* ------------------------------------------------------------------------------ */


/* ------------------------------------KASIR------------------------------------- */

/* -----STOK BARANG----- */

Route::get('/dashboard/kasir','TransaksiController@index')->name('dashboardkasir');
Route::post('/dashboard/kasir/loadbarang','obatcontroller@loadbarang');
Route::post('/dashboard/kasir/simpantransaksi','TransaksiController@save')->name('simpantransaksi');
Route::get('/dashboard/kasir/stokbarang', 'obatcontroller@tampilStokBarang_Kasir')->name('stokbarangkasir');
Route::get('/dashboard/kasir/stokbarang/pencarian','obatcontroller@searchkasir');
Route::get('/dashboard/kasir/historitransaksi', 'TransaksiController@indexHistoriTransaksi')->name('historitransaksi');

/* ------------------------------------------------------------------------------- */


/* -----------------------------------PEMILIK------------------------------------- */
Route::get('/dashboard/pemilik/pilihcabang', 'cabangcontroller@indexCabang')->name('pilihcabang');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/stokobat','cabangcontroller@tampilisicabang')->name('stokbarangpemilik');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/stokobat/pencarian','obatcontroller@searchobatpemilik')->name('pencarianobatpemilik');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/datakaryawan','cabangcontroller@tampilkaryawancabang')->name('karyawanpemilik');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/datakaryawan/pencarian','PegawaisController@searchkaryawan')->name('pencariankaryawan');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/gajikaryawan','cabangcontroller@tampilgajicabang')->name('tampilgajipemilik');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/gajikaryawan/lihatgaji/{idkaryawan}', 'GajiKaryawanController@lihatGajipemilik')->name('lihatgajipemilik');
Route::get('/dashboard/pemilik/cabang/{id_cabang}/gajikaryawan/cetakgaji/{idkaryawan}', 'GajiKaryawanController@exportPDFpemilik')->name('slipgajipemilik');

/* -----STOK BARANG----- */


/* ------------------------------------------------------------------------------- */