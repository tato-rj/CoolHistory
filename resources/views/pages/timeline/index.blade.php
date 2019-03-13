@extends('layouts.app')

@push('header')
<style type="text/css">

</style>
@endpush

@section('content')
	<div class="fixed-right nav" style="z-index: 1000">
		<div id="nav-buttons" class="d-flex flex-center flex-column h-100 mr-2"></div>
	</div>

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

</script>
@endpush