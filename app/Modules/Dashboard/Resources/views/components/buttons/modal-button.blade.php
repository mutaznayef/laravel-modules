@props([
'type' => 'primary', // Bootstrap color: primary, danger, etc.
'size' => 'sm', // sm, lg, etc.
'target', // Modal ID to open (required)
'href' => '#',
'bold' => true,
])

@php
$classes = "btn btn-$size btn-$type";
if ($bold) $classes .= " fw-bold";
@endphp

<a href="{{ $href }}" class="{{ $classes }}" data-bs-toggle="modal" data-bs-target="#{{ $target }}" {{ $attributes }}>
    {{ $slot }}
</a>