@extends('layout')
@section('titolo', 'Teams Index')
@section('contenuto')
<h1>Lista squadre partecipanti al torneo</h1>
<h2>Numero squadre: {{$nteams}}</h2>
<ul>
    @foreach ($teams as $squadra)
    <li><a href="/teams/{{$squadra->id}}">{{$squadra->nome}} </a> </li>
    @endforeach
</ul>

<form action="/teams/create" method="get">
    <input type="submit" value="Aggiungi una squadra">
</form>