<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\InuseController;
use App\Http\Controllers\AuthController;
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

Route::post('/things/add', [ThingController::class, 'create']);

Route::put('/things/upd/{id}', [ThingController::class, 'update']);

Route::delete('/things/del/{id}', [ThingController::class, 'delete']);

Route::get('/things', [MainController::class, 'things']);
Route::get('/things/{thing}', [MainController::class, 'thing']);



Route::post('/places/add', [PlaceController::class, 'create']);

Route::put('/places/upd/{id}', [PlaceController::class, 'update']);

Route::delete('/places/del/{id}', [PlaceController::class, 'delete']);

Route::get('/places', [MainController::class, 'places']);
Route::get('/places/{place}', [MainController::class, 'place']);



Route::post('/inuses/add', [InuseController::class, 'create']);
Route::delete('/inuses/del/{id}', [InuseController::class, 'delete']);
Route::get('/inuses', [MainController::class, 'inuses']);
Route::get('/inuses/{inuse}', [MainController::class, 'inuse']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
