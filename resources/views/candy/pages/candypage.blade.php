@extends('default')
@section('title')
candy
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/candy.css')  }}" rel="stylesheet">


@endsection

@section('content')


<link rel="stylesheet" href="/css/pattern/pattern.css">
@include('candy.layout.navbar.candynav')
@include('candy.layout.header.candyh')
@include('candy.layout.body.candyb')




<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>


@endsection
