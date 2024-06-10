@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Loans</h1>
    <ul class="list-disc pl-5">
        @foreach($loans as $loan)
            <li class="mb-2">
                <span class="font-semibold">Book:</span> <a href="{{ route('books.show', $loan->book->id) }}" class="text-blue-500 hover:underline">{{ $loan->book->name }}</a><br>
                <span class="font-semibold">User:</span> {{ $loan->user->name }}<br>
                <span class="font-semibold">Start Date:</span> {{ $loan->start_date }}<br>
                <span class="font-semibold">End Date:</span> {{ $loan->end_date }}<br>
                <span class="font-semibold">Status:</span> {{ $loan->status ? 'Returned' : 'Not Returned' }}<br>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('loans.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Loan</a>
</div>
@endsection
