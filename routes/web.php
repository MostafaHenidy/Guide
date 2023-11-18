<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\EductaionController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\jobsController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [App\Http\Controllers\pagesController::class, 'index']);


Route::get('/about', [App\Http\Controllers\pagesController::class, 'about']);
Route::get('/features', [App\Http\Controllers\pagesController::class, 'features']);
Route::resource('posts', PostsController::class);
Route::resource('edu', EductaionController::class);
Route::resource('job', jobsController::class);
Route::resource('cafe', CafeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
