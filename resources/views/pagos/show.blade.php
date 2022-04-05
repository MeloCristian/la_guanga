@extends('layouts.master')
@section('content')
    @php
    @endphp
    @if (!$encontrado && !$registro)
        @include('partials.get_person')
    @else
        <form action="{{$registro?url('persona/create'):url('/factura/create') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="card mx-auto " style="max-width: 50rem">
                <div class="card-header text-center bg-dark mb-3">
                    <h1 class="text-white">Generar Factura</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="director" class="form-label">Cedula</label>
                        <input type="number" {{$registro?'':'disabled value='.$persona->dni}} class="form-control" id="dni" name="dni" onfocusout="consultarDatos()">
                        
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nombre</label>
                        <input type="text" class="form-control" {{$registro?'':'disabled value='.$persona->nombres}} id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Apellido</label>
                        <input type="text" class="form-control" {{$registro?'':'disabled value='.$persona->apellidos}} id="apellido" name="apellido">
                    </div>
                    <div class="  mb-3">
                        <label for="poster" class="form-label">Telefono</label>
                        <input type="number" class="form-control" {{$registro?'':'disabled value='.$persona->telefono}} id="telefono" name="telefono">
                    </div>
                    <input type="number" hidden id="id_cliente" name="id_cliente" {{!$registro?'value='.$persona->id:'  '}}>
                </div>
                <div class="card-footer text-center bg-dark">
                    <button type="submit" class="btn btn-outline-primary">{{$registro?'Registrar':'Generar factura'}}</button>
                </div>
            </div>
        </form>
    @endif
@endsection
