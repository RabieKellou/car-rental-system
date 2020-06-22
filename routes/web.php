<?php

use App\City;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data['cities'] = City::cursor();
    return view('home', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Car
Route::resource('cars', 'CarController');
//REview
Route::resource('reviews', 'ReviewController');
//Reservation
Route::resource('reservations', 'ReservationController');

Route::get('api/cities/{city_id}', function ($city_id) {
    $locations = City::findOrFail($city_id)->locations;
    return response()->json($locations);
});
