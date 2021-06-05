@extends('layouts.app')

@section('content')
   <div class="">
      <!-- mensaje de compra correcta o incorrecta -->
        <div class="col-12">
         @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
         @endif

         @if(session('alert'))
            <div class="alert alert-danger">{{ session('alert') }}</div>
         @endif

   <!-- Formulario para filtrar por plataforma -->
      <form action="filtrar" method="POST">
      @csrf
         <select name="plataforma" id="1">
               <option value="PC">PC</option>
               <option value="NDS">NDS</option>
               </select>
         <button type="submit">Filtrar</button>
      </form>
<!-- Formulario para filtrar por Titulo -->
      <form action="FiltrarTitulo" method="POST">
      @csrf
         <input type="text" name="titulo">
         <button type="submit">Filtrar</button>
      </form>

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
                 <td>{{ $game->precio }}€</td>
                 <td><a href="{{ route('games.comprar',$game->id)}}" class="btn btn-success">Comprar</a></td>
              </tr>
              @endforeach
           </tbody>
          </table>
       </div>
       <div class="ml-3">
         {{ $games->links() }} 
       </div>
       
   </div>
 @endsection
