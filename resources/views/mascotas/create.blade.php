@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        <div class="col-md-3">
            <div class="list-group mt-1 shadow-sm">
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
            </div>
        </div>

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap">
                <form action="{{ route('mis-mascotas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('mascotas.form', [
                        'mascota' => new App\Mascota,
                        'btn' => 'Registrar'
                    ])


                </form>
            </div>
        </div>
    </div>
</div>
@endsection
