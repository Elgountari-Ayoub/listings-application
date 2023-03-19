<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Show form to create new listing
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');



// Store new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// update - Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');


// edit - Show form to edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


// destroy - pelete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Listings Manage
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// show Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->where('id', '[0-9]+');

// --------------------------------------------------------------------------------------------
// User Routes

//Show register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//store - store a new user 
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


    