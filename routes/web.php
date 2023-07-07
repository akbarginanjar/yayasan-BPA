<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
Route::get('/pendaftaran-tk', function () {
    return view('member.daftar-tk');
});
Route::get('/pendaftaran-dta', function () {
    return view('member.daftar-dta');
});

Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
    function () {
        Route::get('/home', [
            App\Http\Controllers\HomeController::class,
            'index',
        ])->name('home');
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });
        Route::get('/pendaftaran-tk', function () {
            return view('admin.pendaftar-tk.index');
        });
        Route::get('/pendaftaran-tk/detail', function () {
            return view('admin.pendaftar-tk.show');
        });
        Route::get('/pendaftaran-dta/detail', function () {
            return view('admin.pendaftar-dta.show');
        });
        Route::get('/pendaftaran-dta', function () {
            return view('admin.pendaftar-dta.index');
        });
        Route::get('/informasi', function () {
            return view('admin.informasi.index');
        });
    }
);

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');