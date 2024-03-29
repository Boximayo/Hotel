<!DOCTYPE html>
<html>
<head>
    <title>Reservaciones Hotel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</head>

<style>
    body {
  background: url('https://img.freepik.com/premium-photo/reception-lobby-artwork-hotel-office_41926-993.jpg?w=2000') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>
<nav class="navbar justify-content-center"  style="background-color: #d8bb78">
    <div class="row">
        <div class="col-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="navbar-brand text-white fs-1 fw-light" href="{{ route('index.index') }}">Sistema de Reservacion de Hotel</a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <ul class="nav justify-content-center " >
                <li class="nav-item">
                  <a class="nav-link text-white active" aria-current="page" href="#">Reservaciones</a>
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
                  <li class="nav-item dropdown">
                        <a class="dropdown-item text-white mt-2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>

              </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container overflow-hidden ">
        <p class="fw-light fs-1 text-white text-left" style="text-shadow: 8px 2px 4px #000000">Lista de habitaciones disponibles</p>
        <div class="row gx-5">
          <div class="col">
           <div class="p-3 ">@foreach ($habitaciones as $habitacion)
            @if ($habitacion -> estado == 0)
            <div class="row no-gutters rounded  mb-5 text-white bg-dark"   >
                <div class="col-sm-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                      </div>

                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h4 class="card-title text-center fs-semibold mt-3">{{$habitacion->nombre}}</h4>
                        <div class="text-left ml-2">
                            <h5 class="card-text fs-light">{{$habitacion->descripcion}}.</h5>
                            <p class="card-text font-weight-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mr-2" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>habitacion para {{$habitacion->personas}} personas.</p>
                              <h6 class="card-text font-bold">MXM$ {{$habitacion->precio}}.</h6>

                            <span class="badge rounded-pill text-bg-success">
                                @if ($habitacion->estado == 0)
                                    disponible
                                @else
                                    ocupada
                                @endif
                               </span>


                        </div>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-info btn-sm btn-block m-2" data-toggle="modal" data-target="#exampleModalCenter">Reservar</a>
                              </div>

                    </div>
                </div>
            </div>
            @else<div class="row no-gutters rounded  mb-5 text-white bg-dark"   >
                <div class="col-sm-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                      </div>

                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h4 class="card-title text-center fs-semibold mt-3">{{$habitacion->nombre}}</h4>
                        <div class="text-left ml-2">
                            <h5 class="card-text fs-light">{{$habitacion->descripcion}}.</h5>
                            <p class="card-text font-weight-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mr-2" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>habitacion para {{$habitacion->personas}} personas.</p>
                              <h6 class="card-text font-bold">MXM$ {{$habitacion->precio}}.</h6>

                            <span class="badge rounded-pill text-bg-danger">
                                @if ($habitacion->estado == 1)
                                    Ocupada
                                @else
                                    ocupada
                                @endif
                               </span>


                        </div>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-info btn-sm btn-block m-2 disabled" data-toggle="modal" data-target="#exampleModalCenter">Reservar</a>
                              </div>

                    </div>
                </div>
            </div>

            @endif


            @endforeach</div>
          </div>
          <div class="col">
            <div class="p-3 ">@foreach ($habitaciones as $habitacion)
                @if ($habitacion -> estado == 0)
                <div class="row no-gutters rounded  mb-5 text-white bg-dark"   >
                    <div class="col-sm-5">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only"></span>
                            </a>
                          </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h4 class="card-title text-center fs-semibold mt-3">{{$habitacion->nombre}}</h4>
                            <div class="text-left ml-2">
                                <h5 class="card-text fs-light">{{$habitacion->descripcion}}.</h5>
                                <p class="card-text font-weight-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mr-2" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg>habitacion para {{$habitacion->personas}} personas.</p>
                                  <h6 class="card-text font-bold">MXM$ {{$habitacion->precio}}.</h6>

                                <span class="badge rounded-pill text-bg-success"> @if ($habitacion->estado == 0)
                                    disponible
                                @else
                                    ocupada
                                @endif</span>


                            </div>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-info btn-sm btn-block m-2" data-toggle="modal" data-target="#exampleModalCenter">Reservar</a>
                                  </div>

                        </div>
                    </div>
                </div>
                @else
                <div class="row no-gutters rounded  mb-5 text-white bg-dark"   >
                    <div class="col-sm-5">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="card-img mt-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only"></span>
                            </a>
                          </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h4 class="card-title text-center fs-semibold mt-3">{{$habitacion->nombre}}</h4>
                            <div class="text-left ml-2">
                                <h5 class="card-text fs-light">{{$habitacion->descripcion}}.</h5>
                                <p class="card-text font-weight-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mr-2" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                  </svg>habitacion para {{$habitacion->personas}} personas.</p>
                                  <h6 class="card-text font-bold">MXM$ {{$habitacion->precio}}.</h6>

                                <span class="badge rounded-pill text-bg-danger">
                                    @if ($habitacion->estado == 1)
                                    Ocupada
                                    @else

                                    @endif
                                   </span>


                            </div>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-info btn-sm btn-block m-2 disabled" data-toggle="modal" data-target="#exampleModalCenter">Reservar</a>
                                  </div>

                        </div>
                    </div>
                </div>
                @endif


                @endforeach</div>
          </div>
        </div>
      </div>




<div class="div mt-5 m-5">

</ul>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="d-flex justify-content-center">

        <div class="d-flex flex-row bd-highlight ">

            <div class="card mt-5 " style="width: 750px; background-color:transparent " >

            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Reservacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <h6 class="card-text font-weight-normal text-left ">Ingresa el nombre del titular de la reservacion</h6>
                      <input type="text" class="form-control" placeholder="Nombre Completo">
                      <h6 class="card-text font-weight-normal text-left mt-3">Ingresa la fecha de reservacion</h6>
                      <div class="text-center">
                          <input type="date" class="form-control" value="1" class="mb-5" >
                          <form action="{{ route('habitaciones.update', $habitacion->id)}}" method="post">
                            @csrf @method('PATCH')

                            <input id="estado" type="hidden" name="estado" value="1" required autocomplete="name">
                            <button class="btn btn-success mt-3 btn-lg btn-block data-toggle="modal" data-target="#exampleModalCenter"">reservar</button>

                        </form>
                      </div>
                  </div>

                </div>
              </div>
            </div>
          {{-- <div class="p-2 bd-highlight">
          <!-- <h6 class="text-left">Selecciona la fecha de reservacion</h6>
            <input type="date" value=""> -->
            <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($habitaciones as $habitacion)

            <tr>
                <div class="card bg-dark text-white m-5">
                    <img class="card-img rounded-0"  height="550px" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Card image">
                    <div class="card-img-overlay">
                      <h5 class="card-title text-center">{{$habitacion->name}}</h5>
                      <p class="card-text text-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <a href="#" class="">Reservar</a>
                    </div>
                  </div>


                <th scope="row"> </th>
                <th > <img src="" alt="" srcset="" height="80px" width="80px"> </th>

                <td>05/10/22</td>
                <td></td>
              </tr>
            @endforeach

          </tbody>
        </table>
          </div> --}}


        </div></div>


    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="d-flex justify-content-center">

      <div class="d-flex flex-row bd-highlight ">

          <div class="card mt-5  " style="width: 750px; background-color:transparent " >
              @foreach ($habitaciones as $habitacion)
              <div class="row no-gutters rounded border mb-5 border border-secondary bg-dark text-white" >
                  <div class="col-sm-5">

                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="card-img mt-5 ml-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="card-img mt-5 ml-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="card-img mt-5 ml-3" src="https://www.lasbrisashotels.com.mx/wp-content/uploads/2016/10/Deluxe-3-WEB.jpg" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                  </div>
                  <div class="col-sm-7">
                      <div class="card-body">
                          <h4 class="card-title text-center font-weight-bold">{{$habitacion->nombre}}</h4>
                          <div class="text-left ml-2">
                              <h5 class="card-text font-weight-light">{{$habitacion->descripcion}}.</h5>
                              <p class="card-text font-weight-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person mr-2" viewBox="0 0 16 16">
                                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>habitacion para {{$habitacion->personas}} personas.</p>
                                <h6 class="card-text font-bold">MXM$ {{$habitacion->precio}}.</h6>
                                @if ($habitacion->estado == 1)
                                  <h1>reservada</h1>
                                @else
                                <h1>NO reservada</h1>
                                @endif
                              <span class="badge badge-success">{{$habitacion->estado}}</span>
                              <h6 class="font-weight-bold">Fecha de reservacion: 25/08/22</h6>

                          </div>

                          <button href="#" class="btn btn-secondary btn-lg btn-block m-2" disabled>Reservada</button>



                      </div>
                  </div>
              </div>

              @endforeach
          </div>



      </div></div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Reservacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('habitaciones.update', $habitacion->id)}}" method="post">
            @csrf @method('PATCH')
            <div class="modal-body">
                <h6 class="card-text font-weight-normal text-center mt-5">Ingresa la fecha de reservacion</h6>

                <input id="estado" type="hidden" name="estado" value="1" required autocomplete="">
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-success">Confirmar Reservacion</button>

                </div>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
