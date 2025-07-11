<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
        data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Logo-->
        @include('Dashboard::/layout/partials/_logo')
        <!--end::Logo-->
        <!--begin::sidebar menu-->
        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
            <!--begin::Menu wrapper-->
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                <!--begin::Scroll wrapper-->
                <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                    data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                    data-kt-scroll-save-state="true">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                        id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        @foreach ($menusBySection as $section => $menus)
                        @if($menus[0]->section)
                        <x-Dashboard::sidebar.section :section="$section" />
                        @endif
                        @foreach ($menus as $menu)
                        @if($menu->slug === 'corporate')
                        <x-Dashboard::sidebar.hover-menu :menu="$menu" />
                        @else
                        <x-Dashboard::sidebar.menu :menu="$menu" />
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Scroll wrapper-->
        <!--end::Menu wrapper-->
        <!--end::sidebar menu-->
        <!--begin::Footer-->
        <x-Dashboard::sidebar.footer />
        <!--end::Footer-->
    </div>