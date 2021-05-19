@extends('layouts.app')

@section('content')
   <div class="row">
        <div class="col-12">

          <table class="table table-bordered table-dark table-hover" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Titulo</th>
                 <th>Genero</th>
                 <th>Edicion</th>
                 <th>Plataforma</th>
                 <th>Añadido a nuestra tienda</th>
                 <th>Precio</th>
                 <td colspan="1">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($games ?? '' as $game)
              <tr>
                 <td>{{ $game->id }}</td>
                 <td>{{ $game->titulo }}</td>
                 <td>{{ $game->genero }}</td>
                 <td>{{ $game->edicion }}</td>
                 <td>{{ $game->plataforma }}</td>
                 <td>{{ date('Y-m-d', strtotime($game->created_at)) }}</td>
                 <td>{{ $game->precio }}</td>
                 <td><a href="{{ route('games.comprar',$game->id)}}" class="btn btn-success">Comprar</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
       </div>
   </div>
 @endsection
