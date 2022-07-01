<?php

use App\Http\Controllers\KaryawanController;
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

Route::get("/",[KaryawanController::class,"index"]);
Route::post("/store",[KaryawanController::class,"store"]);
Route::get("/show/{id}",[KaryawanController::class,"show"]);
Route::put("/update/{id}",[KaryawanController::class,"update"]);
Route::delete("/delete/{id}",[KaryawanController::class,"destroy"]);