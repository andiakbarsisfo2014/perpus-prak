<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Buku;

Route::get('/', function () {
    return view('welcome');
});

Route::get('daftar-buku', 
    [
        Buku::class, 
        'tampilkanDataBuku'
    ]
)->name('buku');

Route::get('tambah-buku', [Buku::class, 'formBuku'])->name('buku.baru');
Route::post('tambah-buku', [Buku::class, 'simpanBuku'])->name('simpan.buku');
