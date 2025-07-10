@props([
'title',
'trigger' => 'click',
'placement' => null,
'icon' => null,
'show' => false,

])


@php
$isDropdown = $placement !== null;
$wrapperClass = $isDropdown
? 'menu-item menu-lg-down-accordion menu-sub-lg-down-indention'
: 'menu-item menu-accordion';

$submenuClass = $isDropdown
? 'menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto'
: 'menu-sub menu-sub-accordion menu-active-bg';

if ($show) {
$submenuClass .= ' show';
}
@endphp

<div class="{{ $wrapperClass }}" data-kt-menu-trigger="{{ $trigger }}" @if($placement)
    data-kt-menu-placement="{{ $placement }}" @endif>
    <span class="menu-link">
        <span class="menu-icon">
            {!! $icon !!}
        </span>
        <span class="menu-title">{{ $title }}</span>
        <span class="menu-arrow"></span>
    </span>

    <div class="{{ $submenuClass }}">
        {{ $slot }}
    </div>
</div>