<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;


Route::get('/', [SliderController::class, 'index']);

