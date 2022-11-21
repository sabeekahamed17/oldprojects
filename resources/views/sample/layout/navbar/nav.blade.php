<nav class="navbar bg-dark navbar-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">PATTERN</a>
      </div>

  </nav>

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
