@extends('layout')

@php
    use App\Models\Autore;
    $autore = Autore::findOrFail($book->author_id);
@endphp

@section('titolo','ShowBook')
@section('contenuto')
<h1>Scheda Libro {{$book->Titolo}}</h1> 
<b>Id Libro:</b> {{$book->id}}<br><br>
<b>Genere:</b> {{$book->Genere}}<br><br>
<b>Anno:</b> {{$book->Anno}} <br><br>
<b>Autore:</b> <a href="/autores/{{$autore->id}}"> {{$autore->Nome}} {{$autore->Cognome}}</a> <br><br>
<form action="/books/{{$book->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina libro">
</form>

<form action="/books/{{$book->id}}/edit" method="get">
    <input type="submit" value="Modifica libro">
</form>
