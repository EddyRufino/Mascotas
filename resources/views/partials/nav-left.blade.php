<div class="col-md-3 mt-2">
    <div class="list-group  mb-4">
        <li class="list-group-item " style="background: #F9FAFB;">Mis Opciones</li>
        <a href="{{ route('mismascotas.index') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mismascotas.index') ? 'bg-secondary text-white' : '' }}"

        >
            Mis Mascotas
        </a>
{{--         <a href="{{ route('solicitudes.create') }}" class="list-group-item list-group-item-action
            {{ request()->routeIs('solicitudes.create') ? 'active' : '' }}"
        >
            Subir Solicitud
        </a> --}}
        <a href="{{ route('mismascotas.create') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mismascotas.create') ? 'bg-secondary text-white' : '' }}"

        >
            Nueva Mascota
        </a>
        <a href="#" class="list-group-item list-group-item-action">Documento</a>
    </div>
</div>
