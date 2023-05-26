<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FavoritesHotelController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelAccommodationController;
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

Route::get('/about', function () {return view('main/about')->name('about');});
Route::get('/contact', function () {return view('main/contact')->name('contact');});
Route::get('/error404', function () {return view('main/error404')->name('error404');});

Route::get('/hotel-accommodation', [HotelAccommodationController::class, 'index'])->name('hotel-accommodation.index');
Route::get('/hotel-accommodation/basic-information', [HotelAccommodationController::class, 'viewAddHotel'])->name('hotel-accommodation.add');
Route::get('/hotel-accommodation/detailed-information', [HotelAccommodationController::class, 'viewDetailedInformationHotel'])->name('basic-information.add');

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
    Route::get('/check-booking/{id}', [BookingController::class, 'checkBooking'])->name('check.booking');
    Route::get('/booking', [BookingController::class, 'index'])->name('index.booking');

    Route::get('/admin-panel', [AdminController::class, 'showPanel'])->name('admin.panel');

    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/guests/delete/{id}', [GuestController::class, 'delete'])->name('guests.delete');
    Route::get('/agents/delete/{id}', [AgentController::class, 'delete'])->name('agents.delete');
    Route::resource('admin', AdminController::class);
    Route::resource('guests', GuestController::class);
    Route::resource('agents', AgentController::class);
    Route::resource('admin-booking', BookingAdminController::class);
});

Route::middleware('auth', 'admin', 'agent')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();


