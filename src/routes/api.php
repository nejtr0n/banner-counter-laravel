<?php

use App\Http\Controllers\Api\CounterController;
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

Route::get("/increment", [CounterController::class, "increment"])->name("increment");
Route::get("/getCounter", [CounterController::class, "getCounter"])->name("getCounter");
