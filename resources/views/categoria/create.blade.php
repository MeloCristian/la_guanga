@extends('layouts.master')
@section('content')
    <form action="{{ url('/categoria/create/') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="card mx-auto " style="max-width: 50rem">
            <div class="card-header text-center bg-dark mb-3">
                <h1 class="text-white">Crear Categoía</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Nombre de la categoría</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" >
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                        >
                </div>
                           
            </div>
            <div class="card-footer text-center bg-dark">
                <button type="submit" class="btn btn-outline-primary">Crear categoría</button>
            </div>
        </div>
    </form>
@stop
