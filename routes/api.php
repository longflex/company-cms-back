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
//Route::get('/projects', 'Api\HomeController@index');
Route::get('/home', [App\Http\Controllers\Api\HomeController::class, 'index']);
Route::get('/foot', [App\Http\Controllers\Api\FootController::class, 'index']);
Route::get('/manage', [App\Http\Controllers\Api\ManageController::class, 'index']);
Route::get('/review', [App\Http\Controllers\Api\ReviewController::class, 'index']);
Route::get('/product', [App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\Api\ContactController::class, 'index']);
