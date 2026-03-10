@extends('templates.index')

@section('heading', 'Crear Usuario')

@section('content')
    <div class="max-w-lg mx-auto">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Creación de Usuario</h3>
            </div>
            <div class="px-6 py-6">
                <form method="POST" action="{{ route('admin.users.store') }}">
                    @include('admin.users.partials.registerUsers', ['create' => true])
                </form>
            </div>
        </div>
    </div>
@endsection
