<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //public function index
    public function index()
    {
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

        ]);
    }
    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
