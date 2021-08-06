<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Pedidos</title>
  </head>
  <body background="img/fondo.jpg">
    <header>
        <nav class="navbar navbar-dark bg-success navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img class="logo" src="{{asset('img/logo.jpg')}}" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
[16:58]
aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-succes">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>

                </div>
              </div>
            </div>
          </nav>
    </header>
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card bg-warning">
                <div class="card-header bg-success text-white">
                    <span>Seleccione</span>
                </div>
                <div class="card-body">
                    <div class="mb-6">
                <div class="card-footer d-grid gap-6 mt-5 pt-3 pb-3">
                    <button id="cliente-btn" class="btn btn-success">Cliente</button>
                </div>
                <div class="card-footer d-grid gap-6 pt-3 pb-3">
                    <button id="usuario-btn" class="btn btn-success">Usuario</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/home.js')}}"></script>
  </body>
</html>
