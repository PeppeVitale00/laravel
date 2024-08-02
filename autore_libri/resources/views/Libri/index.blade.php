@extends('layout')
@section('titolo', 'ShowAllBooks')

@section('contenuto')
<h1>Libri</h1>
<ul> 
    @foreach ($libro as $book)
    <li><a href="/books/{{$book->id}}"> {{$book->Titolo}}</a></li>
    @endforeach
</ul>

