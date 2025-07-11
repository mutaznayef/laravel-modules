@props(['menu'])

<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            {!! $menu->icon_html !!} </span>
        <span class="menu-title">{{$menu->title}}</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
        <!--begin:Menu item-->
        @foreach ($menu->children as $children )
        <x-Dashboard::sidebar.item :item="$children" />
        @endforeach
    </div>
</div>