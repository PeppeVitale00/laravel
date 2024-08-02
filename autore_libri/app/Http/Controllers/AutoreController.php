<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use App\Http\Requests\StoreAutoreRequest;
use App\Http\Requests\UpdateAutoreRequest;


class AutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autore = Autore::all();
        return view('Autore.index', compact('autore'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Autore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $autore= new Autore;
        $autore->Nome = request('nome');
        $autore->Cognome = request ('cognome');
        $autore->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autore $autore)
    {
        return view('Autore.show', compact('autore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autore $autore)
    {
        return view('Autore.edit', compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Autore $autore)  {
        $autore->Nome = request('nome');
        $autore->Cognome = request('cognome');
        $autore->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autore $autore)
    {
        $autore->delete();
        return redirect('/');
    }
}
