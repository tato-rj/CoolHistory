<div id="media-modal" class="position-fixed w-100 h-100vh" style="display: none; background: rgba(0,0,0,0.8); top: 0;
left: 0">
	<button class="close-media text-white p-4 absolute-top-right bg-transparent border-0 z-10" style="width:80px;"><img class="w-100" src="{{asset('images/icons/close.svg')}}"></button>
  
  <div class="h-100">
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-interval="false" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner h-100 text-center">
        <div class="carousel-item h-100 active">
          <img class="d-block mx-auto h-100" src="https://picsum.photos/1600/1600/?random" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item carousel-video h-100">
          <iframe src="https://www.youtube.com/embed/qN0FiiGMYP0?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="carousel-item h-100">
          <img class="d-block mx-auto h-100" src="https://picsum.photos/1600/1200/?random" alt="Third slide">
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
  </div>
</div>