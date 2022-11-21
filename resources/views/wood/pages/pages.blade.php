@extends('default')
@section('title')
WOOD
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/wood.css')  }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="/css/miszuse/mis.css"> --}}


@endsection

@section('content')




<link rel="stylesheet" href="/css/wood.css">
@include('wood.layouts.navbar.navbar')
@include('wood.layouts.header.header')
@include('wood.layouts.body.body')
@include('wood.layouts.footer.footer')




<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>

@endsection


