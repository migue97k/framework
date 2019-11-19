@extends('home')
@section('home')
<div class="col-11">
<?php
use App\Venta;
$ventas = venta::all();
?>
<h1>Productos</h1>
<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">iD</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Comprador</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ventas as $venta)
          @if($venta->quien_vendio == Auth::user()->id)
          <tr>
            <th scope="row">{{$venta->id}}</th>
            <td>{{$venta->producto->nombre}}</td>
            <td>{{$venta->producto->precio_propuesto}}</td>
            <td>{{$venta->users->name}}</td>
          </tr>
          @endif
          @endforeach

        </tbody>
      </table>
</div>
@endsection