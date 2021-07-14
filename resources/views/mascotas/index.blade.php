@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        <div class="col-md-3">
            <div class="list-group mt-1">
                <a href="{{ route('mis-mascotas.index') }}"
                    class="list-group-item list-group-item-action
                        {{ request()->routeIs('mis-mascotas.index') ? 'active' : '' }}"
                >
                    Mis Mascotas
                </a>
                <a href="#" class="list-group-item list-group-item-action">Solicitudes</a>
                <a href="{{ route('mis-mascotas.create') }}"
                    class="list-group-item list-group-item-action
                        {{ request()->routeIs('mis-mascotas.create') ? 'active' : '' }}"
                >
                    Nueva Mascota
                </a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
        </div>

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                @forelse($mascotas as $mascota)
                    <div class="card ml-1 mt-1" style="width: 18rem;">
                        <img class="card-img-top" src="/mascotas/pet.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mascota->nombre }}</h5>
                            <p class="card-text">{{ $mascota->caracteristicas }}</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
