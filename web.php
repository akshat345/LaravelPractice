<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Middleware\UserAuth;

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

Route::get('/login', function () {
    return view('login');
});
//route::view('/',"login");
Route::post("/login",[UserController::class,"login"]);
Route::get("/",[ProductController::class,"index"]);
