<?php

use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('welcome');
});

//route parameter view
Route::get('/pizza/{id}', function ($id) {
    //use the id variable to query the db and return a match value
    return view('details', ['id' => $id]);
});

//pizza list view
Route::get('/pizza/{id}', function ($id) {
    $pizzas = [
        [
            'id' => 1,
            'name' => 'hawai',
            'price' => 20,
        ],
        [
            'id' => 2,
            'name' => 'volcano',
            'price' => 10,
        ],
        [
            'id' => 3,
            'name' => 'Americano',
            'price' => 20,
        ]
    ];


    return view('pizzas', [
        'pizzas' => $pizzas,
        //query parameter
        'type' => request('type'),
        'age' => request('age'),
        'id' => $id
    ]);
});
