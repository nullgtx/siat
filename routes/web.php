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

Route::get('/pilihcabang', function () {
    return view('pilihcabang');
});

Route::get('/absensikaryawan', function () {
    return view('absensikaryawan');
})->name('absensikaryawan');

Route::get('/dashboard/kasir', function () {
    return view('dashboardkasir');
})->name('dashboardkasir');

Route::get('/dashboard/kasir/stokbarang', function () {
    return view('stokbarangkasir');
})->name('stokbarangkasir');

Route::get('/dashboard/kepala', function () {
    return view('dashboardkepala');
})->name('dashboardkepala');

Route::get('/dashboard/kepala/tambahbarang', function () {
    return view('tambahbarang');
})->name('tambahbarang');

Route::get('/dashboard/kepala/editbarang', function () {
    return view('editbarang');
})->name('editbarang');

Route::get('/dashboard/kepala/stokbarang', function () {
    return view('stokbarangkepala');
})->name('stokbarangkepala');

Route::get('/dashboard/kepala/tambahkaryawan', function () {
    return view('tambahkaryawan');
})->name('tambahkaryawan');

Route::get('/dashboard/kepala/editkaryawan', function () {
    return view('editkaryawan');
})->name('editkaryawan');

Route::get('/dashboard/kepala/datakaryawan', function () {
    return view('datakaryawankepala');
})->name('datakaryawankepala');

Route::get('/dashboard/pemilik', function () {
    return view('dashboardpemilik');
})->name('dashboardpemilik');

Route::get('/dashboard/pemilik/stokbarang', function () {
    return view('stokbarangpemilik');
})->name('stokbarangpemilik');

Route::get('/dashboard/pemilik/datakaryawan', function () {
    return view('datakaryawanpemilik');
})->name('datakaryawanpemilik');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');