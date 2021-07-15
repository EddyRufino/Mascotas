 <div class="aside p-3" style="border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 3px;">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Raza</label>
            <input type="text"
                name="raza"
                class="form-control @error('raza') is-invalid  @enderror"
                value="{{ old('raza', $mascota->raza) }}"
                id="inputEmail4"
                placeholder="Ejm: Labrador"
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
            >

            @error('fecha_nac')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Tipo</label>
            <select id="inputState" name="tipo_id" class="form-control @error('tipo_id') is-invalid  @enderror">
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
        <textarea name="caracteristicas" class="form-control @error('caracteristicas') is-invalid  @enderror" id="inputAddress2" cols="30" rows="3"></textarea>

            @error('caracteristicas')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
    </div>
    <button type="submit" class="btn btn-primary">{{ $btn }}</button>
</div>
{{-- <div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
    </div>
</div> --}}
