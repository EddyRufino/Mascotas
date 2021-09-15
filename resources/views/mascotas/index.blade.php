@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                @forelse($mascotas as $mascota)
                    <div class="card ml-1 mt-1 shadow" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($mascota->foto) }}"
                            alt="{{ $mascota->nombre }}"
                            style="height: 200px;"
                        >

                        <div class="mt-4 ml-3" style="font-size: 10px; font-weight: 600">
                            <span class="text-uppercase border border-info px-3 py-1 rounded-pill text-info"
                            >
                                {{ $mascota->tipo->nombre }}
                            </span>

                            @if ($mascota->estado === 1)
                                <span class="text-uppercase border border-success px-3 py-1 rounded-pill text-success ml-2"
                                >
                                    Vivo
                                </span>
                            @else
                                <span class="text-uppercase border border-danger px-3 py-1 rounded-pill text-danger ml-2"
                                >
                                    Fallecido
                                </span>
                            @endif

                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-capitalize">
                                {{ Illuminate\Support\Str::title($mascota->nombre) }}
                            </h5>
                            <p class="card-text">
                                {{ Illuminate\Support\Str::limit(
                                    Illuminate\Support\Str::lower(
                                        $mascota->caracteristicas), 90, '...'
                                    ) }}
                            </p>
                            <a href="{{ route('mismascotas.show', $mascota) }}" class="btn btn-secondary text-white">Ver más</a>
                        </div>
                    </div>
                @empty
                    <strong>Aún no tienes mascotas registradas.</strong>
                @endforelse
            </div>
            <div class="overflow-auto mt-2">
                {{ $mascotas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
