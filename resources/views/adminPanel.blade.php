@extends('home')

@section('home')
   <?php
use App\Area;
$usuarios = Area::all();
?>
<div class="col-11">
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">iD</th>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)
          <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
          </tr>

    @endforeach
        </tbody>
      </table>

</div>
@endsection