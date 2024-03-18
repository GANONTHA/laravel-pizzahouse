<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('welcome');
});

//route parameter view
Route::get('/pizza', [PizzaController::class, 'index']);
//add an item
Route::get('/pizza/create', [PizzaController::class, 'create']);
//pizza list view
Route::get('/pizza/{id}', [PizzaController::class, 'show']);

//route to team view with TeamController
Route::get('/teams', [TeamController::class, 'index']);
//route to single team view
Route::get('/teams/{id}', [TeamController::class, 'show']);
//route to create a new team
Route::get('/create', [TeamController::class, 'create']);
