@extends('default')
@section('title')
NATOURS
@endsection

@section('style')

{{-- fav icon --}}

<link rel="icon" type="image/x-icon" href="/images/natours/favicon.png">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{asset('css/natours/homepage.css')  }}" rel="stylesheet">




@endsection

@section('content')




<link rel="stylesheet" href="/css/natours/homepage.css">
@include('natours.layout.navbar.navbar')
@include('natours.layout.header.header')
@include('natours.layout.body.body')
@include('natours.layout.body.book')
@include('natours.layout.footer.footer')



<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

@endsection


