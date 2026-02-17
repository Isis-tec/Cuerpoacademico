<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Prototipo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Editar Prototipo</h1>

    <form action="{{ route('prototipos.update', $prototipo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Nombre</label>
            <input type="text" name="nombre" value="{{ $prototipo->nombre }}" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Autores</label>
            <input type="text" name="autores" value="{{ $prototipo->autores }}" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Objetivo</label>
            <input type="text" name="objetivo" value="{{ $prototipo->objetivo }}" class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Descripción</label>
            <textarea name="descripcion" class="w-full border p-2 rounded">{{ $prototipo->descripcion }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Ficha Técnica</label>
            <textarea name="ficha_tecnica" class="w-full border p-2 rounded">{{ $prototipo->ficha_tecnica }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Imagen actual</label>
            <img src="{{ asset('storage/'.$prototipo->imagen) }}" class="w-32 mb-2">
            <input type="file" name="imagen" class="w-full">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Actualizar
        </button>
    </form>
</div>

</body>
</html>
