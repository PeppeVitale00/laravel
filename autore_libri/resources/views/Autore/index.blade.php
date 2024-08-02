@extends('layout')
@section('titolo','ShowAll')
@section('contenuto')
<h1>Autori</h1>
<ul> 
    @foreach ($autore as $aut)
    <li><a href="/autores/{{$aut->id}}"> {{$aut->Nome}} {{$aut->Cognome}} </a></li>
    @endforeach
</ul>
<form action="/autores/create" method="get">
    <input type="submit" value="Aggiungi nuovo autore">
</form>
