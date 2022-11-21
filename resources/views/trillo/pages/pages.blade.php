@extends('default')
@section('title')
TRILLO
@endsection

@section('style')

{{-- fav icon --}}

<link rel="icon" type="image/x-icon" href="/images/trillo/favicon.png">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{asset('css/trillo/homepage.css')  }}" rel="stylesheet">




@endsection

@section('content')




<link rel="stylesheet" href="/css/trillo/homepage.css">
@include('trillo.layout.navbar.navbar')
@include('trillo.layout.header.header')
@include('trillo.layout.body.body')
{{-- @include('trillo.layout.body.book') --}}
@include('trillo.layout.footer.footer')



<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

@endsection


