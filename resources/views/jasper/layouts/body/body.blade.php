
<section class="heading-1 text-center mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="name  text-white">Meet Jasper,</h3>
                <h1 class="content-1  text-white">The Future of Writing</h1>
                <div class="type-text">
                    <h1 id="text-1" class="gradient app mt-3">Marketing copy</h1>
                </div>
                <div class=" ">
                    <h5 class="paragraph mt-4 fixed d-flex">Artificial intelligence makes it fast & easy to create
                        content for your blog, social media, website, and more! Rated 5/5 stars in 3,000+ reviews.</h5>
                    <button type="button" class="btn btn-1 btn-lg mt-3">Get started &#8594;</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="video mt-5 d-flex">
    <div class="col-lg-12 mb-5">
        <div class="row">
            {{-- <div class="control-video"> --}}


            <div class="container video-demo">
                {{-- <video class="bg-video">
                <source src="{{asset('images/jasper/Jasper.mp4')}}" type="video/mp4">
                Your browser is not supported!
            </video> --}}



                <div class="bg-video d-flex" id="videoZoom">
                    <div class="video-content-1">
                        {{-- <video class="bg-video" width="100%" height="600">
                    <source src="{{asset('images/jasper/Jasper.mp4')}}" type="video/mp4">
                    Your browser is not supported!
                </video> --}}
                        <iframe width="100%" height="600" src="https://www.youtube-nocookie.com/embed/NwiqNn3RxQI?controls=0&amp;start=0?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="client-logo text-center">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="700">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-white text-center">Trusted by 50,000+ content
                        marketers at companies including...</div>
                    <div class="row">
                        <div class="col-lg-2  col-sm-2  mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client1.png') }}" alt="">
                        </div>
                        <div class="col-lg-2  col-sm-2 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client2.png') }}" alt="">
                        </div>
                        <div class="col-lg-2   col-sm-2  mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client3.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-sm-3 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client4.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-sm-3 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client5.png') }}" alt="">
                        </div>
                        <div class="col-lg-2 col-sm-2 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client6.png') }}" alt="">
                        </div>
                        <div class="col-lg-2 col-sm-2 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client7.png') }}" alt="">
                        </div>
                        <div class="col-lg-2 col-sm-2 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client8.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-sm-3 mt-5">
                            <img class="img-1" src="{{ asset('images/jasper/client9.png') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-sm-3 mt-5">
                            <img class="img-1 img-none" src="{{ asset('images/jasper/client10.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img class="mt-5 backimage" src="{{ asset('images/jasper/Backgroundline.png') }}" alt="" srcset="">
    </div>
</section>



<script>
    var videoZoom = document.getElementById("videoZoom");
    window.addEventListener('scroll', ()=> {
        let value = (window.scrollY / 3000) + 0.7
        console.log (value)
        if(value >= 1.01){
            if(value <= -1.01){
            videoZoom.style.transform = `scale(${value})`
        
        }else{
            videoZoom.style.transform='none'
        }
    }else{
    if(value <= -1.01)
    {
        videoZoom.style.transform='none'
    }else{
        videoZoom.style.transform = `scale(${value})`
    }
    }
});
</script>









