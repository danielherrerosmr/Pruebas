@extends('game.Layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Añadir Videojuego</a></h2>
<br>
 
<form action="{{ route('games.store') }}" method="POST" name="add_game" files="true">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Titulo</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Genero</strong>
            <input type="text" name="genero" class="form-control" placeholder="Genero">
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Edicion</strong>
            <textarea class="form-control" col="4" name="edicion" placeholder="Edicion"></textarea>
            <span class="text-danger">{{ $errors->first('edicion') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Plataforma</strong>
            <textarea class="form-control" col="4" name="plataforma" placeholder="Plataforma"></textarea>
            <span class="text-danger">{{ $errors->first('plataforma') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
 
</form>
@endsection