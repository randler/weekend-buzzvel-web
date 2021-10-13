<?php

use App\Http\Controllers\Hotels\HotelsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/hotels/{lat?}/{lng?}/{orderBy?}', [HotelsController::class, 'index'])->name('hotels.index');
Route::post('/search', [HotelsController::class, 'search'])->name('hotels.search');
Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/contacts', function () {
    return view('home.contacts');
})->name('contacts');
