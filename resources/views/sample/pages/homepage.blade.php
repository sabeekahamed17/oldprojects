@extends('default')
@section('title')
pattern
@endsection

@section('style')


<link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{asset('css/style.css')  }}" rel="stylesheet">

@endsection

@section('content')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="/css/pattern/pattern.css">
@include('pattern.layout.navbar.nav')
@include('pattern.layout.header.header')
@include('pattern.layout.body.body')



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
