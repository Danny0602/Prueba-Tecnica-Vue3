<?php

use App\Http\Controllers\HotelController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');






    /* This code is defining a GET route for the URL "/hoteles" that will be handled by the "index"
    method of the "HotelController" class. The name of this route is "hoteles.index". */
    Route::get('/hoteles', [HotelController::class, 'index'])->name('hoteles.index');

    /* This code is defining a GET route for the URL "/hotel/create" that will be handled by the
    "create" method of the "HotelController" class. The name of this route is "hotel.create". This
    route is used to display a form for creating a new hotel. */
    Route::get('/hotel/create', [HotelController::class, 'create'])->name('hotel.create');

    /* This code is defining a POST route for the URL "/hotel" that will be handled by the "store" method
    of the "HotelController" class. The name of this route is "hotel.store". This route is used to store
    the data submitted through the form for creating a new hotel. */
    Route::post('hotel', [HotelController::class, 'store'])->name('hotel.store');

    /* This code is defining a GET route for the URL "/hotel/{hotel}/edit" that will be handled by the
    "show" method of the "HotelController" class. The name of this route is "hotel.show". This route
    is used to display a form for editing a specific hotel with the given ID. The ID of the hotel to
    be edited is passed as a parameter in the URL. */
    Route::get('/hotel/{hotel}/edit', [HotelController::class, 'show'])->name('hotel.show');

    /* This code is defining a POST route for the URL "/hotel/update" that will be handled by the
    "update" method of the "HotelController" class. The name of this route is "hotel.update". This
    route is used to update the data of a specific hotel. The data to be updated is submitted
    through a form and is processed by the "update" method of the "HotelController" class. */
    Route::post('/hotel/update', [HotelController::class, 'update'])->name('hotel.update');

    /* This code is defining a GET route for the URL "/hotel/{hotel}/delete" that will be handled by
    the "destroy" method of the "HotelController" class. The name of this route is "hotel.delete".
    This route is used to delete a specific hotel with the given ID. The ID of the hotel to be
    deleted is passed as a parameter in the URL. */
    Route::get('/hotel/{hotel}/delete', [HotelController::class, 'destroy'])->name('hotel.delete');
});
