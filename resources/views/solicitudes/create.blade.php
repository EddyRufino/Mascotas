@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col-md-1"></div>

        @include('partials.nav-left')

        <div class="col-md-8">
            <div class="d-flex flex-row flex-wrap overflow-hidden">
                <form action="{{ route('mis-solicitudes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('solicitudes.form', [
                        'solicitude' => new App\Solicitude,
                        'btn' => 'Subir'
                    ])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
