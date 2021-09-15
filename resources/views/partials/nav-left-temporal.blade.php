<div class="col-md-3 mt-2">
    <div class="list-group">
        <li class="list-group-item " style="background: #F9FAFB;">Mis Opciones</li>
        <a href="{{ route('mimascotas.index') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mimascotas.index') ? 'active' : '' }}"

        >
            Mis Mascotas
        </a>

        <a href="{{ route('mimascotas.create') }}"
            class="list-group-item list-group-item-action
                {{ request()->routeIs('mimascotas.create') ? 'bg-secondary text-white' : '' }}"

        >
            Nueva Mascota
        </a>
    </div>
</div>
