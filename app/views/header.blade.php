<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="author" content="Aniko Hegedus">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>POMS exercice</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet">    
    <!-- Custom CSS -->  
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <!--<script src="{{ asset('/js/jquery.min.js') }}"></script>-->
    <script src="{{ asset('/javascript/install.js') }}"></script>  
  </head>

<body id="page-top">
    <nav class="navbar navbar-default">
        <div id="header">
            <div class="header-text">
                <h1>POMS exercise</h1>
             </div>
        </div>
    </nav>
</body>  
</html>