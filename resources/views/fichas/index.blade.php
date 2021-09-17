@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-6">
            <fieldset class="aside p-3 shadow-sm rounded boder-1">
                <legend class="text-legend legend-ficha">
                    Ficha con los datos de tu mascota
                </legend>
                @foreach ($mascotas as $mascota)
                    <div class="d-flex justify-content-between border pl-3 pr-3 p-2 rounded mb-2">
                        <span class="text-legend">{{ $mascota->nombre }}</span>
                        {{-- <span class="text-legend">{{ $mascota->tipo->nombre }}</span> --}}
                        <a href="{{ route('ficha.pdf', ['id' => $mascota->id]) }}">
                            Descargar
                        </a>
                    </div>
                @endforeach
            </fieldset>
        </div>
    </div>
</div>
@endsection
