@extends('layouts.app')
@section('contenido')
<h1>Editar equipo</h1>
<form method="POST" action="{{ route('equipos.update', $equipo->id) }}">
    @csrf
    @method('PUT')
    <label for="codigo">Ingrese el codigo</label>
    <input id="codigo" name="codigo" type="text" maxlength="30"
        pattern="[0-9]{30}"
        value="{{ old('codigo', $equipo->codigo) }}" required>
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" type="text" maxlength="100"
        value="{{ old('nombre', $equipo->nombre) }}" required>
    <input id="marca" name="marca" type="text" maxlength="100"
        value="{{ old('marca', $equipo->marca) }}" required>
    <label for="fecha_adquisicion">Fecha de Adquisicion</label>
    <input id="fecha_adquisicion" name="fecha_adquisicion" type="date"
        value="{{ old('fecha_adquisicion',
            $equipo->fecha_adquisicion->format('Y-m-d')) }}"
        required>
    <select name="estado" id="estado">
        <option selected value="{{ old('estado', $equipo->estado) }}">{{ old('estado', $equipo->estado) }}</option>
        <option value="Disponible">Disponible</option>
        <option value="asignado">Asignado</option>
        <option value="mantenimiento">Mantenimiento</option>
    </select>
    <button type="submit">Actualizar</button>
    <a href="{{ route('equipos.index') }}">Cancelar</a>
</form>
@endsection
