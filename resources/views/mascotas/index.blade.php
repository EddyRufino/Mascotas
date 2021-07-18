@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                @forelse($mascotas as $mascota)
                    <div class="card ml-1 mt-1" style="width: 18rem;">
                        <img class="card-img-top" src="/mascotas/pet.jpg" alt="Card image cap">
                        {{-- <span class="bg-secondary rounded text-center text-white " style="width: 4rem;">Canino</span> --}}
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
