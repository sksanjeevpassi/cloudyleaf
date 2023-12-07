<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\Homecontroller::class, 'index']);
Route::get('/about', [\App\Http\Controllers\Homecontroller::class, 'about']);
Route::get('/contact', [\App\Http\Controllers\Homecontroller::class, 'contact']);
Route::get('/services', [\App\Http\Controllers\Homecontroller::class, 'services']);
Route::get('/blogs', [\App\Http\Controllers\Homecontroller::class, 'blogs']);
Route::post('/sendcontact', [\App\Http\Controllers\Homecontroller::class, 'sendcontact']);



