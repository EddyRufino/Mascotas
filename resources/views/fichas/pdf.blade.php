<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Propiedad Animal</title>
</head>

<style type="text/css">
    .circle {
        display: block;
        width: 130px;
        position: relative;
        padding-top: 1rem;
    }

    .header {
        border: 1px solid black;
        padding-top: 1rem;
        padding-right: 1rem;
        padding-left: 1rem;
        padding-bottom: .5rem;
        margin: 0;
        border-radius: 2px;
    }

    .header-title {
        display: inline-block;
        float: right;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        font-family: Serif;
    }

    .font-color {
        color: #111827;
    }

    /** Inicio pet Box **/
    .pet-container {
        width: 45%;
        float: left;
        margin-top: 1rem;
    }
    /** Fin pet Box **/

    /** Inicio QR Box **/
    .qr-container {
        width: 45%;
        float: right;
    }

    /** Fin QR Box **/

    /** Inicio User Box **/
    .user-container {
/*        width: 60%;
        margin: auto;*/
        width: 45%;
        float: right;
        margin-top: 38.3%;
        margin-right: 4.4rem;
    }
    /** Fin User Box **/
    .qr {
        margin-top: 2.5rem;
        margin-left: 2.5rem;
    }

    .foto-pet {
        margin-top: 2.5rem;
        margin-left: 1rem;
    }

    .qr-title {
        display: block;
        margin-top: 1rem;
        text-align: center;
    }

    /** css Foto container **/
    .foto-container {
        width: 45%;
        float: left;
        margin-top: 38.3%;
        margin-left: 4.4rem;
    }

    /** css para todos**/
    .all-header {
        border-bottom: 1px solid black;
        width: 100%;
        text-align: center;
        padding: 8px 0;
        margin-top: 0;
        height: 1.5rem;
    }

    .all-box {
        border: 1px solid black;
        width: 100%;
        height: 32%;
        position: absolute;
        border-radius: 2px;
        font-weight: bold;
    }

    .all-body {
        padding: 2.5rem 1rem;
    }
</style>

<body>
    <header class="header">
        <img src="{{ asset('img/logo.png') }}"
            alt="Logo Minucipalidad De Castilla"
            class="circle"
        >
        <span class="header-title font-color">
            MUNICIPALIDAD DISTRITAL DE CASTILLA <br> SUBGERENCIA DE COMERCIALIZACION <br> FICHA DE PROPIEDAD ANIMAL

        </span>
    </header>

    <article class="pet-container">
        <h3 class="all-header">Fotografía</h3>
        <section class="all-body all-box">
            <div class="foto-pet">
                <img src="{{ asset($mascota[0]->foto) }}"
                    style="width: 250px; height: 250px; border-radius: 3px;"
                >
            </div>
        </section>
    </article>

    <article class="qr-container">
        <h3 class="all-header">Código QR</h3>
        <section class="all-body all-box">
            <div class="qr">
                <img src="{{ asset('qrcodes/' . $mascota[0]->url . '.svg') }}">
            </div>
            <span class="qr-title">¡Escanea el Código QR!</span>
        </section>
    </article>

    <div class="huella"
        style="z-index: -1; position: absolute; margin-top: 5rem;"
    >
        <img src="{{ asset('img/huella-1.jpg') }}"
            style="display: block;"
        >
    </div>

    <article class="foto-container">
        <h3 class="all-header">Adulto Responsable</h3>
        <section class="all-body all-box" style="height: 51%;">
            <p>Nombres: {{ $mascota[0]->user->name }}</p>
            <p>Apellidos: {{ $mascota[0]->user->apellidos }}</p>
            <p>D.N.I: {{ $mascota[0]->user->dni }}</p>
            <p>Celular: {{ $mascota[0]->user->celular }}</p>
            <p>Dirección: {{ $mascota[0]->user->direccion }}</p>
        </section>
    </article>

    <article class="user-container">
        <h3 class="all-header">Mi Mascota</h3>
        <section class="all-body all-box" style="height: 51%">


            <p>Nombre: {{ $mascota[0]->nombre }}</p>
            <p>Tipo: {{ $mascota[0]->tipo->nombre }}</p>
            <p>Raza: {{ $mascota[0]->raza }}</p>
            <p>Sexo: {{ $mascota[0]->sexo }}</p>
            <p>F. Nacimiento: {{ $mascota[0]->fecha_nac->format('F j, Y') }}</p>
            <p>Color: {{ $mascota[0]->color }}</p>
            @if ($mascota[0]->estado === 1)
                {{--  --}}
            @else
                <p>Estado: Fallecido</p>
            @endif
            <p>Descripción: {{ $mascota[0]->caracteristicas }}</p>
        </section>
    </article>
</body>
</html>

