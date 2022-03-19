<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Air_way;
use App\Http\Controllers\Consignee;
use App\Http\Controllers\Issued_by;
use App\Http\Controllers\Notify_party;
use App\Http\Controllers\Quality_express;
use App\Http\Controllers\Shipper;
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

Route::get('/', [Quality_express::class, 'index'])->name('quality_express');

//Master Data
Route::get('/master/shipper', [Shipper::class, 'index'])->name('master/shipper');
Route::get('/master/shipper/add', [Shipper::class, 'create'])->name('master/shipper/add');
Route::post('/master/shipper/store', [Shipper::class, 'store'])->name('master/shipper/store');
Route::post('/master/shipper/destroy', [Shipper::class, 'destroy'])->name('master/shipper/destroy');

Route::get('/master/consignee', [Consignee::class, 'index'])->name('master/consignee');
Route::get('/master/consignee/add', [Consignee::class, 'create'])->name('master/consignee/add');
Route::post('/master/consignee/store', [Consignee::class, 'store'])->name('master/consignee/store');
Route::post('/master/consignee/destroy', [Consignee::class, 'destroy'])->name('master/consignee/destroy');


Route::get('/master/notify_party', [Notify_party::class, 'index'])->name('master/notify_party');
Route::get('/master/notify_party/add', [Notify_party::class, 'create'])->name('master/notify_party/add');
Route::post('/master/notify_party/store', [Notify_party::class, 'store'])->name('master/notify_party/store');
Route::post('/master/notify_party/destroy', [Notify_party::class, 'destroy'])->name('master/notify_party/destroy');


Route::get('/master/issued_by', [Issued_by::class, 'index'])->name('master/issued_by');
Route::get('/master/issued_by/add', [Issued_by::class, 'create'])->name('master/issued_by/add');
Route::post('/master/issued_by/store', [Issued_by::class, 'store'])->name('master/issued_by/store');
Route::post('/master/issued_by/destroy', [Issued_by::class, 'destroy'])->name('master/issued_by/destroy');


// Data
Route::get('/quality_express', [Quality_express::class, 'index'])->name('quality_express');
Route::get('/quality_express/add', [Quality_express::class, 'create'])->name('quality_express/add');
Route::post('/quality_express/store', [Quality_express::class, 'store'])->name('quality_express/store');
Route::get('/quality_express/create_pdf/{id}', [Quality_express::class, 'detail'])->name('quality_express/create_pdf');
Route::get('/quality_express/detail/{id}', [Quality_express::class, 'detail'])->name('quality_express/detail');
Route::get('/quality_express/edit/{id}', [Quality_express::class, 'edit'])->name('quality_express/edit');
Route::post('/quality_express/destroy', [Quality_express::class, 'destroy'])->name('quality_express/destroy');
Route::post('/quality_express/update', [Quality_express::class, 'update'])->name('quality_express/update');


Route::get('/air_way', [Air_way::class, 'index'])->name('air_way');
