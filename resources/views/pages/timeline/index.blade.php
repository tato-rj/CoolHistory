@extends('layouts.app')

@push('header')
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<style type="text/css">
body {
	font-family: 'Nunito', sans-serif;
}

button:focus {outline:0;}

h1 {
	font-size: 3.25rem;
}

.tooltip {
	margin-right: 4px;
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

.timeline-view {
	font-size: 1.4em;
	position: relative;
	text-align: center;
}

p {
	font-size: 1.4em;
}

.absolute-bottom {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
}

.fixed-right {
	position: fixed;
	right: 0;
	top: 0;
	height: 100vh;
}

.carousel-item iframe {
	height: 100%;
	width: 80%;
}

.carousel-caption {
	width: 100%;
	left: 0;
	bottom: 0;
	padding-bottom: 52px;
	background: rgba(0,0,0,0.5);
}

.carousel-caption p {
	width: 50%;
	margin: 0 auto;
	font-size: .75em;
}

#nav-buttons button {
    background: transparent;
    border: none;
    opacity: .3;
    transform: scale(.8);
    transition: .2s;
}

#nav-buttons button:hover {
	transform: scale(1.15);
	opacity: 1;
}

#nav-buttons button.active {
	opacity: 1;
	transform: scale(1.15);
}

#nav-buttons button:not(:last-of-type) {
	margin-bottom: 8px;
}

.nav-light button {
	color: white !important;
}

.hamburger-light, .hamburger-light:before, .hamburger-light:after {
	background: white !important;
}

.hamburger-active, .hamburger-active:before, .hamburger-active:after {
	background: black !important;
}
</style>
@endpush

@section('content')
	<div class="fixed-right nav" style="z-index: 1000">
		<div id="nav-buttons" class="d-flex flex-center flex-column h-100 mr-2"></div>
	</div>

	@component('components.timeline.cover')
	<div class="container h-100" id="page-title">
		<div class="row flex-center h-100">
			<div class="text-center col-10 col-xs-8">
				<h1 class="font-weight-bold animated">88 keys</h1>
			</div>
		</div>
		<div class="absolute-bottom text-center">
			<h3 class="mb-4"><i class="fas fa-arrow-down fa-lg"></i></h3>
		</div>
	</div>
	@endcomponent

	@include('components.timeline.frame', [
		'bg' => 'blue',
		'date' => 1720, 
		'text' => 'Bartolomeo Cristofori introduced the first hammer-action pianoforte, and is credited by many as the “inventor” of the piano',
		'media' => [
			['url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467363/main-image', 'label' => 'Cristofori\'s piano', 'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'],
			['url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467385/main-image', 'label' => 'Cristofori\'s piano', 'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'],
			['url' => 'https://www.youtube.com/embed/A2WdjyKQ57A'],
			['url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467323/main-image', 'label' => 'Cristofori\'s piano', 'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'],
			['url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467325/main-image', 'label' => 'Cristofori\'s piano', 'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.']
			]])

	@include('components.timeline.frame', [
		'bg' => 'teal',
		'date' => 1780, 
		'text' => 'The Stein and Stein-Streicher piano hammer changes improved the tone of grand pianos and were preferred by many contemporary composers'])


	@include('components.timeline.frame', [
		'bg' => 'green',
		'date' => 1811, 
		'text' => 'Several European manufacturers introduced upright pianos. Wornum’s upright became popular for its improved sound quality from others'])

	@include('components.timeline.frame', [
		'bg' => 'orange',
		'date' => 1855, 
		'text' => 'Steinway & Sons introduced the first square piano with a new scale that revolutionized the sound quality and was adopted by all future manufacturers'])

	@include('components.timeline.frame', [
		'bg' => 'purple',
		'date' => 1880, 
		'text' => 'The square piano was officially “extinct” in both Europe and America. Uprights were the go-to space-saving pianos for the industrialization of urban cities'])

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
	$('.addthis-smartlayers, .nav').toggle();
	$('#media-modal').toggle();
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
let $title = $('#page-title h1');
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

	$nav.append('<button class="' + state + '" id="button-' + frameId + '" data-target="' + height + '" class="nav-button" type="button" data-toggle="tooltip" data-placement="left" title="' + $frame.attr('id') + '"><i class="far fa-circle fa-lg"></i></button>');

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