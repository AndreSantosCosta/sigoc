<?php /*<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html> */ ?>

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <?php /*<a class="navbar-brand" href="#">Project name</a>*/ ?>
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset ('assets/img/logo_sigoc.png') }}" alt="sigoc">
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
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


        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- DIV AMARELA -->
    <div id="barra-navbar">
       <!-- <img src="{{ asset ('assets/img/barra_nav.png') }}" alt="barra_nav"> -->
    </div>

@section('content')
    <!-- Header -->
    <div class="geral_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="" alt="">-->
                    <div class="intro-text">
                        <span class="name">BEM-VINDO</span>
                    </div>
                    <div class="sub-intro-text">
                        <!--<div class="sub-intro-text-left-color">
                        </div>-->
                        <img class="img-barra-left" src="{{ asset ('assets/img/barra_left_right.jpg') }}" alt="barra_left">
                        <span class="skills">Sistema Integrado de Gestão Operacional Cinotécnico</span>
                        <img class="img-barra-right" src="{{ asset ('assets/img/barra_left_right.jpg') }}" alt="barra_right">
                        <!--<div class="sub-intro-text-right-color">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@show

<?php /*
    <div class="container">


      <div class="starter-template">

        <img src="{{ asset ('assets/img/SIGOC-2.jpg') }}">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

      <hr>

    

    @yield('content')
 

    </div><!-- /.container -->
*/ ?>







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







