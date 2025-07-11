@php
$authMenus = $menus->where('slug','authentication') ?? collect();
$accountMenus = $menus->where('slug','account') ?? collect();
$widgetsMenus = $menus->where('slug','widgets') ?? collect();
$widgetsMenus = $menus->where('slug','widgets') ?? collect();
$generalMenus = $menus->reject(function ($menu) {
return in_array($menu->slug, ['authentication', 'account', 'widgets']);
});
@endphp

<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
    <!--begin:Pages menu-->
    <div class="menu-active-bg px-4 px-lg-0">
        <!--begin:Tabs nav-->
        <div class="d-flex w-100 overflow-auto">
            <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab"
                        data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                </li>
                <!--end:Nav item-->
                <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab"
                        data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                </li>
                <!--end:Nav item-->
                <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab"
                        data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                </li>
                <!--end:Nav item-->
                <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab"
                        data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                </li>
                <!--end:Nav item-->
            </ul>
        </div>
        <!--end:Tabs nav-->
        <!--begin:Tab content-->
        <div class="tab-content py-4 py-lg-8 px-lg-7">
            <!--begin:Tab pane-->
            <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                <!--begin:Row-->
                <div class="row">
                    <!--begin:Col-->
                    <div class="col-lg-8">
                        <!--begin:Row-->
                        <div class="row">
                            <!--begin:Col-->
                            @foreach ($generalMenus as $menu )

                            <div class="col-lg-3 mb-6 mb-lg-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">{{$menu->title}}</h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                @foreach ($menu->children as $child )

                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="{{$child->url}}" class="menu-link">
                                        <span class="menu-title">{{$child->title}}</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                @endforeach
                                <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            @endforeach
                            <!--end:Col-->
                        </div>
                        <!--end:Row-->
                    </div>
                    <!--end:Col-->
                    <!--begin:Col-->
                    <div class="col-lg-4">
                        <img src="{{ asset('admin') }}/assets/media/stock/600x600/img-82.jpg" class="rounded mw-100"
                            alt="" />
                    </div>
                    <!--end:Col-->
                </div>
                <!--end:Row-->
            </div>
            <!--end:Tab pane-->
            <!--begin:Tab pane-->
            <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                <!--begin:Row-->
                <div class="row">
                    <!--begin:Col-->
                    <div class="col-lg-5 mb-6 mb-lg-0">
                        <!--begin:Row-->
                        <div class="row">
                            <!--begin:Col-->
                            @foreach ($accountMenus as $menu )
                            @foreach ($menu->children as $child)

                            <div class="col-lg-6">
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="{{$child->url}}" class="menu-link">
                                        <span class="menu-title">{{$child->title}}</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                            </div>
                            <!--end:Col-->
                            @endforeach
                            @endforeach
                            <!--begin:Col-->

                        </div>
                        <!--end:Row-->
                    </div>
                    <!--end:Col-->
                    <!--begin:Col-->
                    <div class="col-lg-7">
                        <img src="{{ asset('admin') }}/assets/media/stock/900x600/46.jpg" class="rounded mw-100"
                            alt="" />
                    </div>
                    <!--end:Col-->
                </div>
                <!--end:Row-->
            </div>
            <!--end:Tab pane-->
            <!--begin:Tab pane-->
            <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                <!--begin:Row-->
                <div class="row">
                    <!--begin:Col-->

                    @foreach ($authMenus as $menu )

                    @foreach ($menu->children as $child )
                    <div class="col-lg-3 mb-6 mb-lg-0">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">{{$child->title}}</h4>

                        @if($child->children->isNotEmpty())

                        @foreach ($child->children as $subChild )

                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="{{$subChild->url}}" class="menu-link ">
                                <span class="menu-title">{{$subChild->title}}</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        @endforeach
                        @endif
                    </div>
                    @endforeach
                    @endforeach
                    <!--end:Col-->
                </div>
                <!--end:Row-->
            </div>
            <!--end:Tab pane-->
            <!--begin:Tab pane-->
            <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                <!--begin:Row-->
                <div class="row">
                    <!--begin:Col-->
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <!--begin:Menu item-->
                        @foreach ($widgetsMenus as $menu )
                        @foreach ($menu->children as $child )

                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="{{$child->url}}" class="menu-link">
                                <span class="menu-title">{{$child->title}}</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        @endforeach
                        @endforeach
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                    <!--begin:Col-->
                    <div class="col-lg-8">
                        <img src="{{ asset('admin') }}/assets/media/stock/900x600/44.jpg" class="rounded mw-100"
                            alt="" />
                    </div>
                    <!--end:Col-->
                </div>
                <!--end:Row-->
            </div>
            <!--end:Tab pane-->
        </div>
        <!--end:Tab content-->
    </div>
    <!--end:Pages menu-->
</div>