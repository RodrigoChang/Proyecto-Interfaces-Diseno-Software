@csrf
<div class="form-group mt-3">
    <input type="text" class="form-control" id="name" type="name" name="name"
        value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset" required />
    <label class="form-control-placeholder" for="name">Nombre y Apellido</label>

    <div class="form-group mt-3">
        <input type="text" class="form-control" id="email" type="email" name="email"
            value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset" required />
        <label class="form-control-placeholder" for="email">Correo</label>
    </div>

    @isset($create)
        <div class="form-group">
            <input id="password" type="password" class="form-control" name="password" autocomplete="current-password"
                required />
            <label class="form-control-placeholder" for="password">Contraseña</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                autocomplete="current-password" required />
            <label class="form-control-placeholder" for="password-confirm">Confirmar
                Contraseña</label>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
    @endisset
    <div class="mb-3">
        @foreach ($roles as $role)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}"
                    id="{{ $role->name }}"
                @isset($user) @if (in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
            <label class="form-check-label" for="{{ $role->name }}">
                {{ $role->name }}
            </label>
        </div>
    @endforeach

    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
            @isset($create)
                Crear Usuario
            @else
                Modificar Usuario <b>{{ $user->name }}</b>
            @endisset
        </button>
    </div>
</div>
</div>
