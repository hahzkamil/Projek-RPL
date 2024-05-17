<?php

use App\Http\Controllers\SellerControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;


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
Route::get('/', function () {
    return view('map.map');
});
Route::get('login', function () {
    return view('landing.login');
});
Route::get('/signup', function () {
    return view('landing.signup');
});

Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('editprofile', function () {
    return view('profile.editprofile');
});


//seller
Route::get('/sellerlist', [SellerControllers::class, 'index']);
Route::get('/sellerlist', [SellerControllers::class, 'showSeller']);