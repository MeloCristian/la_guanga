<?php
use Illuminate\Support\Facades\Route;
$categorias = \App\Models\Categoria::all();
?>
<header class="header d-flex justify-content-end bg-warning" id="header">


    @if (preg_match("/^catalog$/", request()->route()->uri) || preg_match("/^catalog\/categoria\/{id}$/", request()->route()->uri))
        <div class="dropdown">
            <button class="d-flex align-items-center btn btn-dark ms-2 dropdown-toggle" type="button"
                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-filter fa-lg pe-2"></i>
                <span>Categorias</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($categorias as $item)
                    <a class="dropdown-item"
                        href="{{ url('catalog/categoria/' . $item->id) }}">{{ $item->nombre }}</a>
                @endforeach
            </div>
        </div>
    @endif
    @if (Auth::check())
        <div class="dropdown">
            <button class="d-flex align-items-center btn btn-dark ms-2 dropdown-toggle" type="button" id="dropdownuser"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-user fa-lg pe-2"></i>
                <span>{{ Auth::user()->name }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownuser">
                <form action="{{ url('logout') }}" method="POST" id="logout">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <a onclick="document.getElementById('logout').submit();" class="dropdown-item">
                        <i class='bx bx-log-out nav_icon'></i>
                        <span class="nav_name">Cerrar Sesión</span>
                    </a>
                </form>
            </div>
        </div>
    @else
        <a class="d-flex align-items-center btn btn-dark ms-2" href="{{ url('cart') }}">
            <i class="fa-solid fa-cart-shopping fa-lg"></i>
        </a>
    @endif
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div class="nav_list">
            <a href="/" class="nav_link">
                <i class="fa-solid fa-house"></i>
                <span class="nav_name">Home</span>
            </a>
            <a href="/about" class="nav_link">
                <i class="fa-solid fa-circle-question"></i>
                <span class="nav_name">About</span>
            </a>
            <div class="nav_list">
                <li class="mb-1">
                    <a class="nav_link" data-bs-toggle="collapse" href="#catalog-collapse" aria-expanded="true">
                        <i class="fa-solid fa-list"></i>
                        <span class="nav_name">Catalogo</span>
                    </a>
                    <div class="collapse" id="catalog-collapse" style="">
                        <ul>

                            <a href="{{ url('/catalog') }}" class="nav_link p-1">
                                <i class="fa-solid fa-eye"></i>
                                <span class="nav_name">Ver</span>
                            </a>
                            @if (Auth::check())
                                <a href="{{ url('/catalog/create') }}" class="nav_link p-1">
                                    <i class="fa-solid fa-plus"></i>
                                    <span class="nav_name">Producto</span>
                                </a>
                            @endif
                        </ul>
                    </div>
                </li>
                @if (Auth::check())
                    <li class="mb-1">
                        <a class="nav_link" data-bs-toggle="collapse" href="#categoria-collapse"
                            aria-expanded="true">
                            <i class="fa-solid fa-list"></i>
                            <span class="nav_name">Categorías</span>
                        </a>

                        <div class="collapse" id="categoria-collapse" style="">
                            <ul>

                                <a href="{{ url('/categoria') }}" class="nav_link p-1">
                                    <i class="fa-solid fa-eye"></i>
                                    <span class="nav_name">Ver</span>
                                </a>

                                <a href="{{ url('/categoria/create') }}" class="nav_link p-1">
                                    <i class="fa-solid fa-plus"></i>
                                    <span class="nav_name">Categoría</span>
                                </a>

                            </ul>
                        </div>
                    </li>
                @endif


                <a href="/login" class="nav_link">
                    <i class="fa-solid fa-user"></i>
                    </i> <span class="nav_name">Usuario</span>
                </a>

            </div>
        </div>
    </nav>
</div>
