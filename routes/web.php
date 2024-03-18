<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('welcome');
});

//route parameter view
Route::get('/pizzas', [PizzaController::class, 'index']);
//add an item
Route::get('/pizzas/create', [PizzaController::class, 'create']);
//pizza list view
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
//post a pizza
Route::post('/pizzas', [PizzaController::class, 'store']);

//route to team view with TeamController
Route::get('/teams', [TeamController::class, 'index']);
//route to single team view
Route::get('/teams/{id}', [TeamController::class, 'show']);
//route to create a new team
Route::get('/create', [TeamController::class, 'create']);
//post a team
Route::post('/teams', [TeamController::class, 'store']);
