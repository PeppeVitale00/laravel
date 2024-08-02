<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Http\Requests\StoreteamRequest;
use App\Http\Requests\UpdateteamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()    {
        $teams = Team::all();
        $nteams = Team::count();
        return view("Team.index", compact('teams'), compact('nteams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  {
        return view('Team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store() {
        $team = new team;
        $team->nome=request('nome');
        $team->anno_fondazione = request('anno_fondazione');
        $team->citta=request('citta');
        $team->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)    {
        return view('Team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(team $team)    {
        $team->nome=request('nome');
        $team->anno_fondazione = request('anno_fondazione');
        $team->citta=request('citta');
        $team->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)    {
        $team->delete();
        return redirect('/');
    }
}
