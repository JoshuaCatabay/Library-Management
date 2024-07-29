@extends('layouts.app')


@section('content')
<H1>Books</H1>
<a href="{{route('books.create')}}">Add New Book</a>
<ul>
    @foreach ($books as $book)
    <li>
    <a href="{{route('books.show', $book->id)}}">{{ $book->title }}</a>
    <a href="{{route('books.edit', $book->id)}}">Edit</a>
    <form action="{{route('books.destroy', $book->id)}}" method="POSt">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
    </form>
    </li>
    @endforeach
</ul>