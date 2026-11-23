@extends('layouts.app')
@section('contenido')
<a href="{{ route('equipos.create') }}">Crear Equipo</a>
<h1>Equipos registrados</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>codigo</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Adquisicion</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($equipos as $equipo)
        <tr>            
            <td>{{ $equipo->id }}</td>
            <td>{{ $equipo->codigo }}</td>
            <td>{{ $equipo->nombre }}</td>
            <td>{{ $equipo->marca }}</td>
            <td>{{ $equipo->fecha_adquisicion->format('d/m/Y') }}</td>
            <td>{{ $equipo->estado }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No hay registros</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
