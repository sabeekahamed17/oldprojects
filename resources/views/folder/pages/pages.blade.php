@extends('default')
@section('title')
WOOD
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/basic/homepage.css')  }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="/css/miszuse/mis.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">



@endsection

@section('content')




<link rel="stylesheet" href="/css/basic/homepage.css">
@include('folder.layouts.sample')





<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

@endsection
