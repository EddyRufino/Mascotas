@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between">
        <h4 class="font-weight-bold text-legend">Listado de Mascotas</h4>
        <div class="mb-4">
            <form action="{{ route('search.mascota') }}" class="form-inline">
                @csrf
                <div class="input-group input-group-md">

                    <input class="form-control form-control-navbar"
                        name="search" type="search"
                        placeholder="Nombre mascota"
                        aria-label="Search"
                        required
                    >

                    <div class="input-group-append">
                        <button class="btn btn-navbar bg-primary text-white" type="submit">
                            @include('icons.icon-search')
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre Mascota</th>
                <th scope="col">Sexo</th>
                <th scope="col">Raza</th>
                <th scope="col">Tipo</th>
                <th scope="col">Estado</th>
                <th scope="col">QR</th>
                <th scope="col">Nombre Dueño</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($mascotas as $mascota)
            <tr>
                <td>{{ Illuminate\Support\Str::title($mascota->nombre) }}</td>
                <td>{{ $mascota->sexo }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->tipo->nombre }}</td>

                @if ($mascota->estado == 1)
                    <td><span class="badge badge-info">Vivo</span></td>
                @else
                    <td><span class="badge badge-danger">Fallecido</span></td>
                @endif

                @if ($mascota->estado_qr == 1)
                    <td><span class="badge badge-warning">Generado</span></td>
                @else
                    <td></td>
                @endif

                <td>{{ $mascota->user->name }}</td>
                <td>
                    <span>
                        <a href="{{ route('listadomascotas.show', $mascota) }}" class="text-secondary">
                            @include('icons.icon-qr')
                        </a>
                    </span>
                    <span>
                        <a href="{{ route('carnet.anverso', $mascota->id) }}" class="text-secondary ml-1">
                            @include('icons.download')
                        </a>
                    </span>
                </td>
            </tr>
          @empty
            <strong>No hay mascotas para generar QR</strong>
          @endforelse

        </tbody>
    </table>
</div>
@endsection
