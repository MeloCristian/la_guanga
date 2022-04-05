@extends('layouts.master')
@section('content')
    <div class="text-center">
        @foreach ($categorias as $key => $categoria)
            <div class="card d-inline-flex m-4" style="height: 15rem; width: 18rem;">
                <div class="card-header ">
                    <h5 class="card-title">{{ $categoria->nombre }}</h5>
                </div>
                <div class="card-body p-0">
                    <p class="card-text p-2" style="overflow: auto; height: 8.5rem;" ><b>Descripcion: </b> {{ $categoria->descripcion }}</p>
                </div>
                <div class="card-footer bg-dark d-flex justify-content-center">
                    <form action="{{ url('/categoria/edit/' . $categoria->id) }}" method="GET" class="m-2">
                        <button class="btn btn-outline-warning ps-2 pe-2" type="submit">
                            <i class="fa-solid fa-store me-2"></i>
                            Editar
                        </button>
                    </form>
                    <form action="{{ url('/categoria/delete/' . $categoria->id) }}" method="POST" class="m-2" id="form_delete">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-outline-danger ps-2 pe-2 show_confirm" type="submit">
                            <i class="fa-solid fa-trash me-2"></i>
                            Eliminar
                        </button>
                        <input value="{{$categoria->nombre}}" name="name" hidden>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
