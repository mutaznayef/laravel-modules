@props(['item'])
<div class="menu-item">
    <a class="menu-link" href="{{ $item->url }}">
        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
        <span class="menu-title">{{ $item->title }}</span>
    </a>
</div>