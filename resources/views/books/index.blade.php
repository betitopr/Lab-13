@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Books</h1>
    <ul class="list-disc pl-5">
        @foreach($books as $book)
            <li class="mb-2">
                <a href="{{ route('books.show', $book->id) }}" class="text-blue-500 hover:underline">{{ $book->name }}</a>
                <span class="text-gray-700">({{ $book->year }}), by {{ $book->author }}, published by {{ $book->publisher }}</span>
            </li>
        @endforeach
    </ul>
</div>
@endsection
