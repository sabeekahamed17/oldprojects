<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PROJECTS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
      <style>
        html, body {
    background-color: #fff;
    color: #000000;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
    background-image: url({{ asset ('images/misimages/asdf.jpg') }});
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
    color: rgb(199, 243, 6);
}

/* .links > a {
    color: #000000;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
 } */

.m-b-md {
    margin-bottom: 30px;
}
      </style>
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
                <!-- <div class="top-right links">
                    
                        {{-- <a href="{{ url('/home') }}">Home</a>
                    
                        <a href="{{ route('login') }}">Login</a>

                    
                            <a href="{{ route('register') }}">Register</a> --}}
                        
                    
                </div> -->
            

            <div class="content">
                <div class="title m-b-md">
                    <h1 class="display-2">NETAXIS IT SOLUTION (P) LTD</h1>
                </div>

                <div class="links">
                    <!-- <a class="btn  btn-warning" href="">TASKS</a> -->
                    <a class="btn btn-danger btn-lg" href="../assignment/2index.html">DAILY TASKS</a>
                    <a class="btn btn-warning btn-lg" href="../assessment/assess.html">ASSESSMENTS</a>
                    <!-- <a class="btn btn-success" href="../subdomain/3index.html">REPORTS</a>? -->
                    <!-- <a href=""><button class="btn-lg btn-info">ghjfyigf</button></a> -->
                </div>
            </div>
        </div>
    </body>
</html>