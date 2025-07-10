@props([
'title',
'href' => '#',
'active' => false,
])

@php
$linkClass = 'menu-link' . ($active ? ' active' : '');
@endphp

<div class="menu-item">
    <a class="{{ $linkClass }} href=" {{ $href }}">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">{{ $title }}</span>
    </a>
</div>