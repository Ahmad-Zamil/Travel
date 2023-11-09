<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/packages', [IndexController::class, 'packages'])->name('packages');
Route::get('/tour_details', [IndexController::class, 'tour_details'])->name('tour_details');
Route::get('/booking', [IndexController::class, 'booking'])->name('booking');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
