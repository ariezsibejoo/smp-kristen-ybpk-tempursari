<?php

use App\Http\Controllers\BerandaController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardEditProfilController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StaffController;

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

// Route::get('/', function () {
//     return view('beranda', [
//         'title' => 'Beranda'
//     ]);
// });

Route::get('/', [BerandaController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/galeri', [GaleryController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/kontak', function () {
    return view('#footer', [
        'title' => 'beranda'
    ]);
});

Route::get('/sambutan', function () {
    return view('sambutan', [
        'title' => 'sambutan'
    ]);
});

// HALAMAN ALL POSTS
Route::get('/posts', [BeritaController::class, 'index']);
// HALAMAN SINGLE POSTS
// {} wild card untuk mengambil segala isi yg ada di slash
// ambil slug sebagai parameter dalam function
Route::get('posts/{post:slug}', [BeritaController::class, 'show']);



// {dalam kurung harus sama dengan yang dikirim dalam function disini author}
// author seharusnya user
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Posts By Author : $author->name",
        // lazy eager loading
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

// name login, untuk menamai route, dan default orang yg tidak terauth dan akses ke dashboar akan masuk ke route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');



Route::get('/register', function () {
    return view('dashboard.register', [
        'title' => 'Registrasi'
    ]);
});



// UNTUK ROUTE RESOURCE TAMBAHKAN DI MODEL GETROUTEKEYNAME JIKA DEFAULT YG DIAMBIL BUKAN ID, KALAU ID BIARKAN
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/dashboard/siswa/{murids:nis}', [DashboardSiswaController::class, 'show'])->middleware('auth');

// LIVE SEARCH
// Route::post('/dashboard/siswa/search', [DashboardSiswaController::class, 'search'])->name('search');
// INI
Route::resource('/dashboard/siswa', DashboardSiswaController::class)->middleware('auth');

// Route::prefix('dashboard')->group(function () {
//     Route::resource('siswa', DashboardSiswaController::class)->middleware('auth');
// });


// show resource tidak bisa harus bikin route sendiri
// Route::get('/dashboard/galeri/{galery:id}', [DashboardGaleriController::class, 'show'])->middleware('auth');
Route::resource('/dashboard/galeri', DashboardGaleriController::class)->middleware('auth');

Route::get('/dashboard/category/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->middleware('auth');

Route::resource('/dashboard/staff', DashboardStaffController::class)->middleware('auth');

// pake gate
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin');


// EDIT PROFIL
Route::get('/dashboard/editProfil', [DashboardEditProfilController::class, 'edit'])->name('editProfil')->middleware('auth');
Route::put('/dashboard/editProfil', [DashboardEditProfilController::class, 'update'])->name('updateProfil')->middleware('auth');
