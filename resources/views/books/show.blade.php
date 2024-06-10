@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold">{{ $book->name }}</h1>
    <p class="text-gray-700">Year: {{ $book->year }}</p>
    <p class="text-gray-700">Author: {{ $book->author }}</p>
    <p class="text-gray-700">Publisher: {{ $book->publisher }}</p>
    <a href="{{ route('books.index') }}" class="text-blue-500 hover:underline">Back to Books</a>
</div>
@endsection
