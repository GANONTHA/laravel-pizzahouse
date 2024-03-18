<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamqs = Team::all();

        return view('teams.index', [
            'teams' => $teamqs
        ]);
    }
    //method to show one signle team
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('teams.show', [
            'team' => $team
        ]);
    }
    //method to create a new team
    public function create()
    {
        return view('teams.create');
    }
}
