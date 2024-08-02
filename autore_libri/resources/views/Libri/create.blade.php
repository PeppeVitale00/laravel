@extends('layout')
@section('titolo', 'Create')
@section('contenuto')
<h1> Inserisci un nuovo libro</h1>
<form action="/books" method="post">
    @csrf
    <label for="titolo">Titolo</label> <br>
    <input type="text" name="titolo"> <br><br>
    <label for="genere">Genere</label> <br>
    <input type="text" name="genere"><br><br>
    <label for="anno">Anno di publicazione</label><br>
    <input type="text" name="anno"><br><br>
    <label for = "autore"> Autore</label> <br>
    <input type="number" name="id_autore" value="{{request('id_autore')}}" ><br><br>
    <input type="submit" value="Aggiungi">
</form>