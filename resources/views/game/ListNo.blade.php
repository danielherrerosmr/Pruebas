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
   <div class="form-group row">
      <form action="filtrar" method="POST" class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
               @csrf
                  <select name="plataforma" id="1" class="form-control form-control-sm">
                        <option selected>Elegir Plataforma</option>
                        <option value="PC">PC</option>
                        <option value="NDS">NDS</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Filtrar</button>           
      </form>
   <!-- Formulario para filtrar por Titulo -->
         <form action="FiltrarTitulo" method="POST" class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
               @csrf
               <input type="text" name="titulo" class="form-control" placeholder="Titulo" >
            </div>
            <button type="submit" class="btn btn-primary mb-2">Filtrar</button>
         </form>
       </div>
         
          <table class="table table-bordered table-dark table-hover text-center justifi-content-center" id="laravel_crud">
           <thead>
              <tr>
               <th>Imagen</th>
               <th>Titulo</th>
               <th>Genero</th>
               <th>Edicion</th>
               <th>Plataforma</th>
               <th>Precio</th>
               <td colspan="1">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($games ?? '' as $game)
              <tr>
                  <td><img src="{{ asset('storage'). '/' . $game->foto }}" width="100" height="140" class="rounded img-fluid" alt=""></td>
                 <td class="align-middle">{{ $game->titulo }}</td>
                 <td class="align-middle">{{ $game->genero }}</td>
                 <td class="align-middle">{{ $game->edicion }}</td>
                 <td class="align-middle">{{ $game->plataforma }}</td>
                 <!-- <td>{{ date('Y-m-d', strtotime($game->created_at)) }}</td> -->
                 <td class="align-middle" >{{ $game->precio }}€</td>
                 <td class="align-middle"><a href="{{ route('games.comprar',$game->id)}}" class="btn btn-success">Comprar</a></td>
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
