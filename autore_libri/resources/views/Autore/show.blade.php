@extends('layout')
@section('titolo','Show')
@section('contenuto')
<h1>Scheda autore {{$autore->Nome}} {{$autore->Cognome}}</h1>
<b> Id Autore:</b> {{$autore->id}} <br> <br>

<b>Libri</b>
<ul>
    @foreach ($autore->books as $book)
        <li><a href="/books/{{$book->id}}">{{$book->Titolo}}</a></li>
    @endforeach
</ul>

<form action="/books/create" method="get">
    @csrf
    <input type="hidden" name="id_autore" id="id_autore" value="{{$autore->id}}">
    <input type="submit" value="Aggiungi libro a questo autore">
</form>

<form action="/autores/{{$autore->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina autore">
</form>

<form action="/autores/{{$autore->id}}/edit" method="get">
    <input type="submit" value="Modifica autore">
</form>



