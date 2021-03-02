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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clhome', [App\Http\Controllers\Client\ClientHome::class, 'index'])->name('client-home');

Route::resource('facility', App\Http\Controllers\CMS\Facility\FacilityController::class);
Route::resource('device', App\Http\Controllers\CMS\Device\DeviceController::class);
Route::resource('indication', App\Http\Controllers\Client\Indication\IndicationController::class);

Route::get('/report/{facility}', [App\Http\Controllers\Client\Report\ReportController::class, 'main'])->name('report');