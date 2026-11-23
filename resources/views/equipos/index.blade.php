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
            <td>
                <a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>
                <form method="POST"
                        action="{{ route('equipos.destroy', $equipo->id) }}"
                        onsubmit="return confirm('Eliminar esta equipo?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No hay registros</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
