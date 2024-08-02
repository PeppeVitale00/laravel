@extends('layout')
@section('titolo', 'Create')
@section('contenuto')
<h1>Inserisci un nuovo autore</h1>
<form action="/autores" method="post">
    @csrf
    Nome <br>
    <input type="text" name="nome"> <br><br>
    Cognome <br>
    <input type ="text" name="cognome"> <br><br>
    <input type="submit" value="Aggiungi">
</form>