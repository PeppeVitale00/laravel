@extends('layout')

@php
    use  App\Models\Autore;
    $autore = Autore::findOrFail($book->author_id);
@endphp

@section('titolo', 'EditBook')
@section('contenuto')
<h1>Modifica libro</h1>
<b>Dati attuali</b> <br> <br>
<b>Titolo:</b> {{$book->Titolo}} <br>
<b>Genere:</b> {{$book->Genere}}<br> 
<b>Anno:</b> {{$book->Anno}}<br> 
<b>Autore:</b> {{$autore->Nome}} {{$autore->Cognome}}<br><br>
<b>Inserisci i nuovi dati</b> <br> <br>
<form action="/books/{{$book->id}}" method="post"> 
    @csrf
    @method('PUT')
    <label for="titolo">Titolo</label>
    <input type="text" name="titolo" > <br> <br> 
    <label for="genere">Genere</label>
    <input type="text" name="genere"><br> <br>
    <label for="anno">Anno</label>
    <input type="text" name="anno"> <br><br>
    <label for="autore">Autore</label>
    <input type="text" name="id_autore" > <br><br>
    <input type="submit" value="Aggiorna dati">
</form>