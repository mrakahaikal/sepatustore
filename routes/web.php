<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\ProductDetails;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Livewire\Pages\Order\OrderBooking;
use App\Http\Controllers\ProfileController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/search', [FrontController::class, 'search'])->name('front.search');

Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/check-booking', [OrderController::class, 'checkBooking'])->name('front.check_booking');
Route::post('/check-booking/details', [OrderController::class, 'checkBookingDetails'])->name('front.check_booking_details');

// Route::get('/details/{shoe:slug}', [FrontController::class, 'details'])->name('front.details');

Route::post('/order/begin/{shoe:slug}', [OrderController::class, 'saveOrder'])->name('front.save_order');

// Route::get('/order/booking/', [OrderController::class, 'booking'])->name('front.booking');

Route::get('/order/booking/customer-data', [OrderController::class, 'customerData'])->name('front.customer_data');
Route::post('/order/booking/customer-data/save', [OrderController::class, 'saveCustomerData'])->name('front.save_customer_data');

Route::get('/order/payment', [OrderController::class, 'payment'])->name('front.payment');
Route::post('/order/payment/confirm', [OrderController::class, 'paymentConfirm'])->name('front.payment_confirm');

Route::get('/order/finished/{productTransaction:id}', [OrderController::class, 'orderFinished'])->name('front.order_finished');

// Route::get('/', Home::class)->name('front.index');
Route::get('/details/{shoe:slug}', ProductDetails::class)->name('front.details');

Route::get('/order/booking/', OrderBooking::class)->name('front.booking');

// Inertia Page
Route::get('/home', function () {
    return Inertia::render('Home/Index');
});

Route::get('/homepage', [PageController::class, 'index']);



/**
 * Breeze Inertia
 */

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
