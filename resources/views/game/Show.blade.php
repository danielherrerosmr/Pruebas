@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Pagina de Compra</a></h2>


<form action="{{ route('payment') }}" method="POST" name="update_game">
@csrf
<div class="row pl-5">
    <div class="col-md-8">
        <div class="form-group">
            <strong>Titulo</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $game_info->titulo }}" readonly>
            <span class="text-danger">{{ $errors->first('titulo') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Genero</strong>
            <input type="text" name="genero" class="form-control" placeholder="Genero" value="{{ $game_info->genero }}" readonly>
            <span class="text-danger">{{ $errors->first('genero') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Edicion</strong>
            <input type="text" name="edicion" class="form-control" placeholder="Edicion" value="{{ $game_info->edicion }}" readonly>
            <span class="text-danger">{{ $errors->first('edicion') }}</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <strong>Plataforma</strong>
            <input type="text" name="plataforma" class="form-control" placeholder="Plataforma" value="{{ $game_info->plataforma }}" readonly>
            <span class="text-danger">{{ $errors->first('plataforma') }}</span>
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group">
            <strong>Precio</strong>
            <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ $game_info->precio }}" readonly>
            <span class="text-danger">{{ $errors->first('precio') }}</span>
        </div>
    </div>

    <div class="col-md-8">
    <!-- <a href="{{ route('payment') }}" class="btn btn-success">Pay</a> -->
    <input type="submit" value="pagar" class="btn btn-success">
    <a href="https://www.sandbox.paypal.com/webapps/" class="btn btn-success">Cuenta de Paypal</a>
    </div>
</div>

</form>
@endsection
