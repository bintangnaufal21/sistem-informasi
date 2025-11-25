<?php

use Termwind\Components\Raw;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

/* Admin */

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
   /*  Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.tambah'); */

    Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/tambah', [CategoryController::class, 'create'])->name('kategori.tambah');
    Route::post('/kategori/store', [CategoryController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/edit', [CategoryController::class, 'edit'])->name('kategori.edit');
    Route::post('/kategori/update/{id}', [CategoryController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/delete/{id}', [CategoryController::class, 'destroy'])->name('kategori.delete');
});

/* User */
Route::prefix('user')->name('user.')->group(function () {});

// admin




Route::get('/admin/user/index', function () {
    return view('admin.user.index');
})->name('admin.user.index');

Route::get('/admin/buku/index', function () {
    return view('admin.buku.index');
})->name('admin.buku.index');

Route::get('/admin/buku/tambah', function () {
    return view('admin.buku.tambah');
})->name('admin.buku.tambah');

Route::get('/admin/buku/edit', function () {
    return view('admin.buku.edit');
})->name('admin.buku.edit');

Route::get('/admin/agenda/tambah', function () {
    return view('admin.agenda.tambah');
})->name('admin.agenda.tambah');

// user
Route::get('/user/', function () {
    return view('user.home');
})->name('user.home');

Route::get('user/about', function () {
    return view('user.about');
})->name('user.about');

Route::get('/user/katalog/', function (){
    return view('user.katalog.index');
})->name('user.katalog.index');

Route::get('/user/katalog/show', function(){
    return view('user.katalog.show');
})->name('user.katalog.show');

Route::get('/user/agenda', function (){
    return view('user.agenda');
})->name('user.agenda');

Route::get('/user/detailbuku', function (){
    return view('user.detail_buku');
})->name('user.detail');

Route::get('/user/profile/', function (){
    return view('user.profile.index');
})->name('user.profile');

Route::get('/user/profile/edit', function (){
    return view('user.profile.edit');
})->name('user.profile.edit');

Route::get('/user/pinjam/', function (){
    return view('user.pinjam.index');
})->name('user.pinjam');

Route::get('/user/perpanjang', function (){
    return view('user.pinjam.perpanjang');
})->name('user.perpanjang');

Route::get('/user/denda', function (){
    return view('user.pinjam.denda');
})->name('user.denda');
// Route untuk auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
