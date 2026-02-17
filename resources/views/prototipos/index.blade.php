@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Prototipos Registrados</h2>

    <a href="{{ route('prototipos.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Nuevo Prototipo
    </a>
</div>

<div class="grid md:grid-cols-3 gap-6">
    @forelse($prototipos as $prototipo)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">

            @if($prototipo->imagen)
                <img src="{{ asset('storage/'.$prototipo->imagen) }}"
                     class="h-48 w-full object-cover">
            @endif

            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">
                    {{ $prototipo->nombre }}
                </h3>

                <p class="text-gray-600 text-sm mb-3">
                    {{ Str::limit($prototipo->descripcion, 100) }}
                </p>

                <div class="flex justify-between items-center">
                    <a href="{{ route('prototipos.show', $prototipo) }}"
                       class="text-blue-600 hover:underline">
                        Ver
                    </a>

                    <a href="{{ route('prototipos.edit', $prototipo) }}"
                       class="text-yellow-600 hover:underline">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p>No hay prototipos registrados.</p>
    @endforelse
</div>

@endsection
