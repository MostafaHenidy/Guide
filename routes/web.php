<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/require __DIR__.'/api.php';

use App\Http\Controllers\pagesController;
use App\Http\Controllers\EductaionController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pagesController::class, 'index']);
Route::get('/about', [pagesController::class, 'about']);
Route::get('/features', [pagesController::class, 'features']);

Route::resource('posts', PostsController::class);
Route::resource('edu', EductaionController::class);
Route::resource('job', jobsController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
