@extends('layout')
@section('titolo','Create Team')
@section('contenuto')
<h1>Inserisci una nuova squadra</h1>

<form action="/teams" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" > <br><br>
    <label for="citta">Città</label>
    <input type="text" name="citta" > <br><br>
    <label for="anno_fondazione">Anno di fondazione</label>
    <input type="text" name="anno_fondazione" > <br><br>
    <input type="submit" value="Aggiungi squadra">
</form>