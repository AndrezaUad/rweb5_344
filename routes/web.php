<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routing tanpa parameter
|--------------------------------------------------------------------------
*/

Route::get('/about', function () {
    return "Ini halaman About";
});

Route::get('/kontak', function () {
    return "Ini halaman Kontak";
});

/*
|--------------------------------------------------------------------------
| Routing dengan parameter
|--------------------------------------------------------------------------
*/

Route::get('/user/{name}', function ($name) {
    return "Halo, $name";
});

Route::get('/tambah/{a}/{b}', function ($a, $b) {
    return "Hasil penjumlahan: " . ($a + $b);
});

Route::get('/nilai/{nama}/{nilai}', function ($nama, $nilai) {

    if ($nilai >= 75) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    return "Nama: $nama | Nilai: $nilai | Status: $status";
});