<section id="{{$frame->date}}" class="frame frame-view bg-{{$frame->background}}">
	<div class="container-fluid w-100 h-100 p-5 text-white">
		<div class="text-center">
			<h1 class="font-weight-bold">{{$frame->date}}</h1>
		</div>
		<div class="row flex-center timeline-view h-100">
			<div class="col-lg-4 col-md-5 col-sm-8 col-11 p-4 mb-6 bg-{{$frame->background}} frame-content">
				{{$frame->content}}

				@if($frame->media()->exists())
				<div class="mt-4">
					<button class="bg-transparent border-0 text-white open-media" data-target="#media-{{$frame->date}}"><i class="far fa-images fa-lg"></i></button>
				</div>

				@include('components.modals.media')
				@endif

			</div>

		</div>
	</div>
</section>