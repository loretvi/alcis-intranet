<!DOCTYPE html>
<html lang="esp">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo-alcis.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-alcis.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <title>INTRANET</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet') }}" />
  <link href="{{ asset('assets/css/now-ui-dashboard.css') }}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet') }}" />


</head>
<body class="">
    <!--Sidebar -->
    <div class="sidebar" data-color="orange">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                <img src="{{ asset('assets/img/logo-alcis.png') }}" alt="">
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                <p>Intranet</p>
             </a>
        </div>

        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="now-ui-icons design_app"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li>
                    <a  class="nav-link" href="#" >
                        <i class="now-ui-icons education_atom"></i>
                        <p>Archivos</p>
                    </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Añadir</a></li>
                        <li><a class="nav-link" href="#">Añadir Página</a></li>
                        <li><a class="nav-link" href="#">Mostrar todo</a> </li>
                    </ul>
                </li>
                <li>
                    <a  class="nav-link" href="#" >
                        <i class="now-ui-icons education_atom"></i>
                        <p>Usuarios</p>
                    </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Añadir</a></li>
                        <li><a class="nav-link" href="#">Todos los usuarios</a></li>
                    </ul>
                </li>
                <li>
                    <a  class="nav-link" href="#" >
                        <i class="now-ui-icons education_atom"></i>
                        <p>Grupos</p>
                    </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Añadir</a></li>
                        <li><a class="nav-link" href="#">Mostrar todos los grupos</a> </li>
                    </ul>
                </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Inicio</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                     <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Cerrar Sesion</a>
                  <a class="dropdown-item" href="#">Ajustes</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

@yield('content')
   <footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            Alciscorp
            <a href="https://www.invisionapp.com" target="_blank">Intranet</a>
            <a href="https://www.creative-tim.com" target="_blank">hecho con &#9829;</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/funciones.js') }}"></script>
  <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/now-ui-dashboard.min.js') }}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
