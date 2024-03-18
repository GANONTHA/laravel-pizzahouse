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
    //store method
    public function store()
    {
        //Grabe the data and store it in the database in the pizzas table
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');

        $pizza->save(); //save the pizza instance into the database

        return redirect('/');
    }
}
