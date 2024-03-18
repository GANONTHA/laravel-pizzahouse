<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', [
            'teams' => $teams
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
    //method to store a new team
    public function store()
    {
        $team =  new Team();
        $team->name = request('name');
        $team->year = request('year');
        $team->country = request('country');
        $team->worth = request('worth');
        $team->palmares = request('palmares');
        $team->save();

        return redirect('/teams')->with('tmssg', 'Congrat! Your team has been added!');
    }
}
