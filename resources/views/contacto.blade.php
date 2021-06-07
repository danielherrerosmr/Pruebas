@extends('layouts.app')
<!-- Formulario para contactar con el soporte téccnico -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Contactanos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('soporte.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>

                            <div class="col-md-8">
                                <input class="col-md-8" type="text" name="email" value="{{ Auth::user()->email }}" readonly>

                            <br>
                            @error('email')
                                <p class="col-md-8 text-danger mt-2"><strong>{{ $message }}</strong></p>
                            @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-8">
                                <input class="col-md-8" type="text" name="nombre" value="{{ Auth::user()->name }}" readonly>

                                <br>
                            @error('nombre')
                                <p class="col-md-8 text-danger mt-2"><strong>{{ $message }}</strong></p>
                            @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Mensaje" class="col-md-4 col-form-label text-md-right">Mensaje</label>

                            <div class="col-md-8">
                             
                              <textarea name="mensaje" class="col-md-8" id="" cols="30" rows="5"></textarea>

                            <br>
                            @error('mensaje')
                                <p class="col-md-8 text-danger mt-2 "><strong>{{ $message }}</strong></p>
                            @enderror

                            </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- comprobamos si hay un mensaje y em caso de que lo haya lo mostramos -->
    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif

@endsection