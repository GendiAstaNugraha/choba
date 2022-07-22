<?php

use App\Http\Controllers\Account\Admin\DashboardController;
use App\Http\Controllers\Account\Admin\DataAdminController;
use App\Http\Controllers\Account\Admin\ProfileController;
use App\Http\Controllers\Account\Customer\CartController;
use App\Http\Controllers\Account\Customer\DataCustomerController;
use App\Http\Controllers\Account\Customer\HomeController;
use App\Http\Controllers\Account\seller\DataSellerController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth','role:admin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile');
    // admin
    Route::get('/admin/admin', [DataAdminController::class, 'index'])->name('data.admin');
    Route::post('/admin/admin/add', [DataAdminController::class, 'add'])->name('add.admin');
    Route::get('/admin/admin/delete/{id}', [DataAdminController::class, 'delete'])->name('delete.admin');
    // seller
    Route::get('/admin/seller', [DataSellerController::class, 'index'])->name('data.seller');
    Route::post('/admin/seller/add', [DataSellerController::class, 'add'])->name('add.seller');
    Route::get('/admin/seller/delete/{id}', [DataSellerController::class, 'delete'])->name('delete.seller');
    // customer
    Route::get('/admin/customer', [DataCustomerController::class, 'index'])->name('data.customer');
    Route::post('/admin/customer/add', [DataCustomerController::class, 'add'])->name('add.customer');
    Route::get('/admin/customer/delete/{id}', [DataCustomerController::class, 'delete'])->name('delete.customer');
});


Route::group(['middleware' => ['auth','role:seller']], function () {
    Route::get('/seller', function(){
        return view('seller');
    })->name('seller');
});

Route::group(['middleware' => ['auth','role:customer']], function () {
    Route::get('/customer', [HomeController::class, 'index'])->name('customer');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.customer');
});
