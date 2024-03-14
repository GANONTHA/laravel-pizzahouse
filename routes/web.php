<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('welcome');
});

//route parameter view
Route::get('/pizza', [PizzaController::class, 'index']);

//pizza list view
Route::get('/pizza/{id}', [PizzaController::class, 'show']);
