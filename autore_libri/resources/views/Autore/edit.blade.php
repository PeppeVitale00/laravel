@extends('layout')
@section('titolo', 'Edit Author')
@section('contenuto')
<h1>Modifica autore</h1>
<b>Dati attuali</b> <br><br>
Nome: {{$autore->Nome}} <br> <br>
Cognome: {{$autore->Cognome}} <br> <br>
<b>Inserisci i nuovi dati</b>
<form action="/autores/{{$autore->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome">
    <input type="submit" value="Aggiorna dati">

</form>