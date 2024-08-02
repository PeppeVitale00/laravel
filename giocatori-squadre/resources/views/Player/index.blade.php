@extends('layout')
@section('titolo', 'Index')
@section('contenuto')
<h1>Lista dei giocatori disponibili</h1>
<h2>Numero giocatori: {{$nplayers}}</h2>
<ul>
    @foreach ($players as $giocatore)
    <li><a href="/players/{{$giocatore->id}}">{{$giocatore->cognome}} {{$giocatore->nome}}</a> </li>
    @endforeach
</ul>

<form action="/players/create" method="get">
    <input type="submit" value="Aggiungi un giocatore">
</form>