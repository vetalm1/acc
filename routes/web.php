<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cms', [App\Http\Controllers\CMS\CmsController::class, 'index'])->name('cms');
Route::get('/f-list', [App\Http\Controllers\CMS\CmsController::class, 'facilityList'])->name('facility-list');  //TODO переобозвать в cms-f-list
Route::get('/f-list/{facility}', [App\Http\Controllers\CMS\CmsController::class, 'facility'])->name('facility-item'); //TODO переобозвать в cms-f-list{}
Route::get('/cms-device/{device}', [App\Http\Controllers\CMS\CmsController::class, 'device'])->name('cms-device-item');
