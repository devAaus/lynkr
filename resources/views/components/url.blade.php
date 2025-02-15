@props(['url'])

<p class="font-medium break-all">
    <strong class="font-semibold text-lg">{{ $slot }}: </strong>
    <br />
    {{ $url }}
</p>
