@extends('templates.FormIndex')

@section('heading', 'Edición Formulario')

@section('content')
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg px-6 py-6">
        <div class="text-center mb-6">
            <img src="{{ asset('img/logo.png') }}" class="h-16 mx-auto mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
                Edición Formulario de <strong>{{ $formulario->user_name }}</strong>
            </h1>
            <hr class="mt-4 border-gray-200 dark:border-gray-700">
        </div>
        <form method="POST" action="{{ route('admin.formdata.update', $formulario->id) }}">
            @method('PUT')
            @include('admin.formdata.partials.FormEdition')
        </form>
    </div>
@endsection
