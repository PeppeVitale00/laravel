<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Autore;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Book::all();
        return view('Libri.index', compact ('libro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_autore=0)
    {

        return view('Libri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $book = new Book;
        $book->Titolo =request('titolo');
        $book->Anno= request('anno');
        $book->Genere = request('genere');
        $book->author_id = request('id_autore');
        Autore::findOrFail($book->author_id);
        $book->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('Libri.show', compact ('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('Libri.edit', compact ('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Book $book)    {
        $book->Titolo =request('titolo');
        $book->Genere = request('genere');
        $book->author_id = request('id_autore');
        $book->Anno = request('anno');
        $book->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
       $book->delete();
       return redirect('/'); 
    }
}
