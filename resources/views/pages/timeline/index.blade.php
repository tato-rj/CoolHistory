@extends('layouts.app')

@push('header')
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<style type="text/css">
body {
	font-family: 'Nunito', sans-serif;
}

h1 {
	font-size: 3.25rem;
}

.timeline-view::before {
	content: '';
	width: 1px;
	background-color: white;
	height: 100vh;
	position: absolute;
	top: 0;
	left: 50%;
}
</style>
@endpush

@section('content')

	@component('components.frame')
		<div class="d-flex align-items-end justify-content-center h-100">
			<h3 class="mb-4"><i class="fas fa-arrow-down fa-lg"></i></h3>
		</div>
	@endcomponent

	@component('components.frame', ['bg' => 'blue'])
		@include('components.timeline.body', ['date' => 1900])
	@endcomponent

	@component('components.frame', ['bg' => 'teal'])
		@include('components.timeline.body', ['date' => 1920])
	@endcomponent

	@component('components.frame', ['bg' => 'green'])
		@include('components.timeline.body', ['date' => 1940])
	@endcomponent

	@component('components.frame', ['bg' => 'orange'])
		@include('components.timeline.body', ['date' => 1960])
	@endcomponent

	@component('components.frame', ['bg' => 'purple'])
		@include('components.timeline.body', ['date' => 1980])
	@endcomponent

@endsection

@push('scripts')
<script type="text/javascript">
let $body = $('body');
let frameHeight = $('.frame').outerHeight() * 2;
let height = 0;

$('.frame').each(function() {
	let $frame = $(this);
	$frame.attr('data-start', height);
	$frame.attr('data-end', height + frameHeight);

	height += frameHeight;
});

$body.height(height + $('.frame').outerHeight());

$(window).scroll(function() {
	let scroll = $(this).scrollTop();
	let $currentFrame = $('.frame:visible');
	let $body = $('body');

	$('.frame').each(function() {
		let $frame = $(this);

		if (scroll >= $frame.attr('data-start') && scroll < $frame.attr('data-end')) {
			$('.frame').not(this).fadeOut('slow');
			$frame.fadeIn('slow');
		}
	});
});

</script>
@endpush