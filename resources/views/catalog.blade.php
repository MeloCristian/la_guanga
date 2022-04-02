@extends('master')

@section('content')
    <div class="container">
        @for ($j = 0; $j < 10; $j++)
            <div class="row align-items-start">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col">
                        <div class="card mb-3" style="width: 18rem;">
                            <img src="https://img.freepik.com/vector-gratis/arbol-cerro-grafico_46176-136.jpg?size=626&ext=jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the
                                    card's
                                    content.</p>
                                <div class="row">
                                    <button class="btn-primary col">Comprar</button>
                                    <button type="button" class="btn btn-danger btn-lg col" disabled>Quitar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                @endfor
            </div>
        @endfor
    </div>
@endsection
