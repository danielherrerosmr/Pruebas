@extends('layouts.app')
   
@section('content')
   <div class="">
        <div class="col-12">

          
          <table class="table table-bordered table-dark table-hover text-center" id="laravel_crud">
           <thead>
              <tr>
                  <th>Imagen</th>
                 <th>Id</th>
                 <th>Titulo</th>
                 <th>Genero</th>
                 <th>Edicion</th>
                 <th>Plataforma</th>
                 <!-- <th>Añadido a nuestra tienda</th> -->
                 <th>Precio</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($games ?? '' as $game)
              <tr>
               <td>
                  <img src="{{ asset('storage'). '/' . $game->foto }}" width="100" height="140"  alt="" class="rounded img-fluid">
               </td>
                 <td class="align-middle">{{ $game->id }}</td>
                 <td class="align-middle">{{ $game->titulo }}</td>
                 <td class="align-middle">{{ $game->genero }}</td>
                 <td class="align-middle">{{ $game->edicion }}</td>
                 <td class="align-middle">{{ $game->plataforma }}</td>
                 <!-- <td class="align-middle">{{ date('Y-m-d', strtotime($game->created_at)) }}</td> -->
                 <td class="align-middle">{{ $game->precio }}€</td>
                 <td class="align-middle"><a href="{{ route('games.edit',$game->id)}}" class="btn btn-primary">Editar</a></td>
                 <td class="align-middle">
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
          <a href="{{ route('games.create') }}" class="btn btn-success mb-2">Añadir Nuevo</a>
       </div> 

       <div class="ml-3">
         {{ $games->links() }} 
       </div>
       
   </div>
 @endsection