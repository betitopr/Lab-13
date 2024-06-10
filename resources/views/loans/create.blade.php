@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Create Loan</h1>
    <form action="{{ route('loans.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="book_id" class="block text-gray-700">Book:</label>
            <select name="book_id" id="book_id" class="form-select mt-1 block w-full">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="user_id" class="block text-gray-700">User:</label>
            <select name="user_id" id="user_id" class="form-select mt-1 block w-full">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="start_date" class="block text-gray-700">Start Date:</label>
            <input type="date" name="start_date" id="start_date" class="form-input mt-1 block w-full">
        </div>

        <div>
            <label for="end_date" class="block text-gray-700">End Date:</label>
            <input type="date" name="end_date" id="end_date" class="form-input mt-1 block w-full">
        </div>

        <div>
            <label for="status" class="block text-gray-700">Status:</label>
            <input type="checkbox" name="status" id="status" class="form-checkbox mt-1">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Loan</button>
    </form>
    <a href="{{ route('loans.index') }}" class="text-blue-500 hover:underline">Back to Loans</a>
</div>
@endsection
