<!DOCTYPE html>
<html lang="fr">
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>{{Config('app.name')}} | Tableau de Bord</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('meta')
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

<!--  proba css  -->
        <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />


        <link href="{{ asset('pages/css/wizard-1.css') }}" rel="stylesheet" type="text/css" />



        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
         @stack('styles')
         @section('styles')
         @show
    </head>

    
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="index.html">
                    <img alt="Logo" src="assets/media/logos/logo-light.png" />
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
            </div>
        </div>
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                @section('aside') 
                    @include('layout.common.admin.aside')
                @show
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                        @section('topbar_menu') 
                            @include('layout.common.admin.topbar.menu')
                        @show
                        <div class="kt-header__topbar">
                            @section('topbar_search') 
                                @include('layout.common.admin.topbar.search')
                            @show
                            @section('topbar_notifications') 
                                @include('layout.common.admin.topbar.notifications')
                            @show
                            @section('topbar_quickaction') 
                                @include('layout.common.admin.topbar.quickaction')
                            @show
                            @section('topbar_mycart') 
                                @include('layout.common.admin.topbar.mycart')
                            @show
                            <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
                                <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg> 
                                </span>
                            </div>
                            @section('topbar_language') 
                                @include('layout.common.admin.topbar.language')
                            @show
                            @section('topbar_user') 
                                @include('layout.common.admin.topbar.user')
                            @show
                        </div>
                    </div>
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        @section('topbar_subheader') 
                            @include('layout.common.admin.topbar.subheader')
                        @show

                        @yield('content')
                    
                    </div>
                    @section('footer') 
                        @include('layout.common.admin.footer')
                    @show
                </div>
            </div>
        </div>
        @section('quickpanel') 
            @include('layout.common.admin.quickpanel')
        @show
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>
        @section('stickytoolbar') 
            @include('layout.common.admin.stickytoolbar')
        @show
        @section('topbar_demo') 
            @include('layout.common.admin.demo')
        @show
        @section('chattoolbar') 
            @include('layout.common.admin.chattoolbar')
        @show
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!--  proba js -->
        <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>


        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ asset('js/template/dashboard.js') }}" type="text/javascript"></script>

        <script src="{{ asset('plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

        <script src="{{ asset('pages/js/wizard-1.js') }}" type="text/javascript"></script>

        @stack('scripts')
        @section('scripts')

        @show
    </body>
</html>