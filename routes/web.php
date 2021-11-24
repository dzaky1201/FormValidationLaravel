<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);
Route::post('/proses-form-validator', [
    MahasiswaController::class,
    'prosesFormValidator'
]);
Route::post('/proses-form-request', [
    MahasiswaController::class,
    'prosesFormRequest'
]);

Route::get('/form-pendaftaran/id', [
    MahasiswaController::class,
    'formPendaftaranId'
]);
Route::get('/form-pendaftaran/en', [
    MahasiswaController::class,
    'formPendaftaranEn'
]);

Route::get('/form-pendaftaran/{locale?}', [
    MahasiswaController::class,
    'formPendaftaran'
]);
