@if(!isset($show) || $show)
    <span class="badge badge-{{ $type ?? 'success' }}">
        {{$message}}
    </span>
@endif
