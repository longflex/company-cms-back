<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>Famco</title>
    <meta name="description" content="Mrfocuskw Admin Panel" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('_admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_admin/plugins/custom/prismjs/prismjs.bundle.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('_admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('_admin/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_admin/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_admin/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('_admin/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading page-loading-enabled">
<!--begin::Main-->

<!--begin::Page loader-->
<div class="page-loader">
    <div class="spinner spinner-primary"></div>
</div>
<!--end::Page Loader-->

<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="{{ route('admin.home') }}">
        <img alt="Logo" src="{{ asset('_admin/media/logos/logo-light.png') }}" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto" id="kt_brand">
                <!--begin::Logo-->
                <a href="{{ route('admin.home') }}" class="brand-logo">
                    <img alt="Logo" src="{{ asset('_admin/media/logos/logo.png') }}" class="max-h-70px" />
                </a>
                <!--end::Logo-->
                <!--begin::Toggle-->
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </button>
                <!--end::Toolbar-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                    <!--begin::Menu Nav-->
                    <ul class="menu-nav">
                        <li class="menu-section">
                            <h4 class="menu-text">Site Information</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>

                        <li class="menu-item {{ Route::current()->getName() == 'admin.home' ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('admin.home') }}" class="menu-link">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">General</span>
                            </a>
                        </li>

                        <li class="menu-item {{ Route::current()->getName() == 'admin.layout.contact' ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('admin.layout.contact') }}" class="menu-link">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Contact Info</span>
                            </a>
                        </li>

                        <li class="menu-section">
                            <h4 class="menu-text">Layout</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
                        
                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'home-content' || Request::segment(3) == 'home-keyproduct-specialty' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Home</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">Home</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.home-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.home-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.home-keyproduct-specialty' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.home-keyproduct-specialty')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Main Product Specialties</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.home-product' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.home-product')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Products</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.home-product-specialty' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.home-product-specialty')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Product Specialties</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item {{ Route::current()->getName() == 'admin.layout.contact-content' ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('admin.layout.contact-content') }}" class="menu-link">
                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Communication/Mail-opened.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span class="menu-text">Contact</span>
                            </a>
                        </li>

                        <li class="menu-item {{ Route::current()->getName() == 'admin.layout.footer-content' ? 'menu-item-active' : '' }}" aria-haspopup="true">
                            <a href="{{ route('admin.layout.footer-content') }}" class="menu-link">
                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Layout/Layout-horizontal.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5"/>
                                        <rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span class="menu-text">Footer</span>
                            </a>
                        </li>

                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'about-content' || Request::segment(3) == 'about-skill' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">About us</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">About us</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.about-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.about-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.about-skill' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.about-skill')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Skills</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.about-specialty' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.about-specialty')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Specialties</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'manage-content' || Request::segment(3) == 'manage-content' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Devices/Server.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M5,2 L19,2 C20.1045695,2 21,2.8954305 21,4 L21,6 C21,7.1045695 20.1045695,8 19,8 L5,8 C3.8954305,8 3,7.1045695 3,6 L3,4 C3,2.8954305 3.8954305,2 5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L16,6 C16.5522847,6 17,5.55228475 17,5 C17,4.44771525 16.5522847,4 16,4 L11,4 Z M7,6 C7.55228475,6 8,5.55228475 8,5 C8,4.44771525 7.55228475,4 7,4 C6.44771525,4 6,4.44771525 6,5 C6,5.55228475 6.44771525,6 7,6 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,13 C21,14.1045695 20.1045695,15 19,15 L5,15 C3.8954305,15 3,14.1045695 3,13 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L16,13 C16.5522847,13 17,12.5522847 17,12 C17,11.4477153 16.5522847,11 16,11 L11,11 Z M7,13 C7.55228475,13 8,12.5522847 8,12 C8,11.4477153 7.55228475,11 7,11 C6.44771525,11 6,11.4477153 6,12 C6,12.5522847 6.44771525,13 7,13 Z" fill="#000000"/>
                                        <path d="M5,16 L19,16 C20.1045695,16 21,16.8954305 21,18 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,18 C3,16.8954305 3.8954305,16 5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 L11,18 Z M7,20 C7.55228475,20 8,19.5522847 8,19 C8,18.4477153 7.55228475,18 7,18 C6.44771525,18 6,18.4477153 6,19 C6,19.5522847 6.44771525,20 7,20 Z" fill="#000000"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span class="menu-text">Management</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">Management</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.manage-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.manage-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.manage-member' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.manage-member')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Members</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'work' || Request::segment(3) == 'work-category' || Request::segment(3) == 'work-list' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Shopping/Box3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" fill="#000000" opacity="0.3"/>
                                        <polygon fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span class="menu-text">Products</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">Products</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.product-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.product-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.product-product' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.product-product')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Products</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'article-content' || Request::segment(3) == 'article-article' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Text/Article.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                                <span class="menu-text">Articles</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">Articles</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.article-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.article-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu {{Request::segment(3) == 'review-content' || Request::segment(3) == 'review-review' ? 'menu-item-open' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <span class="svg-icon menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L6,18 C4.34314575,18 3,16.6568542 3,15 L3,6 C3,4.34314575 4.34314575,3 6,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M7.5,12 C6.67157288,12 6,11.3284271 6,10.5 C6,9.67157288 6.67157288,9 7.5,9 C8.32842712,9 9,9.67157288 9,10.5 C9,11.3284271 8.32842712,12 7.5,12 Z M12.5,12 C11.6715729,12 11,11.3284271 11,10.5 C11,9.67157288 11.6715729,9 12.5,9 C13.3284271,9 14,9.67157288 14,10.5 C14,11.3284271 13.3284271,12 12.5,12 Z M17.5,12 C16.6715729,12 16,11.3284271 16,10.5 C16,9.67157288 16.6715729,9 17.5,9 C18.3284271,9 19,9.67157288 19,10.5 C19,11.3284271 18.3284271,12 17.5,12 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">Testimonials</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                                        <span class="menu-link">
                                            <span class="menu-text">Testimonials</span>
                                        </span>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.review-content' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.review-content')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Content</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.review-customer' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.review-customer')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Customers</span>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-submenu {{ Route::current()->getName() == 'admin.layout.review-review' ? 'menu-item-active' : ''}}" aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="{{route('admin.layout.review-review')}}" class="menu-link menu-toggle">
                                            <i class="menu-bullet menu-bullet-line">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Testimonials</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--end::Menu Nav-->
                </div>
                <!--end::Menu Container-->
            </div>
            <!--end::Aside Menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::User-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">A</span>
										</span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            @yield('content')
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2"><?php echo date("Y"); ?>©</span>
                        <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Famco</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile</h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ auth()->user()->name }}</a>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <span class="navi-text text-muted text-hover-primary">{{ auth()->user()->email }}</span>
                        </span>
                    </a>
                    <a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" href="{{ route('logout') }}">
                        {{ __('Sign Out') }}
                    </a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
        <!--end::Svg Icon-->
    </span>
</div>
<!--end::Scrolltop-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('_admin/js/config.bundle.js') }}"></script>
<script src="{{ asset('_admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('_admin/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('_admin/js/scripts.bundle.js') }}"></script>
<!--end::Global Theme Bundle-->

<script>
    var HOST_URL="{{ url('/' . env('ADMIN_PREFIX')) }}";
    var PUBLIC_PATH = "{{ url('/') }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('js_after')

</body>
<!--end::Body-->
</html>
