@props(['menu'])
<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-icon">
            {!! $menu->icon_html !!}
        </span>
        <span class="menu-title">{{ $menu->title }}</span>
        @if ($menu->children->isNotEmpty())
        <span class="menu-arrow"></span>
        @endif
    </span>
    <!--end:Menu link-->

    @if ($menu->children->isNotEmpty())
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion ">
        @php
        $visibleCount = 4;
        $childCount = $menu->children->count();
        $children = $menu->children;
        @endphp

        {{-- Show first 4 children --}}
        @foreach ($children->take($visibleCount) as $child)
        @if ($child->children->isNotEmpty())
        <!-- Menu item with sub-children -->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <span class="menu-link">
                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                <span class="menu-title">{{ $child->title }}</span>
                <span class="menu-arrow"></span>
            </span>
            <div class="menu-sub menu-sub-accordion">
                @foreach ($child->children as $subChild)
                <x-Dashboard::sidebar.item :item="$subChild" />
                @endforeach
            </div>
        </div>
        @else
        <!-- Menu item without sub-children -->
        <x-Dashboard::sidebar.item :item="$child" />
        @endif
        @endforeach

        {{-- Hidden collapsed children --}}
        @if ($childCount > $visibleCount)
        <div class="collapse" id="menu_collapse_{{ $menu->id }}">
            @foreach ($children->slice($visibleCount) as $child)
            @if ($child->children->isNotEmpty())
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                    <span class="menu-title">{{ $child->title }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    @foreach ($child->children as $subChild)
                    <x-Dashboard::sidebar.item :item="$subChild" />
                    @endforeach
                </div>
            </div>
            @else
            <x-Dashboard::sidebar.item :item="$child" />
            @endif
            @endforeach
        </div>

        <!-- Show More / Show Less Button -->
        <div class="menu-item">
            <div class="menu-content">
                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                    data-bs-toggle="collapse" href="#menu_collapse_{{ $menu->id }}" role="button" aria-expanded="false"
                    aria-controls="menu_collapse_{{ $menu->id }}" data-kt-toggle-text="Show Less">

                    <span data-kt-toggle-text-target="true">
                        Show {{ $childCount - $visibleCount }} More
                    </span>

                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </i>
                </a>
            </div>
        </div>
        @endif
    </div>
    <!--end:Menu sub-->
    @endif
</div>