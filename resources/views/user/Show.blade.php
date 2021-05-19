@extends('layouts.app')

@section('content')
<h2 style="margin-top: 12px;" class="text-center">Ver Perfil</a></h2>
<br>

<form action="{{ route('users.update', $user_info->id) }}" method="GET" name="update_user">
{{ csrf_field() }}
@method('PATCH')

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $user_info->name }}" readonly>
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="text" name="genero" class="form-control" placeholder="Genero" value="{{ $user_info->email }}" readonly>
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
    </div>

    <div class="col-md-12">
    <td><a href="{{ route('users.edit',Auth::user()->id )}}" class="btn btn-primary">Modificar Perfil</a></td>
    </div>
</div>

</form>
@endsection
