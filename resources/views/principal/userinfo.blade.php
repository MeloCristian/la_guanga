@extends('layouts.master')
@section('content')
    <div class="card mx-auto" style="max-width: 30rem;">
        <div class="card-header d-flex justify-content-center">
            <h1>{{ Auth::user()->name }}</h1>
        </div>
        <div class="card-body">
            <p><b>Tipo de usuario: </b>{{ Auth::user()->tipo_usuario->tipo }}</p>
            <p><b>Descripción: </b>{{ Auth::user()->tipo_usuario->descripcion }}</p>
            <p><b>Email: </b>{{ Auth::user()->email }}</p>
        </div>
        <div class="card-footer bg-dark d-flex justify-content-center">
            <form action="catalog" method="GET">
                {{ csrf_field() }}
                {{ method_field('GET') }}
                <button type="submit" class="btn btn-outline-info">
                    <i class="fa-solid fa-list"></i>
                    <span class="nav_name">Ir al cátalogo</span>
                </button>
            </form>
        </div>
    </div>
@endsection
