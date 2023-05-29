@extends('welcome')
@section('title', 'Frutas')
@section('content')
<div class="w-75 mt-2 mx-auto">
    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Fruta</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($frutas as $item)
          <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->cantidad}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection