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
Route::get('/listing/create', [ListingController::class, 'create']);

//Store Data 
Route::post('/listings', [ListingController::class, 'store']);

//Update Data
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

//Single Listing Form
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Register Form
Route::get('/register', [UserController::class, 'register']);

// Store new User 

Route::post('/users', [UserController::class, 'store']);
