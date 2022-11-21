<html>
    <head>
        @yield('style')
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('fevicon')
        <title>@yield('title')</title>

    </head>
    <body>
        @yield('content')
        @yield('script')


       

        <script src="{{ asset('jquery-3.6.0.min.js') }}"></script> 
        <script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap.min.js') }}"></script>
    </body>
</html>








{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
{{-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}