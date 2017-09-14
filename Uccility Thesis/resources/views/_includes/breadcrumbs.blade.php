@if ($breadcrumbs)
<ol class="breadcrumb-arrow">
    @foreach ($breadcrumbs as $breadcrumb)
        @if (!$breadcrumb->last)
            <li><a href="{{ $breadcrumb->url }}"><span>{{ $breadcrumb->title }}</span></a> </li>
        @else
            <li><a class="active"><span>{{ $breadcrumb->title }}</span></a></li>
        @endif
    @endforeach
</ol>
@endif
