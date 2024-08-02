@extends('layout')
@section('titolo', 'Home')
@section('contenuto')
<h1>BENVENUTO NEL PORTALE BIBLIOTECARIO</h1>
<h3>Scegli una delle operazioni disponibili sugli autori</h3>

<form action="/autores" method="get">
    <input type="submit" value="Mostra tutti">
</form>

<form action="/autores/create" method="get">
    <input type="submit" value="Inserisci">
</form>

<h3>Scegli una delle operazioni disponibili sui libri </h3>

<form action="/books" method="get">
    <input type="submit" value="Mostra tutti">
</form>

<form action="/books/create" method="get">
    <input type="submit" value="Inserisci">
</form>