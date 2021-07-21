@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm d-flex justify-content-center flex-column align-items-center mb-3">
        <p><strong>CÉDULA DE IDENTIFICICACIÓN ANIMAL</strong></p>
        <img
            src="{{ asset($listadomascota->foto) }}"
            alt="{{ $listadomascota->nombre }}"
            class='img-thumbnail' style="width: 250px; height: 150px;"
        >

    </div>
    <div class="d-flex justify-content-center flex-column align-items-center">
        <ul class="list-group col-md-3">
            <li class="list-group-item"><strong>MI MASCOTA</strong></li>
            <li class="list-group-item">Nombre: {{ Illuminate\Support\Str::title($listadomascota->nombre) }}</li>
            <li class="list-group-item">F. Nacimiento: {{ Carbon\Carbon::parse($listadomascota->fecha_nac)->format('Y-m-d') }}</li>
            <li class="list-group-item">Tipo: {{ ($listadomascota->tipo->nombre) }}</li>
            <li class="list-group-item">Raza: {{ Illuminate\Support\Str::title($listadomascota->raza) }}</li>
            <li class="list-group-item">Sexo: {{ Illuminate\Support\Str::title($listadomascota->sexo) }}</li>
            <li class="list-group-item">Color: {{ Illuminate\Support\Str::title($listadomascota->color) }}</li>
        </ul>
        <ul class='list-group col-md-3 mt-3'>
            <li class="list-group-item"><strong>ADULTO RESPONSABLE</strong></li>
            <li class="list-group-item">Nombre: {{ Illuminate\Support\Str::title($listadomascota->user->name) }}</li>
            <li class="list-group-item">Apellidos: {{ Illuminate\Support\Str::title($listadomascota->user->apellidos) }}</li>
            <li class="list-group-item">Celular: {{ $listadomascota->user->celular }}</li>
            <li class="list-group-item">Dirección: {{ Illuminate\Support\Str::title($listadomascota->user->direccion) }}</li>
            <li class="list-group-item">F. Emisión: {{ Carbon\Carbon::parse($listadomascota->created_at)->format('Y-m-d') }}</li>
        </ul>
    </div>
</div>
@endsection
