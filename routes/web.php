<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use Auth;
use Illuminate\Support\Facades\Auth;


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
Route::get('/operator', 'OperatorController@index')->name('Operator')->middleware('Operator');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin',  [AdminController::class, 'index'])->name('index')->middleware('admin');
Route::get('/pengguna', 'PenggunaController@index')->name('Pengguna')->middleware('Pengguna');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
