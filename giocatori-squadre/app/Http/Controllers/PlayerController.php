<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Http\Requests\StoreplayerRequest;
use App\Http\Requests\UpdateplayerRequest;
use App\Models\team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nplayers = Player::count();
        $players = Player::all();
        return view('Player.index', compact('players'), compact('nplayers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  {
        return view('Player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()     {
        $player= new player;
        $player->nome=request('nome');
        $player->cognome=request('cognome');
        $player->eta=request('eta');
        $player->team_id=request('id_squadra');
        team::findOrFail($player->team_id);
        $player->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(player $player) {
        return view('Player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(player $player) {
        $player->nome=request('nome');
        $player->cognome=request('cognome');
        $player->eta=request('eta');
        $player->team_id=request('squadra');
        $player->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player) {
        $player->delete();
        return redirect('/');
    }
}
