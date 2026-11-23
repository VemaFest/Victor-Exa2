@extends('layouts.app')
@section('contenido')
<h1>Crear equipo</h1>
<form method="POST" action="{{ route('equipos.store') }}">
    @csrf
    <label for="codigo">Ingrese el coigo</label>
    <input id="codigo" name="codigo" type="text" maxlength="30"
        pattern="[0-9]{30}" value="{{ old('codigo') }}" required>
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" type="text" maxlength="100"
        value="{{ old('nombre') }}" required>
    <input id="marca" name="marca" type="text" maxlength="80"
        value="{{ old('marca') }}" required>
    <label for="fecha_adquisicion">Fecha de adquisicion</label>
    <input id="fecha_adquisicion" name="fecha_adquisicion" type="date"
        value="{{ old('fecha_adquisicion') }}" required>
    <select name="estado" id="estado">
        <option value="Disponible">Disponible</option>
        <option value="asignado">Asignado</option>
        <option value="mantenimiento">Mantenimiento</option>
    </select>
    <button type="submit">Guardar</button>
    <a href="{{ route('equipos.index') }}">Cancelar</a>
</form>
@endsection
