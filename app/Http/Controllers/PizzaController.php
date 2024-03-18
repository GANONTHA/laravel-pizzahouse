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
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create()
    {
        return view('pizzas.create');
    }
}
