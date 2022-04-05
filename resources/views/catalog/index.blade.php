@extends('layouts.master')
@section('content')
    <div class="text-center" style="padding-bottom: 5rem">
        @foreach ($articulos as $key => $articulo)
            @if ($articulo->existencias > 0)
                <div class="card d-inline-flex align-items-start ms-5 me-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $articulo->img }}" class="card-img-top" alt="{{ $articulo->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $articulo->nombre }}</h5>
                                <p class="card-text">Disponibles: {{ $articulo->existencias }}</p>
                                <p class="card-text">Precio: {{ $articulo->precio }}</p>                    
                            </div>
                            <div class="d-flex justify-content-center card-footer bg-dark">
                                <form action="{{ url('/catalog/show/' . $articulo->id) }}" method="GET">
                                    <button class="btn btn-outline-primary ps-2 pe-2" type="submit">{{Auth::check()? 'Modificar' : 'Ver más'}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
