@extends('layouts.app')

@push('header')
<style type="text/css">
body {
	background: white;
	transition: background-color 0.5s ease;
}

.frame {
	position: fixed;
	left: 0;
	top: 0;
	height: 100vh;
	width: 100%;
	display: none;
}

.frame:first-of-type {
	display: block;
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
<p>1</p>
@endcomponent
@component('components.frame', ['bg' => 'green'])
<p>2</p>
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