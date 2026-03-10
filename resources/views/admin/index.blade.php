@extends('templates.index')

@section('heading', 'Panel de Administración')

@section('content')
    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Acceso Restringido a Usuarios Administradores</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 text-center">Vehículos Arrendados</h3>
            </div>
            <div class="px-6 py-4 text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    En esta sección podrá visualizar los Vehículos Arrendados en el sistema.
                </p>
                <a href="{{ url('/admin/formdata') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">
                    Ver Vehículos Arrendados
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 text-center">Usuarios</h3>
            </div>
            <div class="px-6 py-4 text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-4">
                    En esta sección podrá visualizar los usuarios registrados en el sistema.
                </p>
                <a href="{{ url('/admin/users') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">
                    Ver Usuarios Registrados
                </a>
            </div>
        </div>
    </div>
@endsection
