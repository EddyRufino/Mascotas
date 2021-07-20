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
    <div class="d-flex justify-content-center flex-column align-items-center">
        <ul class="list-group col-md-3">
            <li class="list-group-item"><strong>MI MASCOTA</strong></li>
            <li class="list-group-item">Nombre: {{ $mismascota->nombre }}</li>
            <li class="list-group-item">F. Nacimiento: {{ Carbon\Carbon::parse($mismascota->fecha_nac)->format('Y-m-d') }}</li>
            <li class="list-group-item">Tipo: {{ $mismascota->tipo->nombre }}</li>
            <li class="list-group-item">Raza: {{ $mismascota->raza }}</li>
            <li class="list-group-item">Sexo: {{ $mismascota->sexo }}</li>
            <li class="list-group-item">Color: {{ $mismascota->color }}</li>
        </ul>
        <ul class='list-group col-md-3 mt-3'>
            <li class="list-group-item"><strong>ADULTO RESPONSABLE</strong></li>
            <li class="list-group-item">Nombre: {{ $mismascota->user->name }}</li>
            <li class="list-group-item">Apellidos: {{ $mismascota->user->apellidos }}</li>
            <li class="list-group-item">Celular: {{ $mismascota->user->celular }}</li>
            <li class="list-group-item">Dirección: {{ $mismascota->user->direccion }}</li>
            <li class="list-group-item">F. Emisión: {{ Carbon\Carbon::parse($mismascota->created_at)->format('Y-m-d') }}</li>
        </ul>
    </div>
</div>
@endsection
