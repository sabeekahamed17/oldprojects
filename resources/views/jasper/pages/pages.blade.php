@extends('default')
@section('title')

Jasper - The Best AI Writing Assistant

@endsection

@section('style')

{{-- fav icon --}}

{{-- <link rel="icon" type="image/x-icon" href="/images/scssimg/favicon.webp"> --}}
<link rel="icon" type="image/x-icon" href="/images/scssimg/Jaspelogo.png">

{{-- <svg>
  <use xlink:href="svg/mizuxe-svg.svg#sprite-location"></use>
</svg> --}}

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{asset('css/jasper/homepage.css')  }}" rel="stylesheet">




@endsection

@section('content')




<link rel="stylesheet" href="/css/jasper/homepage.css">

@include('jasper.layouts.navbar.nav')
@include('jasper.layouts.header.header')
@include('jasper.layouts.body.body')
@include('jasper.layouts.body.gallery')
@include('jasper.layouts.body.cards')
@include('jasper.layouts.body.rating')
@include('jasper.layouts.body.gradient')
@include('jasper.layouts.footer.footer')





<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('aos.js') }}"></script>
<script src="{{ asset('core.js') }}"></script>
<script src="{{ asset('typed.min.js') }}"></script>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


<script>

  
  var typed = new Typed("#text-1", {
  strings: ["Social Media Posts.", "Blog Articles.", "Facebook Ads.", "Product Listing.", "SEO Content.", "Love Letters.", "Clever Headlines.", "Sales Emails.", "Video Scripts.", "Marketing Copy."],
  typeSpeed: 75,
  backSpeed: 50,
  backDelay: 800,
  startDelay: 00,
  loop: true,
  showCursor: false,
  cursorChar: "|",
  attr: null,
});

    AOS.init();


    
  </script>

@endsection


