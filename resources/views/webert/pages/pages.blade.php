@extends('default')
@section('title')
webert
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/webert.css')  }}" rel="stylesheet">
{{-- <link rel="stylesheet" href="/css/miszuse/mis.css"> --}}


@endsection


{{-- @section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script>
        $('#year').text(new Date().getFullYear());

        $('.slider').slick({
        infinite: true,
        slideToShow: 1,
        slideToScroll: 1
    });
    </script>
@endsection --}}




@section('content')



<link rel="stylesheet" href="/css/webert.css">
@include('webert.layout.navbar')
@include('webert.layout.body')
