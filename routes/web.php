<?php

use App\Http\Controllers\Dashboard\CitiesController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\HotelController;
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

Route::get('/', function () {
    return view('welcome');
});



// =====================================
// ============= Dashboard =============
// =====================================
Route::prefix("dashboard-panel")->name("dashboard.")->group(function () {
    //
    Route::get('/', function () {
        return view('dashboard.index');
    })->name("index");

    // =====================================
    // ============= Contries =============
    // =====================================
    Route::resource("countries", CountryController::class);

    // =====================================
    // ============= Cities =============
    // =====================================
    Route::resource("cities", CitiesController::class);



    // =====================================
    // ============= Hotels =============
    // =====================================
    Route::resource("hotels", HotelController::class);
});
