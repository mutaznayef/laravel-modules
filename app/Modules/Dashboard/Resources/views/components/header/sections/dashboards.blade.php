<!--begin:Menu sub-->
<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
    <!--begin:Dashboards menu-->
    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                <!--begin:Row-->
                <div class="row">
                    <!--begin:Col-->
                    @foreach ($menus as $menu)

                    @php
                    $children = $menu->children;
                    $firstSix = $children->take(6);
                    $remaining = $children->slice(6); // the rest after first 6
                    @endphp
                    @foreach ($firstSix as $child)
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="{{$child->url}}" class="menu-link active">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-element-11 text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">{{$child->title}}</span>
                                    <span class="fs-7 fw-semibold text-muted">{{$child->slug}}</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    @endforeach
                    @endforeach
                    <!--end:Col-->

                </div>
                <!--end:Row-->
                <div class="separator separator-dashed mx-5 my-5"></div>
                <!--begin:Landing-->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                    <div class="d-flex flex-column me-5">
                        <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                        <div class="fs-7 fw-semibold text-muted">Onpe page landing template with
                            pricing & others</div>
                    </div>
                    <a href="../../demo1/dist/landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                </div>
                <!--end:Landing-->
            </div>
            <!--end:Col-->
            <!--begin:Col-->
            <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                <!--begin:Heading-->
                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards
                </h4>
                <!--end:Heading-->
                <!--begin:Menu item-->
                @foreach ($remaining as $child)
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="{{$child->url}}" class="menu-link py-2">
                        <span class="menu-title">{{$child->title}}</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @endforeach
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Dashboards menu-->
</div>
<!--end:Menu sub-->