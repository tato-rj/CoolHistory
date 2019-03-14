@extends('layouts.app')

@push('header')
<style type="text/css">

</style>
@endpush

@section('content')
	<div class="fixed-right nav" style="z-index: 1000">
		<div id="nav-buttons" class="d-flex flex-center flex-column h-100 mr-2"></div>
	</div>

	@include('components.timeline.cover')

	@foreach($timeline->frames as $frame)
		@include('components.timeline.frame')	
	@endforeach

@endsection

@push('scripts')

<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c872ce214693180"></script>

<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip({trigger: 'hover',})
});

$('.hamburger').on('click', function() {
	$(this).toggleClass('is-active');
	$('#menu').fadeToggle();
	$('body').toggleClass('overflow-hidden');
	$('.hamburger-inner').toggleClass('hamburger-active');
});

// GO TO FRAME ON NAV CLICK
$(document).on('click', '#nav-buttons button', function(event) {
	let $button = $(this);
    let target = $button.attr('data-target');

	$('html, body').animate({
		scrollTop: parseInt(target) + 10
	}, 500, 'linear');
});

$('button.open-media, button.close-media').on('click', function() {
	let target = $(this).attr('data-target');
	console.log(target);
	$(target).toggle();
	$('.addthis-smartlayers, .nav').toggle();
	$('body').toggleClass('overflow-hidden');
	$('.hamburger').toggle();

	stopVideo(document.getElementsByClassName("carousel-item"));
});

$('.carousel').on('slide.bs.carousel', function () {
	stopVideo(document.getElementsByClassName("carousel-item"));
})

var stopVideo = function ( elements ) {

	for (let element of elements) {
		let iframe = element.querySelector( 'iframe');
		let video = element.querySelector( 'video' );
		if ( iframe ) {
			let iframeSrc = iframe.src;
			iframe.src = iframeSrc;
		}
		if ( video ) {
			video.pause();
		}
	}

};
</script>

<script type="text/javascript">
let $body = $('body');
let $frames = $('.frame');
let $nav = $('#nav-buttons');
let $title = $('#page-title > div:first-of-type');
let $arrow = $('#page-title .fa-arrow-down');
let windowHeight = $(window).height();
let position = $(window).scrollTop();
let frameHeight = $frames.outerHeight() * 2;
let height = 0;

// CREATE FRAMES
$frames.each(function() {
	let $frame = $(this);
	let frameId = $frame.attr('id');
	let state = $frame.index() == 1 ? 'active' : null;

	$frame.attr('data-start', height);
	$frame.attr('data-end', height + frameHeight);

	$nav.append('<button class="' + state + '" id="button-' + frameId + '" data-target="' + height + '" class="nav-button" type="button" data-toggle="tooltip" data-placement="left" title="' + $frame.attr('data-title') + '"><i class="far fa-circle fa-lg"></i></button>');

	height += frameHeight;
});

// SET TOTAL PAGE HEIGHT
$body.height(height + $frames.outerHeight());

// SCROLL ANIMATION
$(window).scroll(function() {
	let scroll = $(this).scrollTop();

	if (scroll > 0) {
		$arrow.fadeOut();
	} else {
		$arrow.fadeIn();
	}

	if (scroll > windowHeight) {
		if (scroll > position) {
			$title.removeClass('fadeInDown').addClass('fadeOutUp');
		} else {
			$title.addClass('fadeInDown').removeClass('fadeOutUp');
		}
	}

	$frames.each(function() {
		let $frame = $(this);
		let start = $frame.attr('data-start');
		let end = $frame.attr('data-end');

		if (scroll >= start && scroll < end) {
			let index = $frame.index() - 1;

			$frames.not(this).fadeOut('slow');
			$frame.fadeIn('slow');
			$('#button-' + $frame.attr('id')).addClass('active').siblings().removeClass('active');

			if ($frame.hasClass('frame-view')) {
				$nav.addClass('nav-light').removeClass('nav-dark');
				$('.hamburger-inner').addClass('hamburger-light');
			} else {
				$nav.addClass('nav-dark').removeClass('nav-light');
				$('.hamburger-inner').removeClass('hamburger-light');
			}
		}
	});

	position = scroll;
});

</script>
@endpush