<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
});
Route::group(['middleware' => ['role:seller']], function () {
    Route::get('/seller', function(){
        return view('seller');
    })->name('seller');
});
Route::group(['middleware' => ['role:customer']], function () {
    Route::get('/customer', function(){
        return view('customer');
    })->name('customer');
});
