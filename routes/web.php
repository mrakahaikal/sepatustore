<?php

use Livewire\Volt\Volt;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\ProductDetails;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Livewire\Pages\Order\OrderBooking;

Route::get('/search', [FrontController::class, 'search'])->name('front.search');

// Route::get('/order/booking/', [OrderController::class, 'booking'])->name('front.booking');
Route::post('/order/begin/{shoe:slug}', [OrderController::class, 'saveOrder'])->name('front.save_order');
Route::get('/order/booking/customer-data', [OrderController::class, 'customerData'])->name('front.customer_data');
Route::post('/order/booking/customer-data/save', [OrderController::class, 'saveCustomerData'])->name('front.save_customer_data');
Route::get('/order/payment', [OrderController::class, 'payment'])->name('front.payment');
Route::post('/order/payment/confirm', [OrderController::class, 'paymentConfirm'])->name('front.payment_confirm');
Route::get('/order/finished/{productTransaction:id}', [OrderController::class, 'orderFinished'])->name('front.order_finished');

Volt::route('/', 'pages.home.index')->name('front.index');

Route::get('/check-booking', [OrderController::class, 'checkBooking'])->name('front.check_booking');
Route::post('/check-booking/details', [OrderController::class, 'checkBookingDetails'])->name('front.check_booking_details');

Volt::route('brands', 'pages.brand.index')->name('brand.index');
Volt::route('brands/{brand:slug}', 'pages.brand.show.index')->name('brand.show');

Route::get('/browse', [FrontController::class, 'categories'])->name('front.categories');
Route::get('/browse/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/details/{shoe:slug}', ProductDetails::class)->name('front.details');
Route::get('/order/booking/', OrderBooking::class)->name('front.booking');


Route::prefix('user')->name('user.')->group(function () {
    // Route::view('/profile', 'profile')->name('front.profile');
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

// require __DIR__ . '/auth.php';
