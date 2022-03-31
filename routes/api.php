<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Drinks;
use App\Http\Controllers\DrinkController;

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



Route::get('/drinks', [DrinkController::class, 'index']);
Route::post('/drinkState', [DrinkController::class, 'store']);
Route::post('/drinks/{drink}', [DrinkController::class, 'update']);
Route::get('/drinks/{idDrink}', [DrinkController::class, 'getInfo']);
Route::delete('/drinks/{drink}', [DrinkController::class, 'delete']);


