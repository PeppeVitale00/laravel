@extends('layout')
@section('titolo', 'Show Team')
@section('contenuto')
<h1>{{$team->nome}}</h1>
<b>Anno di fondazione: {{$team->anno_fondazione}}</b>  <br><br>
<b>Città: {{$team->citta}}</b> <br><br>
<b>Id Squadra: {{$team->id}}</b> <br><br>
<b>Rosa</b>
@foreach ($team->players as $player)
    <li> {{$player->nome}} {{$player->cognome}}</li>
@endforeach

<br>

<form action="/teams/{{$team->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina squadra">
</form>

    

<h2>Modifca squadra</h2>
<b>Inserisci i nuovi dati</b> 
<br> <br>

<form action="/teams/{{$team->id}}" method="post">
@csrf
@method('PUT')
    <label for="nome">Nome</label>
    <input type="text" name="nome" > <br><br>
    <label for="citta">Città</label>
    <input type="text" name="citta" > <br><br>
    <label for="anno_fondazione">Anno di fondazione</label>
    <input type="text" name="anno_fondazione" > <br><br>
    <input type="submit" value="Modifica squadra">
</form>
