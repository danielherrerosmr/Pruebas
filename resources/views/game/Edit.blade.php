@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Editar Videojuego</a></h2>
<br>

<form action="{{ url('/games/' . $game_info->id) }}" method="post" enctype="multipart/form-data"> 
    @csrf
    {{ method_field('PATCH') }}

    <div class="">
    <div class="col-md-8">
            <div class="form-group">
                <strong>Foto</strong>
                <img src="{{ asset('storage'). '/' . $game_info->foto }}" width="100" height="180"  alt="">
                <input type="file" name="foto" class="form-control" >
                <span class="text-danger">{{ $errors->first('foto') }}</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Titulo</strong>
                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $game_info->titulo }}" required>
                <span class="text-danger">{{ $errors->first('titulo') }}</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Género</strong>
                <select name="genero" id="1" class="form-control form-control-sm">
                     @foreach ($generos as $genero)
                        @if ($genero->nombre == $game_info->genero)
                        <option value="{{ $genero->nombre }}" selected>{{$genero->nombre}}</option>
                        @else
                        <option value="{{ $genero->nombre }}">{{$genero->nombre}}</option>
                        @endif
                       
                     @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('genero') }}</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Edicion</strong>
                <input type="text" name="edicion" class="form-control" placeholder="Edicion" value="{{ $game_info->edicion }}" required>
                <span class="text-danger">{{ $errors->first('edicion') }}</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <strong>Plataforma</strong>
                <select name="plataforma" id="1" class="form-control form-control-sm">
                     @foreach ($plataformas as $plataforma)
                        @if ($plataforma->nombre == $game_info->plataforma)
                        <option value="{{ $plataforma->nombre }}" selected>{{$plataforma->nombre}}</option>
                        @else
                        <option value="{{ $plataforma->nombre }}">{{$plataforma->nombre}}</option>
                        @endif
                     @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('plataforma') }}</span>
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <strong>Precio</strong>
                <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ $game_info->precio }}" required>
                <span class="text-danger">{{ $errors->first('precio') }}</span>
            </div>
        </div>

        <div class="col-md-8">
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
    </div>

</form>
@endsection
