<div class="robotic">
<section class="heading-1 text-center mb-5">
    <div class="container">
        <div class="row">
             <div class="col-lg-12">
                    <h4 class="name text-color">Who is Jasper?</h4>
                    <h1 class="text-white">Artificial intelligence trained to write <br><span class="text-color">original, creative content</span></h1>
                        {{-- <h1 class="text-color">original, creative content</h1> --}}
                    <div class="section-3 ">
                    <h5 class=" text-white paragraph mt-4 mb-5 fixed">We consulted with the world’s best SEO and Direct Response Marketing experts to teach Jasper how to write blog articles, social media posts, website copy, and more...</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="robotimages d-flex mt-5">
                {{-- <img class="topicons" src="{{asset('images/jasper/toplogos.png')}}" alt=""> --}}
                
                <img class="robot mt-5" src="{{asset('images/jasper/robot.png')}}" alt="">
                {{-- <div data-aos="fade-up" data-aos-duration="3000"> --}}
                    <img id="socialAll" class="topicons"  src="{{asset('images/jasper/toplogos.png')}}" alt="">
                
            </div>
            </div>
            
        </div>
    </div>
</div>
</section>


 <script>
    var socialAll = document.getElementById("socialAll");
    window.addEventListener('scroll', ()=> {
        let value = (window.scrollY / 1700) - 0.7
        console.log (value);
        if(value >= 1.01){
            if(value <= -1.01){
            socialAll.style.transform = `scale(${value})`
        
        }else{
            socialAll.style.transform='none'
        }
    }else{
    if(value <= -1.01)
    {
        socialAll.style.transform='none'
    }else{
        socialAll.style.transform = `scale(${value})`
    }
    }
});
</script> 
