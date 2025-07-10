@extends('layouts.master')

@section('content')



<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xxl-8">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{asset('admin')}}/assets/media/avatars/300-1.jpg" alt="image">
                        <div
                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                        </div>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
                                <a href="#">
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#"
                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>Developer</a>
                                <a href="#"
                                    class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-geolocation fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>SF, Bay Area</a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>max@kt.com</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Actions-->
                        <div class="d-flex my-4">
                            <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                <i class="ki-duotone ki-check fs-3 d-none"></i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </a>
                            <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                            <!--begin::Menu-->
                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                aria-label="Specify a target name for future usage and reference"
                                                data-bs-original-title="Specify a target name for future usage and reference"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap flex-stack">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                            data-kt-initialized="1">$4,500</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div
                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="60" data-kt-countup-prefix="%"
                                            data-kt-initialized="1">%60</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                <span class="fw-bold fs-6">50%</span>
                            </div>
                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->
            <!--begin::Navs-->
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                        href="../../demo1/dist/pages/user-profile/overview.html">Overview</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo1/dist/pages/user-profile/projects.html">Projects</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo1/dist/pages/user-profile/campaigns.html">Campaigns</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo1/dist/pages/user-profile/documents.html">Documents</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo1/dist/pages/user-profile/followers.html">Followers</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5"
                        href="../../demo1/dist/pages/user-profile/activity.html">Activity</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--begin::Navs-->
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Row-->
    <div class="row g-5 g-xxl-8">
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Feeds Widget 1-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-6.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace Green</a>
                                <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                        <!--begin::Editor-->
                        <div id="kt_forms_widget_1_editor" class="py-6 ql-container ql-snow">
                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                data-placeholder="What is on your mind ?">
                                <p><br></p>
                            </div>
                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                    target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                    data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a
                                    class="ql-remove"></a></div>
                        </div>
                        <!--end::Editor-->
                        <div class="separator"></div>
                        <!--begin::Toolbar-->
                        <div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2 ql-snow">
                            <div class="me-2">
                                <span class="ql-formats ql-size ms-0">
                                    <span class="ql-size w-75px ql-picker"><span class="ql-picker-label" tabindex="0"
                                            role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg
                                                viewBox="0 0 18 18">
                                                <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                            </svg></span><span class="ql-picker-options" aria-hidden="true"
                                            tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button"
                                                class="ql-picker-item" data-value="small"></span><span tabindex="0"
                                                role="button" class="ql-picker-item ql-selected"></span><span
                                                tabindex="0" role="button" class="ql-picker-item"
                                                data-value="large"></span><span tabindex="0" role="button"
                                                class="ql-picker-item" data-value="huge"></span></span></span><select
                                        class="ql-size w-75px" style="display: none;">
                                        <option value="small"></option>
                                        <option selected="selected"></option>
                                        <option value="large"></option>
                                        <option value="huge"></option>
                                    </select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-bold" type="button"><svg viewBox="0 0 18 18">
                                            <path class="ql-stroke"
                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                            </path>
                                            <path class="ql-stroke"
                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                            </path>
                                        </svg></button>
                                    <button class="ql-italic" type="button"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                        </svg></button>
                                    <button class="ql-underline" type="button"><svg viewBox="0 0 18 18">
                                            <path class="ql-stroke"
                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15">
                                            </rect>
                                        </svg></button>
                                    <button class="ql-strike" type="button"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line>
                                            <path class="ql-fill"
                                                d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z">
                                            </path>
                                            <path class="ql-fill"
                                                d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z">
                                            </path>
                                        </svg></button>
                                    <button class="ql-image" type="button"><svg viewBox="0 0 18 18">
                                            <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                            <polyline class="ql-even ql-fill"
                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                        </svg></button>
                                    <button class="ql-link" type="button"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                            <path class="ql-even ql-stroke"
                                                d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                            </path>
                                            <path class="ql-even ql-stroke"
                                                d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                            </path>
                                        </svg></button>
                                    <button class="ql-clean" type="button"><svg class="" viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                            <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                            <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                            <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14">
                                            </rect>
                                        </svg></button>
                                </span>
                            </div>
                            <div class="me-n3">
                                <span class="btn btn-icon btn-sm btn-active-color-primary">
                                    <i class="ki-duotone ki-paper-clip fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-sm btn-active-color-primary">
                                    <i class="ki-duotone ki-geolocation fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 1-->
            <!--begin::Feeds Widget 2-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-23.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-5">
                        <!--begin::Text-->
                        <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging
                            in poorly thought-out metaphors about driving and keep you focused on the overall structure
                            of your post</p>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#"
                                class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>120</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>15</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true"
                            rows="1" placeholder="Reply.." data-kt-initialized="1"
                            style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 2-->
            <!--begin::Feeds Widget 3-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-3">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-21.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-400 fw-bold">Yestarday at 5:06 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly
                            thought-out metaphors about driving and keep you focused on the overall structure of your
                            post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#"
                                class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>12</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>150</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Replies-->
                    <div class="mb-7">
                        <!--begin::Reply-->
                        <div class="d-flex mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-14.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mb-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice Danchik</a>
                                    <span class="text-gray-400 fw-semibold fs-7">1 day</span>
                                    <a href="#"
                                        class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                </div>
                                <!--end::Info-->
                                <!--begin::Post-->
                                <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital
                                    pen to paper you need to make sure you have to sit down and write.</span>
                                <!--end::Post-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Reply-->
                        <!--begin::Reply-->
                        <div class="d-flex">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-9.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mb-1">
                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris Bold</a>
                                    <span class="text-gray-400 fw-semibold fs-7">2 days</span>
                                    <a href="#"
                                        class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                </div>
                                <!--end::Info-->
                                <!--begin::Post-->
                                <span class="text-gray-800 fs-7 fw-normal pt-1">Outlines keep you honest. They stop you
                                    from indulging in poorly</span>
                                <!--end::Post-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Reply-->
                    </div>
                    <!--end::Replies-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true"
                            rows="1" placeholder="Reply.." data-kt-initialized="1"
                            style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 3-->
            <!--begin::Feeds Widget 4-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-7.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <span class="ms-2" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-bs-original-title="Specify a target name for future usage and reference"
                                            data-kt-initialized="1">
                                            <i class="ki-duotone ki-information fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications">
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly
                            thought-out metaphors about driving and keep you focused on the overall structure of your
                            post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#"
                                class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>22</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>59</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true"
                            rows="1" placeholder="Reply.." data-kt-initialized="1"
                            style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds Widget 4-->
            <!--begin::Feeds widget 5-->
            <div class="card d-none" id="kt_widget_5">
                <!--begin::Body-->
                <div class="card-body pb-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{asset('admin')}}/assets/media/avatars/300-7.jpg" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
                                <span class="text-gray-400 fw-bold">Last week at 10:00 PM</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Menu-->
                        <div class="my-0">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Image-->
                        <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5"
                            style="background-image:url('{{asset('admin')}}/assets/media/stock/900x600/19.jpg');"></div>
                        <!--end::Image-->
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly
                            thought-out metaphors about driving and keep you focused on the overall structure of your
                            post</div>
                        <!--end::Text-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center mb-5">
                            <a href="#"
                                class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>20</a>
                            <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                <i class="ki-duotone ki-heart fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>50</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Post-->
                    <!--begin::Separator-->
                    <div class="separator mb-4"></div>
                    <!--end::Separator-->
                    <!--begin::Reply input-->
                    <form class="position-relative mb-6">
                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true"
                            rows="1" placeholder="Reply.." data-kt-initialized="1"
                            style="overflow-x: hidden; overflow-wrap: break-word;"></textarea>
                        <div class="position-absolute top-0 end-0 me-n5">
                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                            </span>
                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                        </div>
                    </form>
                    <!--edit::Reply input-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feeds widget 5-->
            <!--begin::Feeds widget 4, 5 load more-->
            <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                <span class="indicator-label">More Feeds</span>
                <span class="indicator-progress">Loading...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Feeds widget 4, 5 load more-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::Charts Widget 1-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                        <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_64b7760e24ea4">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            multiple="" data-kt-select2="true" data-close-on-select="false"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_64b7760e24ea4" data-allow-clear="true"
                                            data-select2-id="select2-data-9-eo4k" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-10-pn8q" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-uo1v-container">
                                                    </ul><span class="select2-search select2-search--inline"><textarea
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocorrect="off" autocapitalize="none" spellcheck="false"
                                                            role="searchbox" aria-autocomplete="list" autocomplete="off"
                                                            aria-label="Search"
                                                            aria-describedby="select2-uo1v-container"
                                                            placeholder="Select option"
                                                            style="width: 100%;"></textarea></span>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;">
                        <div id="apexcharts0uln9mrpk"
                            class="apexcharts-canvas apexcharts0uln9mrpk apexcharts-theme-light"
                            style="width: 444px; height: 350px;"><svg id="SvgjsSvg1300" width="444" height="350"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="444" height="350">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 175px;"></div>
                                </foreignObject>
                                <g id="SvgjsG1378" class="apexcharts-yaxis" rel="0"
                                    transform="translate(17.19921875, 0)">
                                    <g id="SvgjsG1379" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1381"
                                            font-family="inherit" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1382">120</tspan>
                                            <title>120</title>
                                        </text><text id="SvgjsText1384" font-family="inherit" x="20"
                                            y="101.58250000000001" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1385">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1387" font-family="inherit" x="20"
                                            y="171.76500000000001" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1388">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1390" font-family="inherit" x="20"
                                            y="241.94750000000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1391">30</tspan>
                                            <title>30</title>
                                        </text><text id="SvgjsText1393" font-family="inherit" x="20" y="312.13"
                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                            font-weight="400" fill="#99a1b7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1394">0</tspan>
                                            <title>0</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1302" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(47.19921875, 30)">
                                    <defs id="SvgjsDefs1301">
                                        <linearGradient id="SvgjsLinearGradient1305" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1306" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1307" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1308" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMask0uln9mrpk">
                                            <rect id="SvgjsRect1310" width="392.80078125" height="282.73" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask0uln9mrpk"></clipPath>
                                        <clipPath id="nonForecastMask0uln9mrpk"></clipPath>
                                        <clipPath id="gridRectMarkerMask0uln9mrpk">
                                            <rect id="SvgjsRect1311" width="390.80078125" height="284.73" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1309" width="9.67001953125" height="280.73" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1305)" class="apexcharts-xcrosshairs" y2="280.73"
                                        filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1345" class="apexcharts-grid">
                                        <g id="SvgjsG1346" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1350" x1="0" y1="70.1825" x2="386.80078125" y2="70.1825"
                                                stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1351" x1="0" y1="140.365" x2="386.80078125" y2="140.365"
                                                stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1352" x1="0" y1="210.5475" x2="386.80078125"
                                                y2="210.5475" stroke="#f1f1f2" stroke-dasharray="4"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1347" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1355" x1="0" y1="280.73" x2="386.80078125" y2="280.73"
                                            stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1354" x1="0" y1="1" x2="0" y2="280.73" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1312" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1313" class="apexcharts-series" rel="1" seriesName="NetxProfit"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1318"
                                                d="M 22.56337890625 274.731 L 22.56337890625 183.79666666666668 C 22.56337890625 180.79666666666668 25.56337890625 177.79666666666668 28.56337890625 177.79666666666668 L 28.56337890625 177.79666666666668 C 29.398388671875 177.79666666666668 30.2333984375 180.79666666666668 30.2333984375 183.79666666666668 L 30.2333984375 274.731 C 30.2333984375 277.731 27.2333984375 280.731 24.2333984375 280.731 L 24.2333984375 280.731 C 23.398388671875 280.731 22.56337890625 277.731 22.56337890625 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 22.56337890625 274.731 L 22.56337890625 183.79666666666668 C 22.56337890625 180.79666666666668 25.56337890625 177.79666666666668 28.56337890625 177.79666666666668 L 28.56337890625 177.79666666666668 C 29.398388671875 177.79666666666668 30.2333984375 180.79666666666668 30.2333984375 183.79666666666668 L 30.2333984375 274.731 C 30.2333984375 277.731 27.2333984375 280.731 24.2333984375 280.731 L 24.2333984375 280.731 C 23.398388671875 280.731 22.56337890625 277.731 22.56337890625 274.731 Z "
                                                pathFrom="M 22.56337890625 280.731 L 22.56337890625 280.731 L 30.2333984375 280.731 L 30.2333984375 280.731 L 30.2333984375 280.731 L 30.2333984375 280.731 L 30.2333984375 280.731 L 22.56337890625 280.731 Z"
                                                cy="177.79566666666668" cx="86.03017578125" j="0" val="44"
                                                barHeight="102.93433333333334" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1320"
                                                d="M 87.03017578125 274.731 L 87.03017578125 158.06308333333334 C 87.03017578125 155.06308333333334 90.03017578125 152.06308333333334 93.03017578125 152.06308333333334 L 93.03017578125 152.06308333333334 C 93.865185546875 152.06308333333334 94.7001953125 155.06308333333334 94.7001953125 158.06308333333334 L 94.7001953125 274.731 C 94.7001953125 277.731 91.7001953125 280.731 88.7001953125 280.731 L 88.7001953125 280.731 C 87.865185546875 280.731 87.03017578125 277.731 87.03017578125 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 87.03017578125 274.731 L 87.03017578125 158.06308333333334 C 87.03017578125 155.06308333333334 90.03017578125 152.06308333333334 93.03017578125 152.06308333333334 L 93.03017578125 152.06308333333334 C 93.865185546875 152.06308333333334 94.7001953125 155.06308333333334 94.7001953125 158.06308333333334 L 94.7001953125 274.731 C 94.7001953125 277.731 91.7001953125 280.731 88.7001953125 280.731 L 88.7001953125 280.731 C 87.865185546875 280.731 87.03017578125 277.731 87.03017578125 274.731 Z "
                                                pathFrom="M 87.03017578125 280.731 L 87.03017578125 280.731 L 94.7001953125 280.731 L 94.7001953125 280.731 L 94.7001953125 280.731 L 94.7001953125 280.731 L 94.7001953125 280.731 L 87.03017578125 280.731 Z"
                                                cy="152.06208333333333" cx="150.49697265625" j="1" val="55"
                                                barHeight="128.66791666666668" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1322"
                                                d="M 151.49697265625 274.731 L 151.49697265625 153.38425 C 151.49697265625 150.38425 154.49697265625 147.38425 157.49697265625 147.38425 L 157.49697265625 147.38425 C 158.331982421875 147.38425 159.1669921875 150.38425 159.1669921875 153.38425 L 159.1669921875 274.731 C 159.1669921875 277.731 156.1669921875 280.731 153.1669921875 280.731 L 153.1669921875 280.731 C 152.331982421875 280.731 151.49697265625 277.731 151.49697265625 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 151.49697265625 274.731 L 151.49697265625 153.38425 C 151.49697265625 150.38425 154.49697265625 147.38425 157.49697265625 147.38425 L 157.49697265625 147.38425 C 158.331982421875 147.38425 159.1669921875 150.38425 159.1669921875 153.38425 L 159.1669921875 274.731 C 159.1669921875 277.731 156.1669921875 280.731 153.1669921875 280.731 L 153.1669921875 280.731 C 152.331982421875 280.731 151.49697265625 277.731 151.49697265625 274.731 Z "
                                                pathFrom="M 151.49697265625 280.731 L 151.49697265625 280.731 L 159.1669921875 280.731 L 159.1669921875 280.731 L 159.1669921875 280.731 L 159.1669921875 280.731 L 159.1669921875 280.731 L 151.49697265625 280.731 Z"
                                                cy="147.38325" cx="214.96376953125" j="2" val="57"
                                                barHeight="133.34675000000001" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1324"
                                                d="M 215.96376953125 274.731 L 215.96376953125 155.72366666666667 C 215.96376953125 152.72366666666667 218.96376953125 149.72366666666667 221.96376953125 149.72366666666667 L 221.96376953125 149.72366666666667 C 222.798779296875 149.72366666666667 223.6337890625 152.72366666666667 223.6337890625 155.72366666666667 L 223.6337890625 274.731 C 223.6337890625 277.731 220.6337890625 280.731 217.6337890625 280.731 L 217.6337890625 280.731 C 216.798779296875 280.731 215.96376953125 277.731 215.96376953125 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 215.96376953125 274.731 L 215.96376953125 155.72366666666667 C 215.96376953125 152.72366666666667 218.96376953125 149.72366666666667 221.96376953125 149.72366666666667 L 221.96376953125 149.72366666666667 C 222.798779296875 149.72366666666667 223.6337890625 152.72366666666667 223.6337890625 155.72366666666667 L 223.6337890625 274.731 C 223.6337890625 277.731 220.6337890625 280.731 217.6337890625 280.731 L 217.6337890625 280.731 C 216.798779296875 280.731 215.96376953125 277.731 215.96376953125 274.731 Z "
                                                pathFrom="M 215.96376953125 280.731 L 215.96376953125 280.731 L 223.6337890625 280.731 L 223.6337890625 280.731 L 223.6337890625 280.731 L 223.6337890625 280.731 L 223.6337890625 280.731 L 215.96376953125 280.731 Z"
                                                cy="149.72266666666667" cx="279.43056640625" j="3" val="56"
                                                barHeight="131.00733333333335" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1326"
                                                d="M 280.43056640625 274.731 L 280.43056640625 144.02658333333335 C 280.43056640625 141.02658333333335 283.43056640625 138.02658333333335 286.43056640625 138.02658333333335 L 286.43056640625 138.02658333333335 C 287.265576171875 138.02658333333335 288.1005859375 141.02658333333335 288.1005859375 144.02658333333335 L 288.1005859375 274.731 C 288.1005859375 277.731 285.1005859375 280.731 282.1005859375 280.731 L 282.1005859375 280.731 C 281.265576171875 280.731 280.43056640625 277.731 280.43056640625 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 280.43056640625 274.731 L 280.43056640625 144.02658333333335 C 280.43056640625 141.02658333333335 283.43056640625 138.02658333333335 286.43056640625 138.02658333333335 L 286.43056640625 138.02658333333335 C 287.265576171875 138.02658333333335 288.1005859375 141.02658333333335 288.1005859375 144.02658333333335 L 288.1005859375 274.731 C 288.1005859375 277.731 285.1005859375 280.731 282.1005859375 280.731 L 282.1005859375 280.731 C 281.265576171875 280.731 280.43056640625 277.731 280.43056640625 274.731 Z "
                                                pathFrom="M 280.43056640625 280.731 L 280.43056640625 280.731 L 288.1005859375 280.731 L 288.1005859375 280.731 L 288.1005859375 280.731 L 288.1005859375 280.731 L 288.1005859375 280.731 L 280.43056640625 280.731 Z"
                                                cy="138.02558333333334" cx="343.89736328125" j="4" val="61"
                                                barHeight="142.70441666666667" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1328"
                                                d="M 344.89736328125 274.731 L 344.89736328125 151.04483333333334 C 344.89736328125 148.04483333333334 347.89736328125 145.04483333333334 350.89736328125 145.04483333333334 L 350.89736328125 145.04483333333334 C 351.732373046875 145.04483333333334 352.5673828125 148.04483333333334 352.5673828125 151.04483333333334 L 352.5673828125 274.731 C 352.5673828125 277.731 349.5673828125 280.731 346.5673828125 280.731 L 346.5673828125 280.731 C 345.732373046875 280.731 344.89736328125 277.731 344.89736328125 274.731 Z "
                                                fill="rgba(62,151,255,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 344.89736328125 274.731 L 344.89736328125 151.04483333333334 C 344.89736328125 148.04483333333334 347.89736328125 145.04483333333334 350.89736328125 145.04483333333334 L 350.89736328125 145.04483333333334 C 351.732373046875 145.04483333333334 352.5673828125 148.04483333333334 352.5673828125 151.04483333333334 L 352.5673828125 274.731 C 352.5673828125 277.731 349.5673828125 280.731 346.5673828125 280.731 L 346.5673828125 280.731 C 345.732373046875 280.731 344.89736328125 277.731 344.89736328125 274.731 Z "
                                                pathFrom="M 344.89736328125 280.731 L 344.89736328125 280.731 L 352.5673828125 280.731 L 352.5673828125 280.731 L 352.5673828125 280.731 L 352.5673828125 280.731 L 352.5673828125 280.731 L 344.89736328125 280.731 Z"
                                                cy="145.04383333333334" cx="408.36416015625" j="5" val="58"
                                                barHeight="135.68616666666668" barWidth="9.67001953125"></path>
                                            <g id="SvgjsG1315" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1317" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1319" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1321" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1323" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1325" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1327" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                            </g>
                                            <g id="SvgjsG1316"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                style="pointer-events: none"></g>
                                        </g>
                                        <g id="SvgjsG1329" class="apexcharts-series" rel="2" seriesName="Revenue"
                                            data:realIndex="1">
                                            <path id="SvgjsPath1334"
                                                d="M 32.2333984375 274.731 L 32.2333984375 108.93533333333335 C 32.2333984375 105.93533333333335 35.2333984375 102.93533333333335 38.2333984375 102.93533333333335 L 38.2333984375 102.93533333333335 C 39.068408203125 102.93533333333335 39.90341796875 105.93533333333335 39.90341796875 108.93533333333335 L 39.90341796875 274.731 C 39.90341796875 277.731 36.90341796875 280.731 33.90341796875 280.731 L 33.90341796875 280.731 C 33.068408203125 280.731 32.2333984375 277.731 32.2333984375 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 32.2333984375 274.731 L 32.2333984375 108.93533333333335 C 32.2333984375 105.93533333333335 35.2333984375 102.93533333333335 38.2333984375 102.93533333333335 L 38.2333984375 102.93533333333335 C 39.068408203125 102.93533333333335 39.90341796875 105.93533333333335 39.90341796875 108.93533333333335 L 39.90341796875 274.731 C 39.90341796875 277.731 36.90341796875 280.731 33.90341796875 280.731 L 33.90341796875 280.731 C 33.068408203125 280.731 32.2333984375 277.731 32.2333984375 274.731 Z "
                                                pathFrom="M 32.2333984375 280.731 L 32.2333984375 280.731 L 39.90341796875 280.731 L 39.90341796875 280.731 L 39.90341796875 280.731 L 39.90341796875 280.731 L 39.90341796875 280.731 L 32.2333984375 280.731 Z"
                                                cy="102.93433333333334" cx="95.7001953125" j="0" val="76"
                                                barHeight="177.79566666666668" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1336"
                                                d="M 96.7001953125 274.731 L 96.7001953125 87.88058333333333 C 96.7001953125 84.88058333333333 99.7001953125 81.88058333333333 102.7001953125 81.88058333333333 L 102.7001953125 81.88058333333333 C 103.535205078125 81.88058333333333 104.37021484375 84.88058333333333 104.37021484375 87.88058333333333 L 104.37021484375 274.731 C 104.37021484375 277.731 101.37021484375 280.731 98.37021484375 280.731 L 98.37021484375 280.731 C 97.535205078125 280.731 96.7001953125 277.731 96.7001953125 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 96.7001953125 274.731 L 96.7001953125 87.88058333333333 C 96.7001953125 84.88058333333333 99.7001953125 81.88058333333333 102.7001953125 81.88058333333333 L 102.7001953125 81.88058333333333 C 103.535205078125 81.88058333333333 104.37021484375 84.88058333333333 104.37021484375 87.88058333333333 L 104.37021484375 274.731 C 104.37021484375 277.731 101.37021484375 280.731 98.37021484375 280.731 L 98.37021484375 280.731 C 97.535205078125 280.731 96.7001953125 277.731 96.7001953125 274.731 Z "
                                                pathFrom="M 96.7001953125 280.731 L 96.7001953125 280.731 L 104.37021484375 280.731 L 104.37021484375 280.731 L 104.37021484375 280.731 L 104.37021484375 280.731 L 104.37021484375 280.731 L 96.7001953125 280.731 Z"
                                                cy="81.87958333333333" cx="160.1669921875" j="1" val="85"
                                                barHeight="198.8504166666667" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1338"
                                                d="M 161.1669921875 274.731 L 161.1669921875 50.44991666666666 C 161.1669921875 47.44991666666666 164.1669921875 44.44991666666666 167.1669921875 44.44991666666666 L 167.1669921875 44.44991666666666 C 168.002001953125 44.44991666666666 168.83701171875 47.44991666666666 168.83701171875 50.44991666666666 L 168.83701171875 274.731 C 168.83701171875 277.731 165.83701171875 280.731 162.83701171875 280.731 L 162.83701171875 280.731 C 162.002001953125 280.731 161.1669921875 277.731 161.1669921875 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 161.1669921875 274.731 L 161.1669921875 50.44991666666666 C 161.1669921875 47.44991666666666 164.1669921875 44.44991666666666 167.1669921875 44.44991666666666 L 167.1669921875 44.44991666666666 C 168.002001953125 44.44991666666666 168.83701171875 47.44991666666666 168.83701171875 50.44991666666666 L 168.83701171875 274.731 C 168.83701171875 277.731 165.83701171875 280.731 162.83701171875 280.731 L 162.83701171875 280.731 C 162.002001953125 280.731 161.1669921875 277.731 161.1669921875 274.731 Z "
                                                pathFrom="M 161.1669921875 280.731 L 161.1669921875 280.731 L 168.83701171875 280.731 L 168.83701171875 280.731 L 168.83701171875 280.731 L 168.83701171875 280.731 L 168.83701171875 280.731 L 161.1669921875 280.731 Z"
                                                cy="44.44891666666666" cx="224.6337890625" j="2" val="101"
                                                barHeight="236.28108333333336" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1340"
                                                d="M 225.6337890625 274.731 L 225.6337890625 57.468166666666654 C 225.6337890625 54.468166666666654 228.6337890625 51.468166666666654 231.6337890625 51.468166666666654 L 231.6337890625 51.468166666666654 C 232.468798828125 51.468166666666654 233.30380859375 54.468166666666654 233.30380859375 57.468166666666654 L 233.30380859375 274.731 C 233.30380859375 277.731 230.30380859375 280.731 227.30380859375 280.731 L 227.30380859375 280.731 C 226.468798828125 280.731 225.6337890625 277.731 225.6337890625 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 225.6337890625 274.731 L 225.6337890625 57.468166666666654 C 225.6337890625 54.468166666666654 228.6337890625 51.468166666666654 231.6337890625 51.468166666666654 L 231.6337890625 51.468166666666654 C 232.468798828125 51.468166666666654 233.30380859375 54.468166666666654 233.30380859375 57.468166666666654 L 233.30380859375 274.731 C 233.30380859375 277.731 230.30380859375 280.731 227.30380859375 280.731 L 227.30380859375 280.731 C 226.468798828125 280.731 225.6337890625 277.731 225.6337890625 274.731 Z "
                                                pathFrom="M 225.6337890625 280.731 L 225.6337890625 280.731 L 233.30380859375 280.731 L 233.30380859375 280.731 L 233.30380859375 280.731 L 233.30380859375 280.731 L 233.30380859375 280.731 L 225.6337890625 280.731 Z"
                                                cy="51.46716666666666" cx="289.1005859375" j="3" val="98"
                                                barHeight="229.26283333333336" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1342"
                                                d="M 290.1005859375 274.731 L 290.1005859375 83.20175 C 290.1005859375 80.20175 293.1005859375 77.20175 296.1005859375 77.20175 L 296.1005859375 77.20175 C 296.935595703125 77.20175 297.77060546875 80.20175 297.77060546875 83.20175 L 297.77060546875 274.731 C 297.77060546875 277.731 294.77060546875 280.731 291.77060546875 280.731 L 291.77060546875 280.731 C 290.935595703125 280.731 290.1005859375 277.731 290.1005859375 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 290.1005859375 274.731 L 290.1005859375 83.20175 C 290.1005859375 80.20175 293.1005859375 77.20175 296.1005859375 77.20175 L 296.1005859375 77.20175 C 296.935595703125 77.20175 297.77060546875 80.20175 297.77060546875 83.20175 L 297.77060546875 274.731 C 297.77060546875 277.731 294.77060546875 280.731 291.77060546875 280.731 L 291.77060546875 280.731 C 290.935595703125 280.731 290.1005859375 277.731 290.1005859375 274.731 Z "
                                                pathFrom="M 290.1005859375 280.731 L 290.1005859375 280.731 L 297.77060546875 280.731 L 297.77060546875 280.731 L 297.77060546875 280.731 L 297.77060546875 280.731 L 297.77060546875 280.731 L 290.1005859375 280.731 Z"
                                                cy="77.20075" cx="353.5673828125" j="4" val="87"
                                                barHeight="203.52925000000002" barWidth="9.67001953125"></path>
                                            <path id="SvgjsPath1344"
                                                d="M 354.5673828125 274.731 L 354.5673828125 41.09225 C 354.5673828125 38.09225 357.5673828125 35.09225 360.5673828125 35.09225 L 360.5673828125 35.09225 C 361.402392578125 35.09225 362.23740234375 38.09225 362.23740234375 41.09225 L 362.23740234375 274.731 C 362.23740234375 277.731 359.23740234375 280.731 356.23740234375 280.731 L 356.23740234375 280.731 C 355.402392578125 280.731 354.5673828125 277.731 354.5673828125 274.731 Z "
                                                fill="rgba(219,223,233,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask0uln9mrpk)"
                                                pathTo="M 354.5673828125 274.731 L 354.5673828125 41.09225 C 354.5673828125 38.09225 357.5673828125 35.09225 360.5673828125 35.09225 L 360.5673828125 35.09225 C 361.402392578125 35.09225 362.23740234375 38.09225 362.23740234375 41.09225 L 362.23740234375 274.731 C 362.23740234375 277.731 359.23740234375 280.731 356.23740234375 280.731 L 356.23740234375 280.731 C 355.402392578125 280.731 354.5673828125 277.731 354.5673828125 274.731 Z "
                                                pathFrom="M 354.5673828125 280.731 L 354.5673828125 280.731 L 362.23740234375 280.731 L 362.23740234375 280.731 L 362.23740234375 280.731 L 362.23740234375 280.731 L 362.23740234375 280.731 L 354.5673828125 280.731 Z"
                                                cy="35.09125" cx="418.0341796875" j="5" val="105"
                                                barHeight="245.63875000000002" barWidth="9.67001953125"></path>
                                            <g id="SvgjsG1331" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1333" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1335" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1337" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1339" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1341" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                                <g id="SvgjsG1343" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMask0uln9mrpk)"></g>
                                            </g>
                                            <g id="SvgjsG1332"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                                style="pointer-events: none"></g>
                                        </g>
                                        <g id="SvgjsG1314" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="0"></g>
                                        <g id="SvgjsG1330" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="1"></g>
                                    </g>
                                    <g id="SvgjsG1348" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1349" x1="0" y1="0" x2="386.80078125" y2="0" stroke="#f1f1f2"
                                            stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1353" x1="0" y1="280.73" x2="386.80078125" y2="280.73"
                                            stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1356" x1="0" y1="0" x2="386.80078125" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1357" x1="0" y1="0" x2="386.80078125" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                    <g id="SvgjsG1358" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1359" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1361" font-family="inherit"
                                                x="32.2333984375" y="309.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1362">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1364" font-family="inherit" x="96.7001953125"
                                                y="309.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1365">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1367" font-family="inherit" x="161.1669921875"
                                                y="309.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1368">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1370" font-family="inherit" x="225.6337890625"
                                                y="309.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1371">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1373" font-family="inherit" x="290.1005859375"
                                                y="309.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1374">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1376" font-family="inherit" x="354.5673828125"
                                                y="309.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1377">Jul</tspan>
                                                <title>Jul</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1395" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1396" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1397" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(62, 151, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(219, 223, 233);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Chart-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Charts Widget 1-->
            <!--begin::List Widget 5-->
            <div class="card mb-5 mb-xxl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold mb-2 text-dark">Activities</span>
                        <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_64b7760e24f36">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            multiple="" data-kt-select2="true" data-close-on-select="false"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_64b7760e24f36" data-allow-clear="true"
                                            data-select2-id="select2-data-11-rcm8" tabindex="-1" aria-hidden="true"
                                            data-kt-initialized="1">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-12-wnpa" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1" aria-disabled="false">
                                                    <ul class="select2-selection__rendered" id="select2-lapv-container">
                                                    </ul><span class="select2-search select2-search--inline"><textarea
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocorrect="off" autocapitalize="none" spellcheck="false"
                                                            role="searchbox" aria-autocomplete="list" autocomplete="off"
                                                            aria-label="Search"
                                                            aria-describedby="select2-lapv-container"
                                                            placeholder="Select option"
                                                            style="width: 100%;"></textarea></span>
                                                </span></span><span class="dropdown-wrapper"
                                                aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Timeline-->
                    <div class="timeline-label">
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-warning fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep
                                structure</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                <a href="#" class="text-primary">USD 700</a>. to ESL
                            </div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep
                                structure keep great</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.
                            </div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep
                                structure keep great</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                <a href="#" class="text-primary">#XF-2356</a>.
                            </div>
                            <!--end::Desc-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch
                                preparion meeting</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end: List Widget 5-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>

@endsection

@push('scripts')

<script src="{{asset('admin')}}/assets/js/custom/pages/user-profile/general.js"></script>
@endpush