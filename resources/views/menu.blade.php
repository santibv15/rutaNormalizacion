<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Cruds</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Estado producto
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{Route('ViewEstadoP')}}">ver listado de estados</a></li>
                      <li><a class="dropdown-item" href="{{ Route('InsertEstadoP')}}">Registrar estado</a></li>
   
                    </ul>
                  </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categoria
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ Route('ViewCategoria')}}">ver listado de categoria</a></li>
                  <li><a class="dropdown-item" href="{{ Route('InsertCategoria')}}">registrar categoria</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mesa Sectorial
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{Route('ViewMesa')}}">ver listado mesas</a></li>
                  <li><a class="dropdown-item" href="{{ Route('InsertMesa')}}">Registrar Mesa</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Regionales
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{Route('ViewRegional')}}">Listado de regionales</a></li>
                  <li><a class="dropdown-item" href="{{ Route('InsertRegional')}}">Registrar Regional</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Centro Fomarcion
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{Route('ViewCentrof')}}">Listado de centros</a></li>
                  <li><a class="dropdown-item" href="{{ Route('ViewInsertCentrof')}}">Registrar centro</a></li>

                </ul>
              </li>


            </ul>
          </div>
        </div>
      </nav>
      <br>
      @yield('contenido')

      
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>
