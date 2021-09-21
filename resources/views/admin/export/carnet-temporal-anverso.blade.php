<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet Animal</title>
</head>

<style type="text/css">
.contenedor{
    position: relative;
    display: inline-block;
    /*margin-top: 3rem;*/
}
.foto-encima{
    position: absolute;
    top: 150px;
    left: 20px;
}

.texto-encima-nombre {
    position: absolute;
    top: 200px;
    left: 405px;
    font-size: 2rem;
}
.texto-encima-raza {
    position: absolute;
    top: 260px;
    left: 405px;
    font-size: 2rem;
}
.texto-encima-fecha_nac {
    position: absolute;
    top: 360px;
    left: 405px;
    font-size: 2rem;
}
.texto-encima-color {
    position: absolute;
    top: 520px;
    left: 405px;
    font-size: 2rem;
}
.qr-encima {
    position: absolute;
    top: 180px;
    left: 880px;
}
/*.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}*/

html {
    margin: 0pt;
}


</style>

<body>
    <div class="contenedor">
        <img src="{{ asset('img/carnet.jpg') }}"
            style="display: block; width: 100%; height: 793px;"
        >
        {{-- Pon aquí el QR si va en el anverso --}}
        <img src="{{ asset('qrcodes-temporal/' . $mascota[0]->url . '.svg') }}"
             class="qr-encima"
             width="180"
        >
        <div class="foto-encima">
            <img src="{{ asset($mascota[0]->foto) }}" style="width: 350px; height: 460px;">
        </div>
        <span class="texto-encima-nombre">{{ $mascota[0]->nombre_mascota }}</span>
        <span class="texto-encima-raza">{{ $mascota[0]->raza }}</span>
        <span class="texto-encima-fecha_nac">{{ $mascota[0]->fecha_nacimiento }}</span>
        <span class="texto-encima-color">{{ $mascota[0]->color }}</span>
        {{-- Pon aquí el QR si va en el reverso --}}
{{--         <img src="{{ asset('qrcodes/' . $mascota[0]->url . '.svg') }}" width="85"
            class="texto-encima-qr"> --}}
        <img src="{{ asset('img/carnet.jpg') }}"
            style="display: block; width: 100%; height: 793px;"
        >
    </div>

{{--     <div class="contenedors">
        <img src="{{ asset('img/carnet.jpg') }}"
            style="display: inline-block; width: 100%; height: 793px;"
        >

    </div> --}}
</body>
</html>
