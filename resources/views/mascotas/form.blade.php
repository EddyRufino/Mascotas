{{--  <div class="aside p-3 shadow-sm rounded boder-1">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Raza</label>
            <input type="text"
                name="raza"
                class="form-control @error('raza') is-invalid  @enderror"
                value="{{ old('raza', $mascota->raza) }}"
                id="inputEmail4"
                placeholder="Ejm: Labrador"
                required
            >

            @error('raza')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Sexo</label>
            <input type="text"
                name="sexo"
                class="form-control @error('sexo') is-invalid  @enderror"
                value="{{ old('sexo', $mascota->sexo) }}"
                id="inputPassword4"
                placeholder="Ejm: Hembra"
                required
            >

            @error('sexo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Nombre</label>
        <input type="text"
            name="nombre"
            class="form-control @error('nombre') is-invalid @enderror"
            value="{{ old('nombre', $mascota->nombre) }}"
            id="inputAddress"
            placeholder="Ejm: Lucky"
            required
        >

            @error('nombre')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">Fecha Nacimiento</label>
            <input type="date"
                name="fecha_nac"
                min="2015-01-01" max="2030-12-31" required
                class="form-control @error('fecha_nac') is-invalid  @enderror"
                value="{{ old(<?php echo date("Y-m-d"); ?>, $mascota->fecha_nac) }}"
                id="inputCity"
                required
            >

            @error('fecha_nac')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Tipo</label>
            <select id="inputState" name="tipo_id" required class="form-control @error('tipo_id') is-invalid  @enderror">
                <option selected>Selecciona</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}"
                        {{ old('tipo_id', $mascota->tipo_id) == $tipo->id ? 'selected' : '' }}
                    >
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>

            @error('tipo_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="color">Color</label>
            <input type="text"
                name="color"
                class="form-control @error('color') is-invalid  @enderror"
                value="{{ old('color', $mascota->color) }}"
                placeholder="Ejm: Negro - blanco"
                id="color"
                required
            >

            @error('color')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Características</label>
        <textarea name="caracteristicas" class="form-control @error('caracteristicas') is-invalid  @enderror" id="inputAddress2" cols="30" rows="3" required></textarea>

            @error('caracteristicas')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
    </div>
    <button type="submit" class="btn btn-primary">{{ $btn }}</button>
</div> --}}
<div class="aside p-3 shadow-sm rounded boder-1">
<div class="tabs">
  <span class="active"></span>
  <p class="tab">01</p>
  <p class="tab">02</p>
</div>

<div class="content">
  <div class="page">
    <h1 class="title">tabs in css</h1>
    <hr>
    <p>Lorem ipsum</p>
  </div>
  <div class="page">
    <h1 class="title">tabs 2</h1>
    <hr>
    <p>Lorem ipsum dolor </p>
  </div>
</div>
</div>

@push('script')
    <script type="text/javascript">
        const tabs = [...document.querySelectorAll('.tab')];
        const pageContainer = document.querySelector('.content');
        const activeSpan = document.querySelector('.tabs .active');

        tabs.forEach((item, i) => {
            item.addEventListener('click', () => {
                console.log(item);
                pageContainer.style.marginLeft = `-${i * 100}%`;
                activeSpan.style.left = `${i * 20}%`;
            })
        })
    </script>
@endpush
