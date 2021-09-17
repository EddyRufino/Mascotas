@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-4">
            <p class="text-secondary">Descarga la ficha con los datos de tu mascota</p>
            <div class="d-flex justify-content-between border p-2 rounded mb-2">
                <span class="text-dark">Drako</span>
                <a href="{{ route('ficha.pdf') }}">
                    Descargar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
