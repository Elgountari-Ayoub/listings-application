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

Route::get('/', [ListingController::class, 'index']);


Route::get('listings/{listing}', [ListingController::class, 'show'])->where('id', '[0-9]+');

// Common Resource Routes: I
// index Show all listings
// show Show single listing
// create - Show form to create new listing
// store Store new listing
// edit Show form to edit listing
// update - Update listing
// destroy - pelete listing