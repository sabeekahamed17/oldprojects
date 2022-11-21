@extends('default')
@section('title')
NEXTER


@endsection

@section('style')

{{-- fav icon --}}

<link rel="icon" type="image/x-icon" href="/images/nexter/favicon.png">


{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
<link href="{{asset('css/nexter/homepage.css')  }}" rel="stylesheet">




@endsection

@section('content')




<link rel="stylesheet" href="/css/nexter/homepage.css">
@include('nexter.layouts.navbar.nav')
@include('nexter.layouts.header.header')
@include('nexter.layouts.body.body')
@include('nexter.layouts.body.service')
@include('nexter.layouts.body.porfolio')
@include('nexter.layouts.body.pricing')
@include('nexter.layouts.body.team')
@include('nexter.layouts.body.contact')
@include('nexter.layouts.footer.footer')





<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script>
    AOS.init();
  </script>

@endsection


