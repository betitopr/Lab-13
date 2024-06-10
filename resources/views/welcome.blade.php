@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-4">Bienvenido a Leyendo Horizontes</h1>
    <p class="text-gray-700 mb-6">Explora nuestra colección de libros y realiza tus reservas en línea.</p>
    <a href="{{ route('books.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ver Libros</a>
</div>
@endsection
