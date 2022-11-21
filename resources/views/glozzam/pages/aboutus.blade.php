@extends('default')
@section('title')
GLOZZAM
@endsection

@section('style')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/glo.css')  }}" rel="stylesheet">
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



{{-- <link rel="stylesheet" href="/css/glo.css"> --}}
@include('glozzam.layout.aboutus.aboutnav')
@include('glozzam.layout.aboutus.abtbody')
@include('glozzam.layout.footer.footer')




<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>

@endsection


