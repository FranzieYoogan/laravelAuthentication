<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('layouts.home');
// });

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});




Route::get('/login', function () {
    return view('layouts.login');
});


Route::post("/",[Controller::class,'storedLoginHome']);

Route::post("/login",[Controller::class,'loginLogic']);


Route::post('/dashboard',[Controller::class,'loginLogic']);

Route::get('/signout',[Controller::class,'sessionDie']);