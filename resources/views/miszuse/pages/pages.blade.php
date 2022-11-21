@extends('default')
@section('title')
MISZUSE
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/mis.css')  }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="/css/miszuse/mis.css"> --}}


@endsection

@section('content')




<link rel="stylesheet" href="/css/mis.css">
@include('miszuse.layout.navbar.nav')
@include('miszuse.layout.header.header')
@include('miszuse.layout.body.body')
@include('miszuse.layout.footer.footer')




<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>

@endsection


