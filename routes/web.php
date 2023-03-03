<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


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

//Single Listing Form
Route::get('/listing/{listing}', [ListingController::class, 'show']);
