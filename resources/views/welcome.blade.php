<!DOCTYPE html>
<html>
<head>
    <title>How to Use Fullcalendar in Laravel 8</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>

<style>
    body {
  background: url('https://image.made-in-china.com/2f0j00OMzGiutagJkc/New-Hotel-Wallpaper-Designs-Home-Decoration-3D-Wallpaper-for-Rome-Wall.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>
<body>


<div class="div mt-5 m-5">
<h4 class="text-center font-weight-bold text-secondary "> Sistema de Reservacion de Hotel</h4>

<ul class="nav nav-tabs " id="nav-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Disponibles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-danger text-bold"  id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ocupadas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>


<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><div class="d-flex justify-content-center">
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight">
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
          </div>
          <div class="p-2 bd-highlight mt-5 ml-5 text-right font-weight-light">
        </div>

        </div>
        </div></div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
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
                  <th scope="row"> {{$habitacion->name}}</th>
                  <td>05/10/22</td>
                  <td><a href="#"></a></td>
                </tr>
              @endforeach

            </tbody>
          </table>
            </div>
            <div class="p-2 bd-highlight mt-5 ml-5 text-right font-weight-light">
          </div>

          </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
  </div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
