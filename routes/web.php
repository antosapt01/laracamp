<?php

use App\Http\Controllers\CampController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricingController;

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
// Route::get('/signin', function () {
//     return view('login');
// });
Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout/{camp:slug}', [CampController::class, 'checkout']);
    Route::post('/checkout/{camp}',  [CheckoutController::class, 'checkout'])->name('checkout');

    Route::get('/checkout_success', [CheckoutController::class, 'checkout_success']);
    Route::get('/dashboard', [CheckoutController::class, 'index']);
});


Route::get('/google-authentications', [UserController::class, 'google']);
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
