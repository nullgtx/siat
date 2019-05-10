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
});

Route::get('/pilihcabang', function () {
    return view('pilihcabang');
});

Route::get('/dashboard/kasir', function () {
    return view('dashboardkasir');
})->name('dashboardkasir');

Route::get('/dashboard/kepala', function () {
    return view('dashboardkepala');
})->name('dashboardkepala');

Route::get('/dashboard/stokbarang', function () {
    $role = Auth::user()->role;
    return view('stokbarang',['role'=>$role]);
})->name('stokbarang');

Route::get('/dashboard/pemilik', function () {
    return view('dashboardpemilik');
})->name('dashboardpemilik');

Route::get('/dashboard/pemilik/tambahbarang', function () {
    return view('tambahbarang');
})->name('tambahbarang');
Route::get('/dashboard/pemilik/editbarang', function () {
    return view('editbarang');
})->name('editbarang');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
