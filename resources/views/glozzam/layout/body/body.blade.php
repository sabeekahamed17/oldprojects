<section id="showcase">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carouselhome">
      <div class="carousel-item carouselitem active">
        <img class="d-block w-100" src="{{ asset ('images/iphone1.avif') }}" alt="First slide">
        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                <h1 class="display-3">Heading 1</h1>
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil unde
                    eveniet voluptatum ipsa itaque, aperiam maxime possimus cupiditate ullam obcaecati. Nesciunt
                    neque voluptatum consequatur optio quos pariatur sed eum consequuntur?</p>
                <a href="#" class="btn btn-info btn-lg">Learn more</a>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/iphone2.avif') }}" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block text-center mb-5">
            <h1 class="display-3">Heading 2</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil unde
                eveniet voluptatum ipsa itaque, aperiam maxime possimus cupiditate ullam obcaecati. Nesciunt
                neque voluptatum consequatur optio quos pariatur sed eum consequuntur?</p>
            <a href="#" class="btn btn-warning btn-lg">Sign Up Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset ('images/iphone3.avif') }}" alt="Third slide">
        <div class="carousel-caption d-none d-block text-left mb-5">
            <h1 class="display-3">Heading 3</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil unde
                eveniet voluptatum ipsa itaque, aperiam maxime possimus cupiditate ullam obcaecati. Nesciunt
                neque voluptatum consequatur optio quos pariatur sed eum consequuntur?</p>
            <a href="#" class="btn btn-success btn-lg">Subscribe</a>
        {{-- </div> --}}
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

{{-- icons --}}

<section id="home-icons" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 text-center">
                <svg class="icon">
                    <use xlink:href="svg/mizuxe-svg.svg#sprite-history"></use>
                </svg>
                <h3>Turning Gears</h3>
                <p class="lead">Lorem ipsum quam cum neque at cupiditate expedita nobis inventore.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <svg class="icon">
                    <use xlink:href="svg/mizuxe-svg.svg#sprite-home_list"></use>
                </svg>
                <h3>Sending Data</h3>
                <p class="lead">Lorem ipsum quam cum neque at cupiditate expedita nobis inventore.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <svg class="icon">
                    <use xlink:href="svg/mizuxe-svg.svg#sprite-home_aboutus"></use>
                </svg>
                <h3>Marking Money</h3>
                <p class="lead">Lorem ipsum quam cum neque at cupiditate expedita nobis inventore.</p>
            </div>
        </div>
    </div>
</section>

{{-- back heading --}}

<section id="home-heading" class="p-5">
    <div class="dark-overlay">
        <div class="row">
            <div class="col">
                <div class="container pt-5">
                    <h1>Are you Ready To  Started</h1>
                    <p class="d-none-sm d-block lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia totam aspernatur quo maxime nemo eius qui blanditiis tempore necessitatibus laborum, impedit odio sint porro vel tempora itaque eum saepe ipsa!</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- info --}}


<section class="py-3" id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h3>Loremorem in scope</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perferendis eaque porro! Harum veniam culpa doloribus tempora at, ipsam exercitationem nesciunt natus porro odit, sunt esse optio minima facilis fugit!</p>
                <button class="btn btn-outline-danger btn-lg">Read More</button>
            </div>
            <div class="col-md-6 mt-5">
                <img class="image-fluid h-100" src="{{ asset ('images/iphone5.avif') }}" alt="First slide">
            </div>
        </div>
    </div>
</section> 

{{-- video --}}


<section id="video-play">
    <div class="dark-overlay">
        <div class="row">
            <div class="col">
                <div class="container p-5">
                        <a href="#" class="video-btn" data-toggle="modal"  data-target="#video_pop">
                        <svg class="icon">
                            <use xlink:href="svg/mizuxe-svg.svg#sprite-play-button"></use>
                        </svg>
                        </a>
                        <!-- POPUP -->
                         <div class="modal fade" id="video_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-body">        
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                           </button>        
                                           <!-- 16:9 aspect ratio -->
                                           <div class="embed-responsive embed-responsive-16by9">
                                             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XKfgdkcIUxw" id="video"  allowscriptaccess="always"></iframe>
                                           </div>                
                                     </div>        
                                   </div>
                                 </div>
                           </div>
                    
                    <h1>See What We Do</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- photo gallery--}}

<section id="gallery" class="py-5">
    <div class="container">
        <h1 class="text-center">Photo Gallery</h1>
        <p class="text-center">Check out our pages</p>
        <div class="row mb-4">
            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/565x565/?camera" data-toggle="lightbox" data-gallery="img-gallery" data-height="565" data-width="565">
                <img src="https://source.unsplash.com/random/565x565/?camera" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/561x561/?building" data-toggle="lightbox" data-gallery="img-gallery" data-height="561" data-width="560">
                <img src="https://source.unsplash.com/random/561x561/?building" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/656x656/?girls" data-toggle="lightbox" data-gallery="img-gallery" data-height="56" data-width="560">
                <img src="https://source.unsplash.com/random/656x656/?girls" alt="" class="img-fluid">
                </a>
            </div>
            
            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/560x560/?baby" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                <img src="https://source.unsplash.com/random/560x560/?baby" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/660x660/?parkor" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                <img src="https://source.unsplash.com/random/660x660/?parkor" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4 mt-3">
                <a href="https://source.unsplash.com/random/650x650/?cricket" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                <img src="https://source.unsplash.com/random/564x564/?cricket" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>


<section class="mt-5 text-center bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h2>Sign Up For Our Newsletter</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, rerum voluptates earum ipsam, magni molestiae.</p>
                <form class="form-inline text-centre justify-content-center">
                    <input class="form-control mr-2 mt-3" type="email" name="email" placeholder="User Name" id="">
                    <input class="form-control mr-2 mt-3" type="name" name="email" placeholder="Email" id="">
                    <a href="#" class="btn btn-warning mr-2 mt-3">SUBMIT</a>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- video modal --}}

{{-- <div class="modal fade" id="videomodel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <iframe src="" frameborder="0" height="350px" width="100%" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div> --}}




