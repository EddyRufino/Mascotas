@extends('layouts.app')

@section('content')
    <header class="space">
        <div class="container pb-4 pt-4">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-7 text-banner">
                <h1 class="text-white font-weight-bold">Ordenanza Municipal N°003-2021-MDC</h1>
                <p class="text-white font-weight-normal">En resumen estipula que las personas que posean felinos y canes, deberán registrarlos. Esta ordenanza tiene como objetivo controlar la tenencia de animales e identificar a los responsables en casos de perdidas, maltratos o ataques.</p>
                <a href="https://municastilla.gob.pe/Docmuni/ca_ordenanzas/2021-003.pdf" class="btn btn-outline-light" target="_blank">
                    Ver más
                </a>
            </div>
            <div class="col-sm-12 col-md-5 d-none d-md-block mt-4">
                <img src="img/img-banner-2.svg"
                alt="imagen referencial"
                class="img-fluid "
                >
            </div>
          </div>
        </div>
        <img src="img/onda-down.png"
        class="onda-down"
        alt="onda-down"
        />
    </header>
@endsection

@push('styles')
<style>
header {
    background: #059669;
    background: -webkit-linear-gradient(to right, #10B981, #059669);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #10B981, #059669);

}
    .onda-down {
        width: 100%;
        background: #059669;
        background: -webkit-linear-gradient(to right, #10B981, #059669);
        background: linear-gradient(to right, #10B981, #059669);
    }
</style>
@endpush
