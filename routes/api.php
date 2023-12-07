<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\pagesController;
use App\Http\Controllers\EductaionController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\PostsController;


Route::prefix('api')->group(function () {
    Route::resource('cafe', CafeController::class);
    

    Route::get('pages/index', [PagesController::class, 'index']);
    Route::get('pages/about', [PagesController::class, 'about']);
    Route::get('pages/features', [PagesController::class, 'features']);

    Route::resource('posts', PostsController::class);
    Route::resource('edu', EducationController::class);
    Route::resource('job', JobsController::class);
});