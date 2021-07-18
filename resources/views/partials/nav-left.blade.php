<div class="col-md-3">
    <div class="list-group shadow-sm">
        <a href="{{ route('mis-mascotas.index') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mis-mascotas.index') ? 'active' : '' }}"

        >
            Mis Mascotas
        </a>
        <a href="{{ route('mis-solicitudes.create') }}" class="list-group-item list-group-item-action
            {{ request()->routeIs('mis-solicitudes.create') ? 'active' : '' }}"
        >
            Subir Solicitud
        </a>
        <a href="{{ route('mis-mascotas.create') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mis-mascotas.create') ? 'active' : '' }}"

        >
            Nueva Mascota
        </a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    </div>
</div>
