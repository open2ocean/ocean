<!DOCTYPE html>
<html>
<head>
    <title>404 Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <!-- Jquery & Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
</head>
<body>
    

    <div class="container">
        <div class="card">
            <div class="card-content p-5">
                <h1>Oops, Sorry</h1>
                <h3>No Business Found</h3>
                <a class="btn btn-primary rounded-pill" href="{{url('/dashboard')}}">Go Back To Home</a>
            </div>    
        </div>
    </div>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>