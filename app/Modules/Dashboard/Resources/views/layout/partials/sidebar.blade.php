<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    @include('Dashboard::components.sidebar.logo')
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
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->


                    <x-Dashboard::menu.accordion title="Dashboards" show="true">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </x-slot>
                        <x-Dashboard::menu.item title="Default" :href="locale_route('dashboard')" active="true" />
                        <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link active" href="{{locale_route('dashboard')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Test</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                    data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse"
                                    data-kt-toggle-text="Show Less">
                                    <span data-kt-toggle-text-target="true">Show More</span>
                                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </x-Dashboard::menu.accordion>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->

                    <x-Dashboard::menu.accordion title="User Profile">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-address-book fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </x-slot>

                        <x-Dashboard::menu.item title="Overview" :href="locale_route('user-profile-overview')" />
                    </x-Dashboard::menu.accordion>

                    <!--end:Menu item-->


                    <!--begin:Menu item-->

                    <x-Dashboard::menu.accordion title="Account">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-element-plus fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </x-slot>

                        <x-Dashboard::menu.item title="Settings" :href="locale_route('user-profile-overview')" />
                        <x-Dashboard::menu.item title="Security" :href="locale_route('user-profile-overview')" />
                        <x-Dashboard::menu.item title="Activity" :href="locale_route('user-profile-overview')" />

                    </x-Dashboard::menu.accordion>

                    <!--begin:Menu item-->


                    <x-Dashboard::menu.accordion title="Authentication">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </x-slot>



                        <x-Dashboard::menu.accordion title="Basic">
                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>


                            <x-Dashboard::menu.item title="Log In" :href="locale_route('login')" />
                            <x-Dashboard::menu.item title="Register" :href="locale_route('register')" />
                            <x-Dashboard::menu.item title="Two-Factor" :href="locale_route('two-factor')" />
                            <x-Dashboard::menu.item title="Reset Password" :href="locale_route('reset-password')" />
                            <x-Dashboard::menu.item title="New Password" :href="locale_route('new-password')" />

                        </x-Dashboard::menu.accordion>

                        <x-Dashboard::menu.accordion title="Email">
                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>


                            <x-Dashboard::menu.item title="Welcome Message" :href="locale_route('login')" />
                            <x-Dashboard::menu.item title="Reset Password" :href="locale_route('register')" />
                            <x-Dashboard::menu.item title="Subscription Confirmed" :href="locale_route('two-factor')" />
                            <x-Dashboard::menu.item title="Reset Password" :href="locale_route('reset-password')" />
                            <x-Dashboard::menu.item title="Promo 1" :href="locale_route('new-password')" />

                        </x-Dashboard::menu.accordion>


                        <x-Dashboard::menu.item title="Account Deactivation"
                            :href="locale_route('user-profile-overview')" />
                        <x-Dashboard::menu.item title="Error 404" :href="locale_route('user-profile-overview')" />
                        <x-Dashboard::menu.item title="Error 500" :href="locale_route('user-profile-overview')" />
                    </x-Dashboard::menu.accordion>


                    <x-Dashboard::menu.accordion title="Corporate" trigger="{default: 'click', lg: 'hover'}"
                        placement="right-start">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-file fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </x-slot>

                        <x-Dashboard::menu.item title="About" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="Our Team" :href="locale_route('register')" />
                        <x-Dashboard::menu.item title="Contact Us" :href="locale_route('two-factor')" />
                        <x-Dashboard::menu.item title="Licenses" :href="locale_route('reset-password')" />
                        <x-Dashboard::menu.item title="Sitemap" :href="locale_route('new-password')" />

                    </x-Dashboard::menu.accordion>

                    <x-Dashboard::menu.accordion title="FAQ">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-chart-pie-3 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </x-slot>

                        <x-Dashboard::menu.item title="FAQ Classic" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="FAQ Extended<" :href="locale_route('two-factor')" />

                    </x-Dashboard::menu.accordion>


                    <x-Dashboard::menu.accordion title="Utilities">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-color-swatch fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                                <span class="path11"></span>
                                <span class="path12"></span>
                                <span class="path13"></span>
                                <span class="path14"></span>
                                <span class="path15"></span>
                                <span class="path16"></span>
                                <span class="path17"></span>
                                <span class="path18"></span>
                                <span class="path19"></span>
                                <span class="path20"></span>
                                <span class="path21"></span>
                            </i>
                        </x-slot>


                        <x-Dashboard::menu.accordion title="Modals">
                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>

                            <x-Dashboard::menu.accordion title="General">
                                <x-slot name="icon">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                </x-slot>

                                <x-Dashboard::menu.item title="Invite Friends" :href="locale_route('login')" />

                            </x-Dashboard::menu.accordion>

                            <x-Dashboard::menu.accordion title="Forms">
                                <x-slot name="icon">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                </x-slot>

                                <x-Dashboard::menu.item title="New Target" :href="locale_route('login')" />

                            </x-Dashboard::menu.accordion>

                            <x-Dashboard::menu.accordion title="Search">
                                <x-slot name="icon">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                </x-slot>

                                <x-Dashboard::menu.item title="Users" :href="locale_route('login')" />

                            </x-Dashboard::menu.accordion>
                        </x-Dashboard::menu.accordion>

                        <x-Dashboard::menu.accordion title="Search">

                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>

                            <x-Dashboard::menu.item title="Horizontal" :href="locale_route('login')" />



                        </x-Dashboard::menu.accordion>

                    </x-Dashboard::menu.accordion>


                    <x-Dashboard::menu.accordion title="Widgets">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-element-7 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </x-slot>
                        <x-Dashboard::menu.item title="Lists" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="Statistics" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="Charts" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="Mixed" :href="locale_route('login')" />
                        <x-Dashboard::menu.item title="Tables<" :href="locale_route('two-factor')" />
                        <x-Dashboard::menu.item title="Feeds<" :href="locale_route('two-factor')" />

                    </x-Dashboard::menu.accordion>

                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->


                    <x-Dashboard::menu.accordion title="User Management">
                        <x-slot name="icon">
                            <i class="ki-duotone ki-abstract-28 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </x-slot>

                        <x-Dashboard::menu.accordion title="Users">
                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>

                            <x-Dashboard::menu.item title="Users List" :href="locale_route('login')" />
                            <x-Dashboard::menu.item title="View User" :href="locale_route('login')" />

                        </x-Dashboard::menu.accordion>

                        <x-Dashboard::menu.accordion title="Roles">
                            <x-slot name="icon">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                            </x-slot>

                            <x-Dashboard::menu.item title="Roles List" :href="locale_route('login')" />
                            <x-Dashboard::menu.item title="View View" :href="locale_route('login')" />

                        </x-Dashboard::menu.accordion>


                        <x-Dashboard::menu.item title="Permissions" :href="locale_route('login')" />

                    </x-Dashboard::menu.accordion>
                    <!--begin:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
            title="200+ in-house components and 3rd-party plugins">
            <span class="btn-label">Button</span>
            <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div>
    <!--end::Footer-->
</div>