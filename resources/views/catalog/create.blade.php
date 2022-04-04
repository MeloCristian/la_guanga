@extends('layouts.master')
@section('content')
    <form action="{{ url('/catalog/create/') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="card mx-auto " style="max-width: 50rem">
            <div class="card-header text-center bg-dark mb-3">
                <h1 class="text-white">Crear Artículo</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" >
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Existencias</label>
                    <input type="text" class="form-control" id="existencias" name="existencias"
                        >
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" ">
                </div>
                <div class="mb-3">
                    <label for="poster" class="form-label">Link de la imagen</label>
                    <input type="url" class="form-control" id="img" name="img">
                </div>
                <div class="mb-3">
                    <label for="synopsis" class="form-label">Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion"
                        id="descripcion">   </textarea>
                </div>    
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="id_categoria"
                        id="id_categoria">
                        <option >Selecciona una categoria</option>                       
                        @foreach ($categorias as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer text-center bg-dark">
                <button type="submit" class="btn btn-outline-primary">Crear articulo</button>
            </div>
        </div>
    </form>
@stop
