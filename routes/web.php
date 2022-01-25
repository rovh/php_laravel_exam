<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\InuseController;
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

Route::get('/things', [MainController::class, 'things']);
Route::post('/things/add', [ThingController::class, 'create']);
Route::get('/things/{thing}', [MainController::class, 'thing']);

Route::get('/places', [MainController::class, 'places']);
Route::post('/places/add', [PlaceController::class, 'create']);
Route::get('/places/{place}', [MainController::class, 'place']);

Route::get('/inuses', [MainController::class, 'inuses']);
Route::get('/inuses/add', [InuseController::class, 'create']);
Route::get('/inuses/{inuse}', [MainController::class, 'inuse']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
