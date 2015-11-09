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
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset ('assets/img/logo_sigoc.png') }}" alt="sigoc">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('militars.index') }}">Militar</a></li>
                    <li><a href="{{ route('caos.index') }}">Cão</a></li>
                    <li><a href="{{ route('binomios.index') }}">Binómio</a></li>
                    <li><a href="{{ route('provas.index') }}">Provas</a></li>
                    
                </ul>
                 
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
       @yield('header')
        @yield('content')
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

</body>
</html>
