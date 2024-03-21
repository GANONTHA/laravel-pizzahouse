<?php

namespace App\Http\Controllers;

use App\Models\Kebabs;
use Illuminate\Http\Request;

class KebabsController extends Controller
{
    public function index()
    {
        return view('kebabs.index');
    }
    //method to show a single kebab with id
    public function show($id)
    {
        $kebab = Kebabs::findOrFail($id);
        return view('kebabs.show', ['kebab' => $kebab]);
    }
}
