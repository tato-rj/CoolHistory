<div class="container-fluid w-100 h-100 p-5 text-white">
	<div class="text-center">
		<h1 class="font-weight-bold">{{$date}}</h1>
	</div>
	<div class="row flex-center timeline-view h-100">
		<div class="col-lg-4 col-md-5 col-sm-8 col-11 p-4 mb-6 bg-{{$bg ?? null}} frame-content">
			{{$text ?? null}}

			@if(!empty($media))
			<div class="mt-4">
				<button class="bg-transparent border-0 text-white open-media"><i class="far fa-images fa-lg"></i></button>
			</div>

			@include('components.modals.media')
			@endif

		</div>

	</div>
</div>