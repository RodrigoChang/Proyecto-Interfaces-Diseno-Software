@csrf
<div class="space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nombre y Apellido</label>
        <input type="text" id="name" name="name"
            value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset"
            class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
            required />
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Correo Electrónico</label>
        <input type="email" id="email" name="email"
            value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset"
            class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
            required />
    </div>

    @isset($create)
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Contraseña</label>
            <input id="password" type="password" name="password"
                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
                autocomplete="new-password" required />
        </div>

        <div>
            <label for="password-confirm" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirmar Contraseña</label>
            <input id="password-confirm" type="password" name="password_confirmation"
                class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
                autocomplete="new-password" required />
        </div>
    @endisset

    <div>
        <p class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Roles</p>
        <div class="space-y-2">
            @foreach ($roles as $role)
                <div class="flex items-center">
                    <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}"
                        @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
                    <label class="ml-2 text-sm text-gray-700 dark:text-gray-300" for="{{ $role->name }}">
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="pt-2">
        <button type="submit"
            class="w-full inline-flex justify-center items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">
            @isset($create)
                Crear Usuario
            @else
                Modificar Usuario <span class="ml-1 font-bold">{{ $user->name }}</span>
            @endisset
        </button>
    </div>
</div>
