@extends('layout')
@section('titolo', 'Home')
@section('contenuto')
<h1>Benvenuto nel portale dei giocatori</h1>

<form action="/players" method="GET">
<input type="submit" value="Mostra giocatori">
</form>

<br><br>

<form action="/teams" method="GET">
<input type="submit" value="Mostra squadre">
</form>