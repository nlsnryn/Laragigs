<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


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
//All listing - index
Route::get('/', [ListingController::class, 'index']);

//Show Create Form 
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

//Store Data 
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Update Data
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Single Listing Form
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Login User
Route::post('/users/authentication', [UserController::class, 'authentication']);

// Show Register Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Store new User and Auto Login
Route::post('/users', [UserController::class, 'store']);

//Logout User
Route::post('/logout', [UserController::class, 'logout']);

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


