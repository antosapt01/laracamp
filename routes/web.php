<?php

use App\Http\Controllers\CampController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController as UsersControllr;

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


Route::get('/', [CampController::class, 'index']);
Route::get('/pricings',  [PricingController::class, 'pricings']);
Route::get('/register', function () {
    return view('/regist');
});


Route::get('/google-authentications', [UserController::class, 'google']);
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout/{camp:slug}', [CampController::class, 'checkout']);
    Route::post('/checkout/{camp}',  [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/payment/{checkout:id}', [CheckoutController::class, 'updated_payment']);


    Route::get('/checkout_success', [CheckoutController::class, 'checkout_success']);
    Route::get('/dashboard/checkout/invoices/{checkout}', [CheckoutController::class, 'invoices'])->name('user.checkout.invoice');
    // Route::get('/dashboard', [CheckoutController::class, 'index']);
});

Route::get('/dashboard', [HomeController::class, 'index']);

Route::prefix('/admin')->namespace('Admin')->name('admin.')->middleware('isadmin:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
Route::prefix('/user')->namespace('User')->name('user.')->middleware('isadmin:user')->group(function () {
    Route::get('/dashboard', [UsersControllr::class, 'index'])->name('dashboard');
});
require __DIR__ . '/auth.php';
