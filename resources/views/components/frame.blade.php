<section class="frame bg-{{$bg ?? null}}" style="display={{! empty($bg) ? 'none' : 'block'}}">
	{{$slot}}
</section>