<section id="frame-{{$frame->id}}" data-title="{{$frame->title}}" class="frame frame-view bg-{{$frame->background}}">
	<div class="container-fluid w-100 h-100 p-5 text-white">
		<div class="text-center mb-3">
			<h1 class="font-weight-bold m-0">{{$frame->title}}</h1>
			<p class="m-0">{{$frame->subtitle}}</p>
		</div>
		<div class="row flex-center timeline-view h-100">
			<div class="col-lg-4 col-md-5 col-sm-8 col-11 p-4 bg-{{$frame->background}} frame-content" style="margin-bottom: 8rem;">
				{!! $frame->content !!}

				@if($frame->media()->exists())
				<div class="mt-4">
					<button class="bg-transparent border-0 text-white open-media" data-target="#media-{{$frame->id}}"><i class="far fa-images fa-lg"></i></button>
				</div>

				@include('components.modals.media')
				@endif

			</div>

		</div>
	</div>
</section>