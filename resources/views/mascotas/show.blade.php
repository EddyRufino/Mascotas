@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm d-flex justify-content-center flex-column align-items-center mb-3">
        <p><strong>CÉDULA DE IDENTIFICICACIÓN ANIMAL</strong></p>
        <img
            src="{{ asset($mismascota->foto) }}"
            alt="{{ $mismascota->nombre }}"
            class='img-thumbnail' style="width: 250px; height: 150px;"
        >

    </div>
    <div class="">
        <a href="#" class="d-flex justify-content-center mb-4">Editar</a>
    </div>
    <div class="row justify-content-center pl-3">
        <ul class="list-group col-md-3">
            <li class="list-group-item"><strong>MI MASCOTA</strong></li>
            <li class="list-group-item">Nombre: {{ Illuminate\Support\Str::title($mismascota->nombre) }}</li>
            <li class="list-group-item">F. Nacimiento: {{ Carbon\Carbon::parse($mismascota->fecha_nac)->format('Y-m-d') }}</li>
            <li class="list-group-item">Tipo: {{ $mismascota->tipo->nombre }}</li>
            <li class="list-group-item">Raza: {{ Illuminate\Support\Str::title($mismascota->raza) }}</li>
            <li class="list-group-item">Sexo: {{ Illuminate\Support\Str::title($mismascota->sexo) }}</li>
            <li class="list-group-item">Color: {{ Illuminate\Support\Str::title($mismascota->color) }}</li>
        </ul>
        <ul class='list-group col-md-3 '>
            <li class="list-group-item"><strong>ADULTO RESPONSABLE</strong></li>
            <li class="list-group-item">Nombre: {{ Illuminate\Support\Str::title($mismascota->user->name) }}</li>
            <li class="list-group-item">Apellidos: {{ Illuminate\Support\Str::title($mismascota->user->apellidos) }}</li>
            <li class="list-group-item">Celular: {{ $mismascota->user->celular }}</li>
            <li class="list-group-item">Dirección: {{ Illuminate\Support\Str::title($mismascota->user->direccion) }}</li>
            <li class="list-group-item">
                F. Emisión: {{ Carbon\Carbon::parse($mismascota->created_at)->format('Y-m-d') }}
            </li>
        </ul>
    </div>
</div>
@endsection
