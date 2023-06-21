@extends('templates.FormIndex')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="container-sm">
                <div class="col-md-8 offset-md-2" style="text-align:center; padding:0.5em 0">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid">
                    <h1>Edición Formulario de <b>{{ $formulario->user_name }}</b></h1>
                    <hr>
                </div>
                <form method="PUT" action="{{ route('admin.formdata.update', $formulario->id) }}">
                    @include('admin.formdata.partials.FormEdition')
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
