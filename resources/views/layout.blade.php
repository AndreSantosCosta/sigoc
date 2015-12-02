<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title', 'SIGOC')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('assets/css/styles.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">SIGOC</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset ('assets/img/logo_sigoc.png') }}" alt="sigoc">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="{{ route('militars.index') }}">Militar</a>
            </li>
            <li>
              <a href="{{ route('caos.index') }}">Cão</a>
            </li>
            <li>
              <a href="{{ route('binomios.index') }}">Binómio</a>
            </li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alterar Senha</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- DIV AMARELA -->
    <div id="barra-navbar">
    </div>
    <!-- FIM DIV AMARELA -->

<!-- Page Content -->
<div class="geral_container">
@yield('header')
@yield('content')
</div>
<!-- /.geral_container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>