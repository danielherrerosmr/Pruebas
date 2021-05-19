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
                 <td colspan="2">Action</td>
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
                 <td><a href="{{ route('games.edit',$game->id)}}" class="btn btn-primary">Editar</a></td>
                 <td>
                 <form action="{{ route('games.destroy', $game->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $games ?? ''->links() !!}
          <a href="{{ route('games.create') }}" class="btn btn-success mb-2">Añadir Nuevo</a>
       </div> 
   </div>
 @endsection