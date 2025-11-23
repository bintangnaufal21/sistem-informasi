<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Register page
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/data-user', function () {
    return view('data_user');
})->name('data-user');

Route::get('/data-buku', function () {
    return view('data_buku');
})->name('data-buku');

Route::view('/data-buku/create', 'create_buku')->name('data-buku.create');

Route::get('/status-buku', function () {
    // dummy status data
    $status = (object)[
        'total' => 120,
        'tersedia' => 84,
        'dipinjam' => 28,
        'reserved' => 6,
        'rusak' => 2,
    ];

    // dummy list recent books (UI only)
    $books = collect([
        (object)['id'=>1, 'title'=>'Iblis Tidak Pernah Mati', 'status'=>'Tersedia'],
        (object)['id'=>2, 'title'=>'Laravel Dasar', 'status'=>'Dipinjam'],
        (object)['id'=>3, 'title'=>'Kisah Lain', 'status'=>'Tersedia'],
    ]);

    return view('status_buku', compact('status','books'));
})->name('status-buku');
