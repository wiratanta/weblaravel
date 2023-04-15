<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutSucessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationCheckoutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\OpenDetailController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PrivateCheckoutController;
use App\Http\Controllers\PrivateDetailController;
use App\http\Controllers\Registercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [RegisterController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/discovery', [DiscoveryController::class, 'discovery'])->name('discovery');
Route::get('/destination', [DestinationController::class, 'destination'])->name('destination');
Route::get('/package', [PackageController::class, 'package'])->name('package');
Route::get('/aboutus', [AboutUsController::class, 'aboutUs'])->name('aboutus');
Route::get('/destination-detail', [DestinationDetailController::class,'destinationDetail'])->name('destination-detail');
Route::get('/private-detail', [PrivateDetailController::class, 'privateDetail'])->name('private-detail');
Route::get('/open-detail', [OpenDetailController::class, 'openDetail'])->name('open-detail');
Route::get('/destination-checkout',[DestinationCheckoutController::class, 'destinationCheckout'])->name('destination-checkout');
Route::get('/private-checkout', [PrivateCheckoutController::class,'privateCheckout'])->name('private-checkout');
Route::get('/checkout-sucess', [CheckoutSucessController::class, 'checkoutSucess'])->name('checkoutSucess');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');