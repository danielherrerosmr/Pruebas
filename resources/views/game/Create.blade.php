@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Añadir Videojuego</a></h2>
<br>

<form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data" >
<!-- {{ csrf_field() }} -->
@csrf

<div class="">
    <div class="col-md-8">
        <div class="form-group">
            <strong>Titulo</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Genero</strong>
            <input type="text" name="genero" class="form-control" placeholder="Genero" required>
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Edicion</strong>
            <textarea class="form-control" col="4" name="edicion" placeholder="Edicion" required></textarea>
            <span class="text-danger">{{ $errors->first('edicion') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Plataforma</strong>
            <textarea class="form-control" col="4" name="plataforma" placeholder="Plataforma" required></textarea>
            <span class="text-danger">{{ $errors->first('plataforma') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Precio</strong>
            <textarea class="form-control" col="4" name="precio" placeholder="Precio" required></textarea>
            <span class="text-danger">{{ $errors->first('precio') }}</span>
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group">
            <strong>Foto</strong>
            <input type="file" name="foto" id="foto" class="form-control" required>
            <span class="text-danger">{{ $errors->first('foto') }}</span>
        </div>
    </div>

    <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>

</form>
@endsection
