
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/mahasiswa/{mahasiswa}/cv', [
    MahasiswaController::class, 'cv'
])->name('mahasiswa.cv');

Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);
