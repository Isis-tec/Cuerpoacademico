@extends('layouts.app')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">

    <h2 class="text-2xl font-semibold text-gray-800 mb-6">
        Registrar Prototipo
    </h2>
    <script src="https://cdn.tailwindcss.com"></script>


    <form method="POST"
          action="{{ route('prototipos.store') }}"
          enctype="multipart/form-data"
          class="grid grid-cols-1 md:grid-cols-2 md:gap-4">

        @csrf

        {{-- Nombre --}}
        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Nombre del Prototipo <span class="text-red-500">*</span>
            </label>
            <input type="text"
                   name="nombre"
                   value="{{ old('nombre') }}"
                   placeholder="Nombre del prototipo"
                   class="p-2 w-full rounded-md border border-gray-300
                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                          transition">
            @error('nombre')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Autores --}}
        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Autores <span class="text-red-500">*</span>
            </label>
            <input type="text"
                   name="autores"
                   value="{{ old('autores') }}"
                   placeholder="Autores del prototipo"
                   class="p-2 w-full rounded-md border border-gray-300
                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                          transition">
            @error('autores')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Objetivo --}}
        <div class="md:col-span-2 mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Objetivo <span class="text-red-500">*</span>
            </label>
            <textarea name="objetivo"
                      rows="3"
                      placeholder="Objetivo del prototipo"
                      class="p-2 w-full rounded-md border border-gray-300
                             focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                             transition">{{ old('objetivo') }}</textarea>
            @error('objetivo')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Descripción --}}
        <div class="md:col-span-2 mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Breve descripción <span class="text-red-500">*</span>
            </label>
            <textarea name="descripcion"
                      rows="4"
                      placeholder="Descripción breve del prototipo"
                      class="p-2 w-full rounded-md border border-gray-300
                             focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                             transition">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Imagen --}}
        <div class="md:col-span-2 mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Imagen del Prototipo
            </label>
            <input type="file"
                   name="imagen"
                   class="block w-full text-sm text-gray-600
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-md file:border-0
                          file:bg-blue-50 file:text-blue-700
                          hover:file:bg-blue-100 transition">
            @error('imagen')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Ficha técnica --}}
        <div class="md:col-span-2 mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-1">
                Ficha Técnica
            </label>
            <textarea name="ficha_tecnica"
                      rows="4"
                      placeholder="Especificaciones técnicas del prototipo"
                      class="p-2 w-full rounded-md border border-gray-300
                             focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                             transition">{{ old('ficha_tecnica') }}</textarea>
            @error('ficha_tecnica')
                <p class="text-red-600 text-xs mt-1 italic">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Botones --}}
        <div class="md:col-span-2 flex justify-end gap-3 mt-6">
            <a href="{{ route('prototipos.index') }}"
               class="px-4 py-2 rounded-md border border-gray-300
                      text-gray-700 hover:bg-gray-100 transition">
                Cancelar
            </a>

            <button type="submit"
                    class="px-6 py-2 bg-green-600 hover:bg-green-700
                           text-white rounded-md font-semibold
                           shadow-sm transition">
                Guardar
            </button>
        </div>

    </form>
</div>
