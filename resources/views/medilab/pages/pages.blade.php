@extends('default')
@section('title')
MEDILAB
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/medilab.css')  }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="/css/miszuse/mis.css"> --}}


@endsection

@section('content')




<link rel="stylesheet" href="/css/medilab.css">
@include('medilab.layouts.navbar.navbar')
@include('medilab.layouts.header.header')
@include('medilab.layouts.body.body')
@include('medilab.layouts.footer.footer')





<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('bootstrap.min.js') }}"></script>


@endsection


