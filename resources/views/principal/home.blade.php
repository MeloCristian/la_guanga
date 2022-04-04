@extends('layouts.master')

@section('content')
    @parent
    <div class="text-center">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/logo.jpeg"
                    style="height: 400px" class="img-thumbnail img-fluid mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gq.com.mx/photos/61b8e357d512bd51f0348f18/16:9/w_2560%2Cc_limit/GettyImages-940697502.jpg"
                    style="height: 400px" alt="..." class="img-thumbnail img-fluid mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="https://c8.alamy.com/compes/2a7j78j/banner-ganchillo-y-panuelo-rojo-sobre-la-mesa-de-madera-artesania-y-moda-2a7j78j.jpg"
                    style="height: 400px" alt="..." class="img-thumbnail img-fluid mx-auto">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
   
    <div class="card">
        <h1>LA GUANGA</h1>
        <div class="w-80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A eos quo quod ullam ut. Incidunt repellat esse sed molestiae? Officiis sequi ducimus quos nulla praesentium vero velit tempore expedita illum?</div>
    </div>
@endsection
