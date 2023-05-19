<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FavoritesHotelController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/room-for-search-hotel/{id}', [HotelsController::class, 'showHotel'])->name('hotels.list.search');

Route::middleware('auth')->group(function () {
    Route::get('/booking-review/{id}', [BookingController::class, 'viewBookingReview'])->name('booking.review');
    Route::get('/favorites-hotels/save/{id}', [FavoritesHotelController::class, 'save'])->name('favorites.hotels.save');
    Route::resource('favorites-hotels', FavoritesHotelController::class);
    Route::get('/favorites-hotels/delete/{id}', [FavoritesHotelController::class, 'delete'])->name('favorites.hotels.delete');

    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::post('/save-user-data', [UserProfileController::class, 'saveUserData'])->name('user.data.save');
    Route::post('/save-user-password-data', [UserProfileController::class, 'saveUserPassportData'])->name('user.passport.save');
    Route::get('/check-booking', [BookingController::class, 'checkBooking'])->name('check.booking');
    Route::get('/ticket-booking', [BookingController::class, 'getTicketBooking'])->name('ticket.booking');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
