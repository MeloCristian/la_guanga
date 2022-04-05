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
            <p><b>Disponibles:</b> {{ $articulo->existencias }} unidades.</p>
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
                <form action="{{ url('/catalog/delete/' . $articulo->id) }}" method="POST" id="form_delete">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-outline-success show_confirm">
                        <i class="fa-solid fa-trash"></i>
                        Eliminar
                    </button>
                    <input type="text" name="name" id="name" hidden value="{{ $articulo->nombre }}">
                </form>
            @else
                <div class="container">
                    <div class="d-inline-flex">
                        <a class="btn btn-outline-warning me-2" href="#collapse-cantidad" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="collapseExample">
                            <i class="fa-solid fa-store"></i>
                            Agregar al carrito
                        </a>

                        <form method="GET" action="{{ url('catalog') }}">
                            <button class="btn btn-outline-success">
                                <i class="fa-solid fa-arrow-left-long"></i>
                                Regresar
                            </button>
                        </form>
                    </div>
                    <div class="col">
                        <form form method="POST" class="me-2" action="{{ url('cart/' . $articulo->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="collapse" id="collapse-cantidad" style="width: 20rem">
                                <div class="d-inline-flex mt-3">
                                    <div class="input-group me-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Cantidad</span>
                                        </div>
                                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                                            name="cantidad" id="cantidad">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Agregar</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop
