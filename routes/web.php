<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\PreviewController;
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


Route::resource('hotels', HotelsController::class );
Route::post('/hotels-search', [HotelsController::class, 'searchHotels'])->name('hotels.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
