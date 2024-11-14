<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\RoleMiddleware;

Route::middleware([RoleMiddleware::class])->group(function () {
Route::get('/admin/dashboard1', [AdminController::class, 'dashboard1'])->middleware('auth');
Route::get('/admin/dashboard1', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/login', [PageController::class, 'login']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/buku', [PageController::class, 'book']);
Route::get('/music', [PageController::class, 'music']);
Route::get('/barang1', [PageController::class, 'barang']);
Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');

Route::get('/elektronik', [PeminjamanController::class, 'create'])->name('elektronik');
Route::get('/profile1', [AuthController::class, 'showProfilea'])->name('profile')->middleware('auth');
Route::resource('barang', BarangController::class);
Route::get('/listbarang', [BarangController::class, 'index']);


Route::get('/member/dashboard', [MemberController::class, 'dashboard'])->middleware('auth');
Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::post('barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('barang/store', [BarangController::class, 'show'])->name('barang.store');
Route::get('/admin/listbarang', [AdminController::class, 'listBarang'])->name('admin.listbarang');
Route::get('/create', [BarangController::class, 'store'])->name('tambah.barang');

Route::get('/elektronik', [PeminjamanController::class, 'showBarang'])->name('elektronik');

Route::get('/peminjaman/{barangId}', [PeminjamanController::class, 'showPeminjaman'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');

Route::get('/listpinjam', [PeminjamanController::class, 'showPeminjamanList'])->name('admin.listpinjam');
Route::get('/pinjamlist', [PeminjamanController::class, 'memberlist'])->name('list');
Route::put('/peminjaman/{id}/updateStatus', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
Route::delete('/admin/peminjaman/{id}', [PeminjamanController::class, 'deletePeminjaman'])->name('admin.peminjaman.delete');
