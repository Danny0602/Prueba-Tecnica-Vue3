<?php

use App\Http\Controllers\APi\HotelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



    /* This route is defining a POST request to delete a specific hotel with the given ID. The route is
    mapped to the `destroy` method of the `HotelController` class. The `name` method is used to give
    a name to the route, which can be used to generate URLs for the route. */
    Route::post('/hotel/{id}',[HotelController::class,'destroy'])->name('hotel.delete');

    /* `Route::get('/hoteles', [HotelController::class, 'getHoteles']);` is defining a GET request
    route to retrieve a list of hotels. The route is mapped to the `getHoteles` method of the
    `HotelController` class. When a user makes a GET request to the `/hoteles` endpoint, the
    `getHoteles` method will be executed and return a list of hotels. */
    Route::get('/hoteles', [HotelController::class, 'getHoteles']);

