@props(['item'])

@if($item->url)
<div class="menu-item">
    <a class="menu-link" href="{{ $item->url }}">
        @if(!empty($item->icon_html))
        <span class="menu-icon">{!! $item->icon_html !!}</span>
        @endif
        <span class="menu-title">{{ $item->title }}</span>
    </a>
</div>
@else
<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
    class="menu-item menu-lg-down-accordion">
    <span class="menu-link">
        @if(!empty($item->icon_html))
        <span class="menu-icon">{!! $item->icon_html !!}</span>
        @endif
        <span class="menu-title">{{ $item->title }}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
        @foreach ($item->children as $child)
        @include('Dashboard::/components.header.menu-item', ['item' => $child])
        @endforeach
    </div>
</div>
@endif