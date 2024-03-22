<?php

namespace App\Http\Controllers;

use App\Models\Kebabs;
use Illuminate\Http\Request;

class KebabsController extends Controller
{
    public function index()
    {
        $kebabs = Kebabs::all();
        return view('kebabs.index', ['kebabs' => $kebabs]);
    }
    //method to show a single kebab with id
    public function show($id)
    {
        $kebab = Kebabs::findOrFail($id);
        return view('kebabs.show', ['kebab' => $kebab]);
    }
    //create a kebab
    public function create()
    {
        return view('kebabs.create');
    }
    //method to grab data with kebab details: name and price then store to the database
    public function store()
    {
        $kebabs = new Kebabs();

        $kebabs->name = request('name');
        $kebabs->price = request('price');

        $kebabs->save();
        return redirect('/kebabs')->with('mesg', 'Thanks for ordering kebab');
    }
    //method to delete a kebab with id
    public function destroy($id)
    {
        $kebab = Kebabs::findOrFail($id);
        $kebab->delete();
        return redirect('/kebabs')->with('mesg', 'Kebab deleted');
    }
}
