<p class="text-muted">
    {{ empty(trim($slot)) ? 'Added ' : $slot}} {{ $date->diffForHumans() }}
    {{ $name !== null ? 'by ' : ''}} {{ $name }}
</p>
