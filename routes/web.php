<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Common Resource Routes:

// index Show all listings
Route::get('/', [ListingController::class, 'index']);

// create - Show form to create new listing
Route::get('listings/create', [ListingController::class, 'create']);

// store Store new listing
Route::post('/listings', [ListingController::class, 'store']);


// edit Show form to edit listing
Route::get('listings/{listing}/edit', [ListingController::class, 'edit']);

// update - Update listing
// destroy - pelete listing

// show Show single listing
Route::get('listings/{listing}', [ListingController::class, 'show'])->where('id', '[0-9]+');
    