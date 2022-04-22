<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;

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

// Route::get('/', [HomeController::class, 'index', 'as' => 'home.index'])->name('home');
Route::get('/', [HomeController::class, 'register', 'as' => 'home.register'])->name('home');
Route::post('/', [HomeController::class, 'registration', 'as' => 'home.register'])->name('home');
Route::get('/thank-you/{id}', [HomeController::class, 'thank', 'as' => 'home.thank'])->name('thank');
Route::get('/result', [HomeController::class, 'result', 'as' => 'home.result'])->name('result');
Route::post('/result', [HomeController::class, 'generate_result', 'as' => 'home.generate_result'])->name('generate-result');
Route::get('/certificate/{id}', [HomeController::class, 'send_certificate_user', 'as' => 'home.send_certificate_user'])->name('certificate');
Route::get('/download/{id}', [HomeController::class, 'send_certificate_download', 'as' => 'home.send_certificate_download'])->name('download');

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'index', 'as' => 'admin.login'])->name('login');
    Route::post('/authenticate', [AuthenticationController::class, 'authenticate', 'as' => 'admin.authenticate'])->name('authenticate');
});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/detail', [HomeController::class, 'registration_details', 'as' => 'home.registration_details'])->name('detail');
    Route::get('/excel', [HomeController::class, 'excel', 'as' => 'home.excel'])->name('excel');
    Route::get('/send-certificate', [HomeController::class, 'send_certificate', 'as' => 'home.send_certificate'])->name('send_certificate');
    Route::get('/send-certificate/{id}', [HomeController::class, 'send_certificate_single', 'as' => 'home.send_certificate_single'])->name('send_certificate_single');
    Route::get('/logout', [AuthenticationController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});
