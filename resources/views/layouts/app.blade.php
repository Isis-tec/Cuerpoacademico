<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Prototipos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    {{-- Navbar --}}
    <nav class="bg-blue-700 p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-white text-xl font-bold">
                Sistema de Prototipos
            </h1>

            <a href="{{ route('prototipos.index') }}"
               class="text-white hover:underline">
                Inicio
            </a>
        </div>
    </nav>

    {{-- Mensajes --}}
    <div class="max-w-6xl mx-auto mt-6">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
    </div>

    {{-- Contenido --}}
    <div class="max-w-6xl mx-auto mt-4">
        @yield('content')
    </div>

</body>
</html>
