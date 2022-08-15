<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel utnay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<nav class="navbar bg-info justify-content-center">
    <div class="row">
        <div class="col-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="navbar-brand text-white fs-1 fw-light" href="#">Sistema de Reservacion de Hotel</a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul class="nav justify-content-center ">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#">Reservaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Habitaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Instalaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white ">Room Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white ">Hospedaje</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white">Personal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<body>




        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.traveler.es/photos/6137717270e3cff8b85f8ff2/master/w_1800,h_1201,c_limit/129598.jpg"
                        class="d-block w-100" style="max-height: 800px" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <p class="fs-1 fw-semibold " style="  text-shadow: 2px 2px 4px #000000;">Sistema de Reservacion
                            de Hotel</p>
                        <p class="fs-6 fw-bold text-white lh-1" style="  text-shadow: 2px 2px 4px #000000;">uno de los
                            Mejores Hoteles en el Mundo por los World's Best Awards de Travel + Leisure, <br> ofrece una
                            de las mejores experiencias vacacionales</p>
                        <a type="button" class="btn bg-info text-white fw-semibold mt-3 btn-lg"
                            href="{{ url('welcome') }}">Reservar ahora</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src=" https://media.traveler.es/photos/613771723decec3303bac0ca/master/w_1600%2Cc_limit/129599.jpg"
                        class="d-block w-100" style="max-height:800px" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <p class="fs-1 fw-semibold " style="  text-shadow: 2px 2px 4px #000000;">Sistema de Reservacion
                            de Hotel</p>
                        <p class="fs-6 fw-bold text-white lh-1" style="  text-shadow: 2px 2px 4px #000000;">uno de los
                            Mejores Hoteles en el Mundo por los World's Best Awards de Travel + Leisure, <br> ofrece una
                            de las mejores experiencias vacacionales</p>
                        <a type="button" class="btn bg-info text-white fw-semibold mt-3 btn-lg"
                            href="{{ url('welcome') }}">Reservar ahora</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-3.expansion.mx/dims4/default/515c12b/2147483647/strip/true/crop/2048x1365+0+0/resize/1800x1200!/format/webp/quality/90/?url=https%3A%2F%2Fcherry-brightspot.s3.amazonaws.com%2F80%2F11%2F9062f39a4789b7e109ae23f08aec%2F15585113-1298709533501637-6621563218004275630-o.jpg"
                        style="max-height:800px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block shadow ">
                        <p class="fs-1 fw-semibold " style="  text-shadow: 2px 2px 4px #000000;">Sistema de
                            Reservacion de Hotel</p>
                        <p class="fs-6 fw-bold text-white lh-1" style="  text-shadow: 2px 2px 4px #000000;">uno de los
                            Mejores Hoteles en el Mundo por los World's Best Awards de Travel + Leisure, <br> ofrece una
                            de las mejores experiencias vacacionales</p>
                        <a type="button" class="btn bg-info text-white fw-semibold mt-3 btn-lg"
                            href="{{ url('welcome') }}">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>
