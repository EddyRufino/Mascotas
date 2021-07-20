    <fieldset class="aside p-3 shadow-sm rounded boder-1">
        <legend class="text-legend">
            Mi Mascota
        </legend>
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
    </fieldset>

    <fieldset class="aside p-3 shadow-sm rounded boder-1 mt-3">
        <legend class="text-legend">
            Solicitudes
        </legend>

        <div class="form-group">
            <label for="exampleFormControlFile1">Mis Solicitudes</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta un solo archivo en formato PDF que contenga las solicitudes"
            >
            @include('icons.icon-readme')
            </span>
{{--             <input type="file" name="solicitud" class="form-control-file @error('solicitud') is-invalid  @enderror" id="exampleFormControlFile1"> --}}
            <div class="custom-file">
                <input type="file" name="solicitud" class="custom-file-input">
                <label class="custom-file-label">
                    Seleciona un archivo PDF
                </label>
            </div>

            @error('solicitud')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Foto Mascota</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta la foto de tu mascota en formato .JPG"
            >
            @include('icons.icon-readme')
            </span>
            {{-- <input type="file" name="foto" class="form-control-file @error('foto') is-invalid  @enderror" id="exampleFormControlFile1"> --}}
            <div class="custom-file">
                <input type="file" name="foto" class="custom-file-input">
                <label class="custom-file-label">
                    Seleciona una foto JPG
                </label>
            </div>

            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

    </fieldset>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">{{ $btn }}</button>
    </div>
