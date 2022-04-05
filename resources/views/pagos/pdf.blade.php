<!DOCTYPE html>
<html>

<head>
    <title>Factura # {{ $factura->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="card-title">Factura de venta # {{ $factura->id }}</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <div><b>Cedula: </b>{{$cliente->dni}}</div>
                <div><b>Nombre del cliente: </b>{{ $cliente->nombres }} {{ $cliente->apellidos }}</div>                
            </div>
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th sc ope="col">Item #</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio Unitario</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                        $row = 0;
                    @endphp
                    @foreach (Cart::getContent() as $item)
                        <tr>
                            @php
                                $total = $item->quantity * $item->price;
                                $row += 1;
                            @endphp

                            <td scope="row">{{ $row }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->quantity * $item->price }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-dark text-white">
            <div class="card-title">
                <h5>Total: {{ $total }}</h5>
            </div>
        </div>
    </div>
</body>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

</style>

</html>
