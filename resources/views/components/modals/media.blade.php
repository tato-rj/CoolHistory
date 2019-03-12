<div id="media-modal" class="position-fixed w-100 h-100vh" style="display: none; background: black; top: 0;
left: 0">
	<button class="close-media text-white p-4 absolute-top-right bg-transparent border-0 z-10" style="width:80px;"><img class="w-100" src="{{asset('images/icons/close.svg')}}"></button>
  
  <div class="h-100">
    <div id="media-indicators" class="carousel slide h-100" data-interval="false" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($media as $item)
        <li data-target="#media-indicators" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : null}}"></li>
        @endforeach
      </ol>
      <div class="carousel-inner h-100 text-center">
        @foreach($media as $item)
        <div class="carousel-item h-100 {{$loop->first ? 'active' : null}}">
          @if(array_key_exists('label', $item))
            <img class="d-block mx-auto h-100" src="{{$item['url']}}">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="font-weight-bold">{{$item['label']}}</h5>
              <p>{{$item['description']}}</p>
            </div>
          @else
            <iframe src="{{$item['url']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          @endif
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#media-indicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#media-indicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>