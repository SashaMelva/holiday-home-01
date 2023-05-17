<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PreviewController::class, 'welcomeView']);

//

Route::get('/about', function () {
    return view('main/about')->name('about');
});
Route::get('/contact', function () {
    return view('main/contact')->name('contact');
});
Route::get('/error404', function () {
    return view('main/error404')->name('error404');
});


Route::resource('hotels', HotelsController::class);
Route::resource('rooms', RoomController::class);
Route::resource('booking', BookingController::class);


Route::post('/hotels-search', [HotelsController::class, 'searchHotels'])->name('hotels.search');
Route::post('/room-for-search-hotel/{id}', [HotelsController::class, 'showHotels'])->name('hotels.list.search');
Route::middleware('auth')->group(function () {
    Route::post('/booking-review/{id}', [BookingController::class, 'bookingReview'])->name('booking.review');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
