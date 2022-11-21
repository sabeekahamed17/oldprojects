@extends('default')
@section('title')
DAY


@endsection

@section('style')

{{-- fav icon --}}

<link rel="icon" type="image/x-icon" href="/images/scssimg/fav.jpg">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{asset('css/day/homepage.css')  }}" rel="stylesheet">




@endsection

@section('content')




<link rel="stylesheet" href="/css/day/homepage.css">
@include('day.layouts.navbar.nav')
@include('day.layouts.header.header')
@include('day.layouts.body.body')
@include('day.layouts.body.service')
@include('day.layouts.body.porfolio')
@include('day.layouts.body.pricing')
@include('day.layouts.body.team')
@include('day.layouts.body.contact')
@include('day.layouts.footer.footer')





<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script>
    AOS.init();
  </script>

@endsection


