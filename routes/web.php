<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderCompleteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/checkout/{order}', [CheckoutController::class, 'show'])->name('checkout.show');

Route::get('/order-complete/{order}', OrderCompleteController::class)->name('orders.complete');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/api-tokens', [App\Http\Controllers\ApiTokenManagerController::class, 'index'])->name('apiTokens.index');
});

