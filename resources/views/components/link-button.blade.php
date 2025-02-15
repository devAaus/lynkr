@props(['href' => '#', 'targetBlank' => false])

<a
    href="{{ $href }}"
    @if ($targetBlank) target="_blank" 
    rel="noopener noreferrer" @endif>

    <x-primary-button>
        {{ $slot }}
    </x-primary-button>
</a>
