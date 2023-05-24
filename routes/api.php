<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

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

Route::post('login', [Login::class, 'authenticate']);

Route::post('register', [Login::class, 'registerapi']);


Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('userlist',[Login::class,'userlist'])->name('home');
});

