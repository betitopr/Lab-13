@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Loan Details</h1>
    <p class="text-gray-700"><span class="font-semibold">Book:</span> <a href="{{ route('books.show', $loan->book->id) }}" class="text-blue-500 hover:underline">{{ $loan->book->name }}</a></p>
    <p class="text-gray-700"><span class="font-semibold">User:</span> {{ $loan->user->name }}</p>
    <p class="text-gray-700"><span class="font-semibold">Start Date:</span> {{ $loan->start_date }}</p>
    <p class="text-gray-700"><span class="font-semibold">End Date:</span> {{ $loan->end_date }}</p>
    <p class="text-gray-700"><span class="font-semibold">Status:</span> {{ $loan->status ? 'Returned' : 'Not Returned' }}</p>
    <a href="{{ route('loans.index') }}" class="text-blue-500 hover:underline">Back to Loans</a>
</div>
@endsection
