@extends('templates.index')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('img/fonasa_2.jpg') }})"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h4 class="mb-4" align="center">Edición de Usuario</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                                @method('PATCH')
                                @include('admin.users.partials.registerUsers')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
