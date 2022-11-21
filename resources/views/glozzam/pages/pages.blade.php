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



<link rel="stylesheet" href="/css/glo.css">
@include('glozzam.layout.navbar.nav')
@include('glozzam.layout.header.header')
@include('glozzam.layout.body.body')
@include('glozzam.layout.footer.footer')





<script src="{{ asset('bootstrap.min.js') }}"></script>
<script src="{{ asset('popper.min.js') }}"></script>
<script src="{{ asset('jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>



{{-- <script>
       $(document).ready(function() {  
        
     var $videoSrc;  
     $('.video-btn').click(function() {
       $videoSrc = $(this).data( "src" );      
     });
     
       
     
     $('#video_pop').on('shown.bs.modal', function (e) {
       
      $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" ); 
     })
     $('#video_pop').on('hide.bs.modal', function (e) {
    $("#video").attr('src',$videoSrc); 
     }) 

    //  $('.carousel').carousel({
    //  interval: 3000,
    // })
    
   
    }); 





</script> --}}


<script type="text/javascript">

    jQuery(document).ready(function( $ ) {
      $('.carousel').carousel({
      interval: 2000,
      pause: 'hover',
      
        });
        });

</script>


@endsection
