<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ENEZER-EDUCATION</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('rm-assets/img/apple-touch-icon.png')}}"  rel="stylesheet">

   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
</head>
<body>
    <header role="banner">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand absolute" href="{{url('/')}}"><img src="{{asset('images/official_logo.png')}}"height="50px" width="150px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#">Courses</a>
                        </li>



                    </ul>


                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->
@yield('content')
    <!-- Theme Style -->



    <script type="application/javascript">
        var BaseURL ="{{url('/')}}";
    </script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</body>
</html>
