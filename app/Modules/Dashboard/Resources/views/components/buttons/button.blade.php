@props([
'type' => 'light',
'href' => '#',
'size' => 'sm',
'block' => false,
])

@php
$classes = "btn btn-$size fw-bold btn-$type";
@endphp


<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>