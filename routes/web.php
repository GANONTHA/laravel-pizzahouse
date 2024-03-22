<?php

use App\Http\Controllers\KebabsController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('welcome');
});

//route parameter view
Route::get('/pizzas', [PizzaController::class, 'index'])->middleware('auth');
//add an item
Route::get('/pizzas/create', [PizzaController::class, 'create']);
//pizza list view
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth');
//post a pizza
Route::post('/pizzas', [PizzaController::class, 'store']);
//delete a pizza
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->middleware('auth');

//route to team view with TeamController
Route::get('/teams', [TeamController::class, 'index'])->middleware('auth');
//route to single team view
Route::get('/teams/{id}', [TeamController::class, 'show']);
//route to create a new team
Route::get('/create', [TeamController::class, 'create']);
//post a team
Route::post('/teams', [TeamController::class, 'store']);
//delete a team
Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Kebabs
//get al kebbas
Route::get('/kebabs', [KebabsController::class, 'index'])->name('kebabs.index');
//get a single kebab
Route::get('/kebabs/{id}', [KebabsController::class, 'show'])->name('kebab.show');
//add a kebab to the databae
Route::post('/kebabs', [KebabsController::class, 'store']);
Route::get('/create', [KebabsController::class, 'create'])->name('kebab.create');
//delete a kebab
Route::delete('/kebabs/{id}', [KebabsController::class, 'destroy'])->name('kebab.destroy')->middleware('auth');
