@extends('layouts.app')


@section('content')
<H1>Add New Book</H1>
<form action="{{route('books.store')}}" method="POST">
    @csrf
    <label for="title">Title: </label>
    <input type="text" name="title" id="title" required>
    <label for="author">Author: </label>
    <input type="text" name="author" id="author" required>
    <label for="Description">Description: </label>
    <input type="text" name="description" id="description" required>
    <label for="ISBN">ISBN: </label>
    <input type="text" name="isbn" id="isbn" required>
    <label for="published_year">Published Year: </label>
    <input type="text" name="published_year" id="published_year" required>
    <button type="submit">Add Book</button>
</form>
@endsection
