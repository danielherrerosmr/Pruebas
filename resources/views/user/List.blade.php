@extends('game.Layout')


@section('content')
   <div class="row">
        <div class="col-12">

          <table class="table table-bordered table-dark table-hover" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Email</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($users ?? '' as $user)
              <tr>
                 <td>{{ $user->id }}</td>
                 <td>{{ $user->name }}</td>
                 <td>{{ $user->email }}</td>
                  <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Editar</a></td>
                 <td>
                   <form action="{{ route('users.destroy', $user->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                  </td>

                </td>
              </tr>
              @endforeach
           </tbody>
          </table>

       </div>
   </div>
 @endsection
