@extends('layouts.master')
@section('content')
    <div class="card m-5">
        <div class="card-header text-center bg-secondary text-white text-uppercase">
            <h5 class="card-tilte">Lista de prodcutos agreados al carrito</h5>
        </div>
        @if (!Cart::isEmpty())
            <div class="card-body">

                <table class="table table-dark text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th sc ope="col">#ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                            <th sc ope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach (Cart::getContent() as $item)
                            <tr>
                                @php
                                    $total = $item->quantity * $item->price;
                                @endphp

                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->quantity * $item->price }}</td>
                                <td scope="row">
                                    <form action="{{ url('cart/' . $item->id) }}" method="POST" id="form_delete">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-outline-danger show_confirm" type="submit">
                                            <i class="fa-solid fa-trash me-2"></i>
                                            Eliminar
                                        </button>
                                        <input type="text" name="name" id="name" hidden value="{{ $item->name }}">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-inline-flex justify-content-end bg-secondary">
                <div class="badge  text-wrap text-center p-2 me-2 fs-5">Total: </div>
                <div class="badge text-wrap text-center p-2 me-5 fs-5">{{ $total }}</div>
                <form action="{{url('factura/pagar')}}">
                    <button class="btn btn-success text-white">

                        <i class="fa-solid fa-hand-holding-dollar me-2"></i>
                        Facturar
                    </button>
                </form>

            </div>
        @else
            <div class="bg-dark text-white text-center p-5">
                <h5 class="card-title">No se encontraron elementos agregados al carrito</h5>
            </div>
        @endif
    </div>

@endsection
