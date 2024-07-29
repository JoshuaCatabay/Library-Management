@extends('layouts.app')


@section('content')
<H1>Edit Book</H1>
<form action="{{route('books.update', '$books->id')}}" method="POST">
    @csrf
    @method('PUT')
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
    <button type="submit">Update Book</button>
</form>
@endsection
