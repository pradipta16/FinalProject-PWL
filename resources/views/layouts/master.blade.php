<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemrograman Web Lanjut</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="width:100%" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Diary & Journal</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item> {{ Route::is('home') ? 'active' : '' }}">
             @can('home')
            <a class="navbar-brand" href="/home"><h6>Home</h6></a>
            @endcan
          </li>
                    
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
              @can('manage')
              <a class="nav-link" href="/manage">Manage Article</a>
              @endcan
          </li>
          <li class="nav-item">
              <li class="nav-item {{ Route::is('manageUser') ? 'active' : '' }}">
               @can('manage')
              <a class="nav-link" href="{{ url('./manageUser') }}">Manage User</a>
              @endcan
           </li>

          <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
               </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                 </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
           </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('section')
  @yield('content')
  

 <footer class="bg-dark">
    <div class="container ">
      <div class="row">
        <div class="col-lg col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li><h6 class="copyright text-muted">Proyek Akhir Mata Kuliah Pemrograman Web Lanjut</h6></li>
            <li><h6 class="copyright text-muted">Desember, 2020</h6></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
