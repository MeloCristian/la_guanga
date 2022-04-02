@extends('master')

@section('content')
    @parent
    <div id="carouselExampleIndicators" class="carousel slide d-inline-flex p-2 bd-highlight bg-primary" data-bs-ride="carousel">
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
                <img src="https://img.freepik.com/psd-gratis/plantilla-portada-facebook-banner-web-marketing-digital_237398-284.jpg?size=626&ext=jpg"
                    alt="..." height="300px">
            </div>
            <div class="carousel-item">
                <img src="https://static-cse.canva.com/blob/652731/banner.a9e5beb5.jpg"
                height="300px" alt="...">
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
    <div class="card">
        <h1>LA GUANGA</h1>
        <div class="w-80">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A eos quo quod ullam ut. Incidunt repellat esse sed molestiae? Officiis sequi ducimus quos nulla praesentium vero velit tempore expedita illum?</div>
    </div>
@endsection
