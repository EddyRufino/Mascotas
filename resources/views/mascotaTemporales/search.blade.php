@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between">
        <h4 class="font-weight-bold text-legend">Listado de Mascotas Temporales</h4>
        <div class="">
            <a href="{{ route('mimascotas.create') }}">Nuevo</a>
        </div>
        <div class="mb-4">
            <form action="{{ route('search.mascota.temporal') }}" class="form-inline">
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
                <th scope="col">QR</th>
                <th scope="col">Nombre Dueño</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          @forelse ($mascotas as $mascota)
            <tr>
                <td>{{ Illuminate\Support\Str::title($mascota->nombre_mascota) }}</td>
                <td>{{ $mascota->sexo }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->tipo }}</td>
                @if ($mascota->estado_qr == 1)
                    <td><span class="badge badge-warning">Generado</span></td>
                @else
                    <td></td>
                @endif
                <td>{{ $mascota->nombre_adulto }} {{ $mascota->apellidos_adulto }}</td>
                <td>
                    <div class="d-flex align-items-center justify-content-center">
                        <span>
                            <a href="{{ route('mimascotas.show', $mascota) }}" class="text-secondary">
                                @include('icons.icon-qr')
                            </a>
                        </span>
                    </div>
                </td>
            </tr>
          @empty
            <strong>No hay mascotas para generar QR</strong>
          @endforelse

        </tbody>
    </table>
</div>
@endsection
