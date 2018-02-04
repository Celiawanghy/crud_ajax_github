<!doctype html>
<html lang="{{ app()->getLocale()}}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en, fr">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD with Ajax</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Custom css -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

    </head>
    
    <body>

        <nav class="navbar navbar-expand-sm bg-white justify-content-center">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">ADD INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="{{url('/listing')}}">LISTING PAGE</a>
            </li>
          </ul>
        </nav> 

        <div class="container">
            
            @yield('content')
            
        </div>
        
        <!-- Custom JS -->
        <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>     

    </body>
</html>