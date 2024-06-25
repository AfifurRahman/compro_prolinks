<ul class="list-group" style="margin-top: 55px;">
	@if(!empty($privacy->status) && $privacy->status == 1)
    <li class="list-group-item"><a href="{{ route('privacy') }}">Privacy</a></li>
    @endif

    @if(!empty($term->status) && $term->status == 1)
    <li class="list-group-item"><a href="{{ route('term') }}">Term Of Us</a></li>
    @endif
</ul>