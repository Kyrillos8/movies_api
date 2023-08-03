<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route for fetching movies
Route::get("list",[MovieController::class,'list']);
Route::get("list/{id}",[MovieController::class,'listparams']);

//Routes For adding Movies Controller
Route::post("add", [MovieController::class, 'add']);

//Routes For deleting Movies Controller
Route::delete("del/{id}",[MovieController::class,"del"]);

//Routes For updating Movies Controller
Route::put("update", [MovieController::class, 'update']);