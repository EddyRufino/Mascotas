<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<style type="text/css">
    .circle {
        display: block;
        width: 130px;
    }

    .header-title {
        display: inline-block;
        padding-left: 30%;
        padding-bottom: .4rem;
        text-align: center;
        font-size: 12px;
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
        margin-top: 24px;
    }

    .pet-box {
        border: 1px solid #111827;
        width: 100%;
        height: 30%;
        position: absolute;
        border-radius: 4px;
    }

    .pet-header {
        background: #F3F4F6;
        width: 100%;
        height: 1.5rem;
        border-radius: 4px;
        text-align: center;
        padding: 8px 0;
        border-bottom: 1px solid #111827;
        position: absolute;
        margin-top: 0;
    }

    .pet-body {
        padding: 2.5rem 1rem;
    }
    /** Fin pet Box **/

    /** Inicio QR Box **/
    .qr-container {
        width: 45%;
        float: right;
    }

    .qr-box {
        border: 1px solid #111827;
        width: 100%;
        height: 30%;
        position: absolute;
        border-radius: 4px;
    }

    .qr-header {
        width: 100%;
        background: #F3F4F6;
        height: 1.5rem;
        border-radius: 4px;
        text-align: center;
        padding: 8px 0;
        border-bottom: 1px solid #111827;
        margin-top: 0;
    }

    .qr-body {
        padding: 2.5rem 1rem;
    }

    /** Fin QR Box **/
</style>

<body>
    <header class="header">
        <img src="{{ asset('images/logo-2.png') }}"
            alt="Logo Minucipalidad De Castilla"
            class="circle"
        >
        <span class="text-center header-title font-color">
            MUNICIPALIDAD DISTRITAL DE CASTILLA <br> SUBGERENCIA DE COMERCIALIZACION <br> FICHA DE PROPIEDAD DE LA MASCOTA

        </span>
    </header>

    <article class="pet-container">
        <h3 class="pet-header">Mi Mascota</h3>
        <section class="pet-body pet-box">
            <p>xD</p>
            <p>xD</p>
        </section>
    </article>

    <article class="qr-container">
        <h3 class="qr-header">Código QR</h3>
        <section class="qr-body qr-box">
            <p>xD</p>
            <p>xD</p>
        </section>
    </article>
{{--     @foreach ($mascotas as $mascota)
        <span>{{ $mascota->nombre }}</span>
        <span>{{ $mascota->user->name }}</span>
    @endforeach --}}
</body>
</html>

