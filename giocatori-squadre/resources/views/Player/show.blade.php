@extends('layout')

@php
    use App\Models\Team;
    $squadra = Team::findOrFail($player->team_id);
@endphp

@section ('titolo', 'Show Player')
@section('contenuto')
<h1>Scheda Giocatore</h1>
<b>Nome: {{$player->nome}}</b> <br><br>
<b>Cognome: {{$player->cognome}}</b> <br><br>
<b>Età: {{$player->eta}}</b> <br><br>
<b>Squadra: {{$squadra->nome}}</b> <br><br>

<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina giocatore">
</form>

<h2>Modifica giocatore</h2>
<b>Inserisci i nuovi dati</b>

<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="nome">Nome</label>
    <input type="text" name="nome"> <br><br>
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome"> <br><br>
    <label for="eta">Eta</label>
    <input type="number" name="eta" > <br><br>
    <label for="squadra">Squadra</label>    
    <input type="number" name="squadra" > <br><br>
    <input type="submit" value="Modifica">
</form>
