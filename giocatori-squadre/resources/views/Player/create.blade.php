@extends('layout')
@section('titolo', 'Create Player')
@section('contenuto')
<h1>Inserisci un nuovo giocatore</h1>
<form action="/players" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome"> <br><br>
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome"> <br><br>
    <label for="eta">Eta</label>
    <input type="number" name="eta" > <br><br>
    <label for="squadra">Squadra</label>
    <input type="number" name="id_squadra" value="{{request('id_squadra')}}"> <br><br>
    <input type="submit" value="Aggiungi">
</form>