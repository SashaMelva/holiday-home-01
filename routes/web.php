<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminHotelController;
use App\Http\Controllers\Admin\BookingAdminController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\ListController;
use App\Http\Controllers\Agent\SettingsAccountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FavoritesHotelController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\NewHotelController;
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

Route::get('/hotel-accommodation', [NewHotelController::class, 'index'])->name('hotel-accommodation.index');
Route::get('/hotel-accommodation/agent-information', [NewHotelController::class, 'viewAgentInformation'])->name('agent.information.add');
Route::get('/hotel-accommodation/hotel-information', [NewHotelController::class, 'viewAddHotel'])->name('hotel.information.add');
Route::get('/hotel-accommodation/end', [NewHotelController::class, 'viewEndAccommodationHotel'])->name('hotel-accommodation.end');

Route::post('/hotel-accommodation/agent-information/store', [NewHotelController::class, 'storeAgentInformation'])->name('agent.information.store');
Route::post('/hotel-accommodation/hotel-information/store', [NewHotelController::class, 'storeAddHotel'])->name('hotel.information.store');


Route::resource('hotels', HotelsController::class);
Route::resource('rooms', RoomController::class);
Route::resource('booking', BookingController::class);


Route::post('/hotels-search', [HotelsController::class, 'searchHotels'])->name('hotels.search');
Route::get('/hotels-search/{id}', [HotelsController::class, 'searchHotelsForCity'])->name('hotels.city.search');
Route::post('/hotels-search-support', [HotelsController::class, 'searchSupportHotels'])->name('hotels.search.support');
Route::get('/hotels-search-support-disable', [HotelsController::class, 'searchSupportDisableHotels'])->name('hotels.search.support.disable');


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

    Route::get('/admin/hotels', [AdminHotelController::class, 'index'])->name('admin.hotels');
    Route::get('/admin/hotels/new', [AdminHotelController::class, 'newHotels'])->name('admin.hotels.new');
    Route::get('/admin/hotel/{id}', [AdminHotelController::class, 'show'])->name('admin.hotel.info');
    Route::post('/admin/hotel/save/status/{id}', [AdminHotelController::class, 'statusSave'])->name('status.hotel.save');

    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/guests/delete/{id}', [GuestController::class, 'delete'])->name('guests.delete');
    Route::get('/agents/delete/{id}', [AgentController::class, 'delete'])->name('agents.delete');
    Route::resource('admin', AdminController::class);
    Route::resource('guests', GuestController::class);
    Route::resource('agents', AgentController::class);
    Route::resource('admin-booking', BookingAdminController::class);

    Route::resource('lists', ListController::class);

    Route::get('/agent/settings', [SettingsAccountController::class, 'index'])->name('agent.settings');
    Route::get('/agent/dashboard', [AgentController::class, 'showPanel'])->name('agent.panel');
    Route::get('/agent/booking', [AgentController::class, 'showBooking'])->name('agent.booking');
    Route::get('/agent/hotel/settings', [SettingsAccountController::class, 'hotel'])->name('agent.settings.hotel');
    Route::post('/agent/hotel/settings/update/{id}', [SettingsAccountController::class, 'updateHotel'])->name('hotel.information.update');
});

Route::middleware('auth', 'admin', 'agent')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();


