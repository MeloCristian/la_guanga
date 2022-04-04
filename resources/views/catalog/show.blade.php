@extends('layouts.master')

@section('content')
    <div class="card mx-auto " style="max-width: 50rem">
        <div class="card-header d-flex justify-content-center">
            <h5 class="card-title">{{ $articulo->nombre }}</h5>
        </div>
        <div class="d-flex justify-content-center pt-2 pb-2">
            <img src="{{ $articulo->img }}" alt="{{ $articulo->nombre }}" class="img-thumbnail img-fluid" width="400">
        </div>
        <div class="row">
            <p><b>Descrpción:</b> {{ $articulo->descripcion }}</p>
            <p><b>Cantidad:</b> {{ $articulo->existencias }} unidades.</p>
            <p><b>Precio: </b> {{ $articulo->precio }}</p>
        </div>
        <div class="card-footer bg-dark d-inline-flex">
            @if (Auth::check())
                <form action="{{ url('/catalog/edit/' . $articulo->id) }}" class="me-2" method="GET">
                    <button type="submit" class="btn btn-outline-warning">
                        <i class="fa-solid fa-store"></i>
                        Editar
                    </button>
                </form>
                <form action="{{ url('/catalog/delete/'. $articulo->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-outline-success">
                        <i class="fa-solid fa-trash"></i>
                        Eliminar
                    </button>
                </form>
            @else
                <form action="{{ url('/catalog/edit/' . $articulo->id) }}" class="me-2">
                    <button class="btn btn-outline-warning">
                        <i class="fa-solid fa-store"></i>
                        Pasar a la compra
                    </button>
                </form>
                <form action="{{ url('/catalog') }}">
                    <button class="btn btn-outline-success">
                        <i class="fa-solid fa-arrow-left-long"></i>
                        Regresar
                    </button>
                </form>
            @endif
        </div>
    </div>
@stop
