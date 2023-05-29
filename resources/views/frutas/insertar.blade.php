@extends('welcome')
@section('title', 'Insertar Frutas')
@section('content')
 
    <div class="position-absolute top-50 start-50 w-50 translate-middle">
        <div class="bg-info p-2">
            <h2 class="text-center text-danger mt-3 mb-5">Formulario Insertar Fruta</h2>
            <form action="{{url('insertarFruta')}}" method="POST" >
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Fruta">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="precio" placeholder="Precio">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad">
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection