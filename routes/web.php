
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('page/dashboard');
});

Route::get('/login', function () {
    return view('page/login');
});

Route::view('/manajemen-barang', 'page.manajemen-barang');
Route::view('/formulir-peminjaman', 'page.formulir-peminjaman');
Route::view('/persetujuan-peminjaman', 'page.persetujuan-peminjaman');
Route::view('/dashboard-karyawan', 'page.dashboard-karyawan');
Route::view('/jadwal-pengembalian', 'page.jadwal-pengembalian');
Route::view('/permohonan', 'page.permohonan');
Route::view('/riwayat-peminjaman', 'page.riwayat-peminjaman');
Route::view('/pengembalian-barang', 'page.pengembalian-barang');
