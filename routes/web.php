<?php

use App\Http\Controllers\KebabsController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UploadedFilenController;
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
//get all kebbas
Route::get('/kebabs', [KebabsController::class, 'index'])->name('kebabs.index')->middleware('auth');
//get a single kebab
Route::get('/kebabs/{id}', [KebabsController::class, 'show'])->name('kebab.show')->middleware('auth');
//add a kebab to the databae
Route::post('/kebabs', [KebabsController::class, 'store']);
Route::get('kebabs/create', [KebabsController::class, 'create'])->name('kebab.create');
//delete a kebab
Route::delete('/kebabs/{id}', [KebabsController::class, 'destroy'])->name('kebab.destroy')->middleware('auth');

//uploadedFile

Route::get('/uploads', [UploadedFilenController::class, 'index'])->name('uploads.index')->middleware('auth');
Route::post('/uploads', [UploadedFilenController::class, 'store'])->name('uploads.store');
Route::get('/uploads/create', [UploadedFilenController::class, 'create'])->name('uploads.create');
Route::get('/uploads/{id}', [UploadedFilenController::class, 'download'])->name('uploads.download');
