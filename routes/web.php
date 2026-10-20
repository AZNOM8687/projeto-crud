<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

Route::get('/', function () {
    return redirect('/carros');
});

Route::resource('carros', CarroController::class);