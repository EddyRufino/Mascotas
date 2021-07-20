<div class="aside p-3 shadow-sm rounded boder-1">
    <div class="form-group">
        <div class="row col-md-12">
            <label for="inputState">Mi Mascota&nbsp;</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Elige la mascota que quieres adjuntar sus solicitudes"
            >
            @include('icons.icon-readme')
            </span>
            <select id="inputState" name="mascota_id" required class="form-control @error('tipo_id') is-invalid  @enderror">
                <option selected>Selecciona</option>
                @foreach($mascotas as $mascota)
                    <option value="{{ $mascota->id }}"
                        {{ old('mascota_id', $solicitude->mascota_id) == $mascota->id ? 'selected' : '' }}
                    >
                        {{ $mascota->nombre }}
                    </option>
                @endforeach
            </select>

            @error('mascota_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group mt-4">
            <label for="exampleFormControlFile1">Mis Solicitudes</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta un solo archivo en formato PDF que contenga las solicitudes"
            >
            @include('icons.icon-readme')
            </span>
            <input type="file" name="solicitud" class="form-control-file @error('solicitud') is-invalid  @enderror" id="exampleFormControlFile1">

            @error('solicitud')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group mt-4">
            <label for="exampleFormControlFile1">Foto Mascota</label>
            <span
                class="cursor"
                data-toggle="tooltip"
                data-placement="top" title="Adjunta la foto de tu mascota en formato .JPG"
            >
            @include('icons.icon-readme')
            </span>
            <input type="file" name="foto" class="form-control-file @error('foto') is-invalid  @enderror" id="exampleFormControlFile1">

            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group mt-4 pt-1">
            <button type="submit" class="btn btn-primary">{{ $btn }}</button>
        </div>
    </div>
</div>
