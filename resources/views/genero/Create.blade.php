@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Crear Plataforma</a></h2>
<br>

<form action="{{ route('genero.store') }}" method="POST" enctype="multipart/form-data" >
@csrf

<div class="">
    <div class="col-md-8">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Titulo" required>
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>

</form>
@endsection
