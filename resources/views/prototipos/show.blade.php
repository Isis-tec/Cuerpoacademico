@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-2xl shadow-lg">

    <h2 class="text-2xl font-bold mb-4">
        {{ $prototipo->nombre }}
    </h2>

    @if($prototipo->imagen)
        <img src="{{ asset('storage/'.$prototipo->imagen) }}"
             class="w-full max-h-96 object-cover rounded-lg mb-6">
    @endif

    <p class="mb-4"><strong>Autores:</strong> {{ $prototipo->autores }}</p>
    <p class="mb-4"><strong>Objetivo:</strong> {{ $prototipo->objetivo }}</p>
    <p class="mb-4"><strong>Descripción:</strong> {{ $prototipo->descripcion }}</p>
    <p class="mb-4"><strong>Ficha Técnica:</strong> {{ $prototipo->ficha_tecnica }}</p>

    <a href="{{ route('prototipos.index') }}"
       class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg">
        Volver
    </a>

</div>

@endsection
