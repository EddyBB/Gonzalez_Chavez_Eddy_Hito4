@extends('layouts.public_nav')
@section('title'.'index')
@section('content')
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">

        <div class="col-lg-7">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset('img/armonia.jpg') }}" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/lirica.jpg') }}" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/seaside.jpg') }}" class="d-block w-100" alt="...">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

        </div>

        <div class="col-lg-5">
            <h1 class="font-weight-light">DESCUBRE NUESTRAS ??LTIMAS PROMOCIONES</h1>
            <p>Las mejores ofertas de Cruceros baratos para disfrutar al m??ximo. Vive las vacaciones que siempre has
                so??ado a un precio muy conveniente, escogiendo entre una amplia gama de destinos: el Mediterr??neo y
                las c??lidas islas griegas, los incre??bles paisajes de los fiordos noruegos, las aguas turquesas del
                Caribe, el lujo de Dub??i o la belleza de Arabia Saud?? y Mar Rojo.</p>
            <a class="btn btn-primary" href="#!">Descubre m??s</a>
        </div>
    </div>


    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        @foreach($crucero as $cru)
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body text-center">
                    <img class="img-fluid" src="{{ asset('img/'.$cru->img_crucero) }}" loading="lazy" alt="{{$cru->nombre}}" title="{{$cru->nombre}}">
                    <h2 class="card-title">{{$cru->nombre}}</h2>
                    <p class="card-text">{{$cru->descripcion}}</p>
                </div>
                <div class="card-footer text-center">
                    <h2 class="card-title pricing-card-title">{{$cru->precio}}???<small class="text-muted fw-light">/persona</small></h2>
                    <a class="btn btn-primary btn-sm" href="{{$cru->id_crucero}}">Reserva ahora</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection