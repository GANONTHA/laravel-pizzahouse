<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //public function index
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            //query parameter
            'type' => request('type'),
            'age' => request('age'),

        ]);
    }
    public function show($id)
    {
        return view('pizas.show', ['id' => $id]);
    }
}
