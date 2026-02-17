<body>

<h2>Formulario de Registro de Asistencia</h2>

{{-- Mensaje de éxito --}}
@if(session('success'))
    <p style="color: rgb(0, 21, 128);">
        {{ session('success') }}
    </p>
@endif

<form action="/asistencia" method="POST">
    @csrf

    <br>

    {{-- Nombre --}}
    <label>Nombre de la persona</label><br>
    <input type="text"
           name="nombre"
           placeholder="Ej. Luis Antonio Hernández Hernández"
           required>
    <br><br>

    {{-- Celular --}}
    <label>Celular</label><br>
    <input type="text"
           name="celular"
           placeholder="Ej. 5512345678"
           required>
    <br><br>

    {{-- Correo --}}
    <label>Correo electrónico</label><br>
    <input type="email"
           name="correo"
           placeholder="ejemplo@correo.com"
           required>
    <br><br>

    {{-- Institución --}}
    <label>Institución</label><br>
    <select name="institucion_id" required>
        <option value="">-- Seleccione una institución --</option>
        @foreach($instituciones as $inst)
            <option value="{{ $inst->id }}">
                {{ $inst->nombre }}
            </option>
        @endforeach
    </select>
    <br><br>

    {{-- Clave --}}
    <label>Clave</label><br>
    <select name="clave" required>
        <option value="">-- Seleccione una clave --</option>
        <option value="CA-01">CA-01</option>
        <option value="CA-02">CA-02</option>
        <option value="CA-03">CA-03</option>
        <option value="CA-04">CA-04</option>
    </select>
    <br><br>

    <button type="submit">Guardar asistencia</button>
</form>

<hr>

<h3>Registros de Asistencia</h3>

<table border="1" cellpadding="6">
    <tr>
        <th>Nombre</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Institución</th>
        <th>Clave</th>
    </tr>

    @foreach($asistencias as $a)
        <tr>
            <td>{{ $a->nombre }}</td>
            <td>{{ $a->celular }}</td>
            <td>{{ $a->correo }}</td>
            <td>{{ $a->institucion->nombre ?? 'N/A' }}</td>
            <td>{{ $a->clave }}</td>
        </tr>
    @endforeach
</table>

</body>
