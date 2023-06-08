<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>@yield('title')</title>

        {{-- <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content=""> --}}

        <link rel="shortcut icon" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/client/images/GIS/logo.png') }}">

        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/dropzone/min/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/js/plugins/flatpickr/flatpickr.min.css') }}">

        <link rel="stylesheet" id="css-main" href="{{ asset('assets/admin/css/oneui.min.css') }}">

        <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: 'textarea.tinymce-editor'
            });
        </script>

    </head>
    <body>
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark">
            <nav id="sidebar" aria-label="Main Navigation">
                <div class="content-header">
                    <a class="fw-semibold text-dual" href="{{ url('/') }}">
                        {{-- <span class="smini-visible">
                            <img src="{{ url('assets/client/images/GIS/logo.png') }}" alt="logo" width="30px">
                        </span> --}}
                        <img class="smini-hide fs-5 tracking-wider" src="{{ url('assets/client/images/GIS/logo-teks.png') }}" alt="logo" width="200px">
                    </a>

                    <div>
                        {{-- <button onclick="darkModeToggler()" type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
                            <i class="far fa-moon"></i>
                        </button>

                        <div class="dropdown d-inline-block ms-1">
                            <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-brush"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ url ('assets/admin/css/themes/amethyst.min.css') }}" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ url ('assets/admin/css/themes/city.min.css') }}" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ url ('assets/admin/css/themes/flat.min.css') }}" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ url ('assets/admin/css/themes/modern.min.css') }}" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ url ('assets/admin/css/themes/smooth.min.css') }}" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                                    <span>Sidebar Dark</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                                        <span>Header Light</span>
                                    </a>
                                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                                        <span>Header Dark</span>
                                    </a>
                                </div>
                            </div> --}}
                            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="js-sidebar-scroll">
                        <div class="content-side">
                            <ul class="nav-main">
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->is('dashboard') || request()->is('dashboard/*') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                                        <i class="nav-main-link-icon si si-speedometer"></i>
                                        <span class="nav-main-link-name">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link"href="{{ url('/') }}">
                                        <i class="nav-main-link-icon si si-layers"></i>
                                        <span class="nav-main-link-name">Landing Page</span>
                                    </a>
                                </li>
                                @if (auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN || auth()->user()->role == App\Constant::ROLE_ADMIN)
                                <li class="nav-main-heading">Certificate</li>
                                <li class="nav-main-item {{ request()->is('admin/certificates/lsup') || request()->is('admin/certificates/lsup/*') || request()->is('admin/certificates/chse') || request()->is('admin/certificates/chse/*') ? 'open' : '' }}">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                        <i class="nav-main-link-icon fa fa-plane-up"></i>
                                        <span class="nav-main-link-name">Pariwisata</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item active">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/lsup') || request()->is('admin/certificates/lsup/*') ? 'active' : '' }}" href="{{ url('admin/certificates/lsup') }}">
                                                <span class="nav-main-link-name">LSUP</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/chse') || request()->is('admin/certificates/chse/*') ? 'active' : '' }}" href="{{ url('admin/certificates/chse') }}">
                                            <span class="nav-main-link-name">CHSE</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item {{ request()->is('admin/certificates/lspro') || request()->is('admin/certificates/lspro/*') || request()->is('admin/certificates/pasarRakyat') || request()->is('admin/certificates/pasarRakyat/*') ? 'open' : '' }}">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                        <i class="nav-main-link-icon fa fa-cube"></i>
                                        <span class="nav-main-link-name">SNI</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item active">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/lspro') || request()->is('admin/certificates/lspro/*') ? 'active' : '' }}" href="{{ url('admin/certificates/lspro') }}">
                                                <span class="nav-main-link-name">LSPRO</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/pasarRakyat') || request()->is('admin/certificates/pasarRakyat/*') ? 'active' : '' }}" href="{{ url('admin/certificates/pasarRakyat') }}">
                                            <span class="nav-main-link-name">Pasar Rakyat</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->is('admin/certificates/ispo') || request()->is('admin/certificates/ispo/*') ? 'active' : '' }}" href="{{ url('admin/certificates/ispo') }}">
                                        <i class="nav-main-link-icon fa fa-seedling"></i>
                                        <span class="nav-main-link-name">ISPO</span>
                                    </a>
                                </li>
                                <li class="nav-main-item {{ request()->is('admin/certificates/9001') || request()->is('admin/certificates/9001/*') || request()->is('admin/certificates/45001') || request()->is('admin/certificates/37001/*') || request()->is('admin/certificates/37001') || request()->is('admin/certificates/37001/*') ? 'open' : '' }}">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                        <i class="nav-main-link-icon fa fa-award"></i>
                                        <span class="nav-main-link-name">Management</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item active">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/9001') || request()->is('admin/certificates/9001/*') ? 'active' : '' }}" href="{{ url('admin/certificates/9001') }}">
                                                <span class="nav-main-link-name">ISO 9001</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/45001') || request()->is('admin/certificates/45001/*') ? 'active' : '' }}" href="{{ url('admin/certificates/45001') }}">
                                            <span class="nav-main-link-name">ISO 45001</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ request()->is('admin/certificates/37001') || request()->is('admin/certificates/37001/*') ? 'active' : '' }}" href="{{ url('admin/certificates/37001') }}">
                                            <span class="nav-main-link-name">ISO 37001</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                @if (auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN || auth()->user()->role == App\Constant::ROLE_AUTHOR)
                                <li class="nav-main-heading">Article</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : '' }}" href="{{ url('admin/articles') }}">
                                        <i class="nav-main-link-icon fa fa-newspaper"></i>
                                        <span class="nav-main-link-name">Articles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}" href="{{ url('admin/categories') }}" href="{{ url('admin/categories') }}">
                                        <i class="nav-main-link-icon si si-grid"></i>
                                        <span class="nav-main-link-name">Categories</span>
                                    </a>
                                </li>
                                @endif
                                @if (auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN || auth()->user()->role == App\Constant::ROLE_ADMIN)
                                <li class="nav-main-heading">Services</li>
                                <li class="nav-main-item {{ Request::path() == 'admin/services/category/iso/9001' ||  Request::path() == 'admin/services/category/iso/45001' ||  Request::path() == 'admin/services/category/iso/37001' || Request::path() == 'admin/services/category/sni/lspro' ||  Request::path() == 'admin/services/category/sni/pasar-rakyat' ||  Request::path() == 'admin/services/category/sni/jasa-rehabilitasi' || Request::path() == 'admin/services/category/pariwisata/lsup' ||  Request::path() == 'admin/services/category/pariwisata/chse' ||  Request::path() == 'admin/services/category/pariwisata/sertifikasi-bintang' || Request::path() == 'admin/services/category/ispo' || Request::path() == 'admin/services/category/uji-laboratorium' || Request::path() == 'admin/services/category/inspeksi' ? 'open' : '' }}">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-magic-wand"></i>
                                        <span class="nav-main-link-name">Category</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/category/iso/9001' ||  Request::path() == 'admin/services/category/iso/45001' ||  Request::path() == 'admin/services/category/iso/37001' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">ISO</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/services/category/iso/9001') || request()->is('admin/services/category/iso/9001/*') ? 'active' : '' }}" href="{{ url('/admin/services/category/iso/9001')}}">
                                                <span class="nav-main-link-name">9001</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/services/category/iso/45001') || request()->is('admin/services/category/iso/45001/*') ? 'active' : '' }}" href="{{ url('/admin/services/category/iso/45001')}}">
                                                <span class="nav-main-link-name">45001</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/services/category/iso/37001') || request()->is('admin/services/category/iso/37001/*') ? 'active' : '' }}" href="{{ url('/admin/services/category/iso/37001')}}">
                                                <span class="nav-main-link-name">37001</span>
                                                </a>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/category/sni/lspro' ||  Request::path() == 'admin/services/category/sni/pasar-rakyat' ||  Request::path() == 'admin/services/category/sni/jasa-rehabilitasi' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">SNI</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->is('admin/services/category/sni/lspro') || request()->is('aadmin/services/category/sni/lspro/*') ? 'active' : '' }}" href="{{ url('/admin/services/category/sni/lspro')}}">
                                                    <span class="nav-main-link-name">LSPRO</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-main-item {{ Request::path() == 'admin/services/category/sni/pasar-rakyat' ||  Request::path() == 'admin/services/category/sni/jasa-rehabilitasi' ? 'open' : '' }}">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Jasa</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link {{ Request::path() == 'admin/services/category/sni/pasar-rakyat' ? 'active' : '' }}" href="{{ url('/admin/services/category/sni/pasar-rakyat')}}">
                                                                <span class="nav-main-link-name">Pasar Rakyat</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link {{ Request::path() == 'admin/services/category/sni/jasa-rehabilitasi' ? 'active' : '' }}" href="{{ url('/admin/services/category/sni/jasa-rehabilitasi')}}">
                                                            <span class="nav-main-link-name">Jasa Rehabilitasi</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/category/pariwisata/lsup' ||  Request::path() == 'admin/services/category/pariwisata/chse' ||  Request::path() == 'admin/services/category/pariwisata/sertifikasi-bintang' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Pariwisata</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ request()->is('admin/services/category/pariwisata/lsup') || request()->is('admin/services/category/pariwisata/lsup/*') ? 'active' : '' }}" href="{{ url('/admin/services/category/pariwisata/lsup')}}">
                                                    <span class="nav-main-link-name">LSUP</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/category/pariwisata/chse' ? 'active' : '' }}" href="{{ url('/admin/services/category/pariwisata/chse')}}">
                                                    <span class="nav-main-link-name">CHSE</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/category/pariwisata/sertifikasi-bintang' ? 'active' : '' }}" href="{{ url('/admin/services/category/pariwisata/sertifikasi-bintang')}}">
                                                    <span class="nav-main-link-name">Sertifikasi Bintang</span>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/category/ispo' ? 'active' : '' }}" href="{{ url('/admin/services/category/ispo')}}">
                                                <span class="nav-main-link-name">ISPO</span>
                                            </a>
                                        </li>
                                        {{-- <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/category/uji-laboratorium' ? 'active' : '' }}" href="{{ url('/admin/services/category/uji-laboratorium')}}">
                                                <span class="nav-main-link-name">Uji Laboratorium</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/category/inspeksi' ? 'active' : '' }}" href="{{ url('/admin/services/category/inspeksi')}}">
                                                <span class="nav-main-link-name">Inspeksi</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-main-item {{ Request::path() == 'admin/services/schema/iso/9001' || Request::path() == 'admin/services/schema/iso/45001' || Request::path() == 'admin/services/schema/iso/37001'|| Request::path() == 'admin/services/schema/sni/lspro' || Request::path() == 'admin/services/schema/sni/jasa/pasar-rakyat' || Request::path() == 'admin/services/schema/sni/jasa/jasa-rehabilitasi' || Request::path() == 'admin/services/schema/ispo' || Request::path() == 'admin/services/schema/uji-laboratorium' || Request::path() == 'admin/services/schema/inspeksi' || Request::path() == 'admin/services/schema/pariwisata/lsup' || Request::path() == 'admin/services/schema/pariwisata/chse' || Request::path() == 'admin/services/schema/pariwisata/sertifikasi-bintang' ? 'open' : '' }}">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-magic-wand"></i>
                                        <span class="nav-main-link-name">Schema</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/schema/iso/9001' || Request::path() == 'admin/services/schema/iso/45001' || Request::path() == 'admin/services/schema/iso/37001' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">ISO</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/iso/9001' ? 'active' : '' }}" href="{{ url('/admin/services/schema/iso/9001')}}">
                                                    <span class="nav-main-link-name">9001</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/iso/45001' ? 'active' : '' }}" href="{{ url('/admin/services/schema/iso/45001')}}">
                                                    <span class="nav-main-link-name">45001</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/iso/37001' ? 'active' : '' }}" href="{{ url('/admin/services/schema/iso/37001')}}">
                                                    <span class="nav-main-link-name">37001</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/schema/sni/lspro' || Request::path() == 'admin/services/schema/sni/jasa/pasar-rakyat' || Request::path() == 'admin/services/schema/sni/jasa/jasa-rehabilitasi' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">SNI</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/sni/lspro' ? 'active' : '' }}" href="{{ url('/admin/services/schema/sni/lspro')}}">
                                                    <span class="nav-main-link-name">LSPRO</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-main-item {{ Request::path() == 'admin/services/schema/sni/jasa/pasar-rakyat' || Request::path() == 'admin/services/schema/sni/jasa/jasa-rehabilitasi' ? 'open' : '' }}">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Jasa</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item ">
                                                            <a class="nav-main-link {{ Request::path() == 'admin/services/schema/sni/jasa/pasar-rakyat' ? 'active' : '' }}" href="{{ url('/admin/services/schema/sni/jasa/pasar-rakyat')}}">
                                                                <span class="nav-main-link-name">Pasar Rakyat</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link {{ Request::path() == 'admin/services/schema/sni/jasa/jasa-rehabilitasi' ? 'active' : '' }}" href="{{ url('/admin/services/schema/sni/jasa/jasa-rehabilitasi')}}">
                                                            <span class="nav-main-link-name">Jasa Rehabilitasi</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li class="nav-main-item {{ Request::path() == 'admin/services/schema/pariwisata/lsup' || Request::path() == 'admin/services/schema/pariwisata/chse' || Request::path() == 'admin/services/schema/pariwisata/sertifikasi-bintang' ? 'open' : '' }}">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                            <span class="nav-main-link-name">Pariwisata</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/pariwisata/lsup' ? 'active' : '' }}" href="{{ url('/admin/services/schema/pariwisata/lsup')}}">
                                                    <span class="nav-main-link-name">LSUP</span>
                                                    </a>
                                                </li>
                                                {{-- <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/pariwisata/chse' ? 'active' : '' }}" href="{{ url('/admin/services/schema/pariwisata/chse')}}">
                                                    <span class="nav-main-link-name">CHSE</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link {{ Request::path() == 'admin/services/schema/pariwisata/sertifikasi-bintang' ? 'active' : '' }}" href="{{ url('/admin/services/schema/pariwisata/sertifikasi-bintang')}}">
                                                    <span class="nav-main-link-name">Sertifikasi Bintang</span>
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/schema/ispo' ? 'active' : '' }}" href="{{ url('/admin/services/schema/ispo')}}">
                                                <span class="nav-main-link-name">ISPO</span>
                                            </a>
                                        </li>
                                        {{-- <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/schema/uji-laboratorium' ? 'active' : '' }}" href="{{ url('/admin/services/schema/uji-laboratorium')}}">
                                                <span class="nav-main-link-name">Uji Laboratorium</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link {{ Request::path() == 'admin/services/schema/inspeksi' ? 'active' : '' }}" href="{{ url('/admin/services/schema/inspeksi')}}">
                                                <span class="nav-main-link-name">Inspeksi</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-main-heading">Client</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/clients' ? 'active' : '' }}" href="{{ url('admin/clients') }}">
                                        <i class="nav-main-link-icon fa fa-user-group"></i>
                                        <span class="nav-main-link-name">Clients</span>
                                    </a>
                                </li>
                                @endif
                                @if (auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN || auth()->user()->role == App\Constant::ROLE_AUTHOR)
                                <li class="nav-main-heading">Configuration</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/slider' ? 'active' : '' }}" href="{{ url('admin/slider/') }}">
                                        <i class="nav-main-link-icon fa fa-sliders"></i>
                                        <span class="nav-main-link-name">Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/pop-up' ? 'active' : '' }}" href="{{ url('admin/pop-up/') }}">
                                        <i class="nav-main-link-icon far fa-square"></i>
                                        <span class="nav-main-link-name">Pop Up</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/gallery' ? 'active' : '' }}" href="{{ url('admin/gallery/') }}">
                                        <i class="nav-main-link-icon far fa-images"></i>
                                        <span class="nav-main-link-name">Gallery</span>
                                    </a>
                                </li>
                                @endif
                                @if (auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN || auth()->user()->role == App\Constant::ROLE_ADMIN || auth()->user()->role == App\Constant::ROLE_AUTHOR)
                                <li class="nav-main-heading">Message</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/messages/kelengkapan-pengajuan' ? 'active' : '' }}" href="{{ url('admin/messages/kelengkapan-pengajuan/') }}">
                                        <i class="nav-main-link-icon far fa-envelope"></i>
                                        <span class="nav-main-link-name">Kelengkapan Pengajuan</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/messages/kritik-dan-saran' ? 'active' : '' }}" href="{{ url('admin/messages/kritik-dan-saran/') }}">
                                        <i class="nav-main-link-icon far fa-comments"></i>
                                        <span class="nav-main-link-name">Kritik dan Saran</span>
                                    </a>
                                </li>
                                @endif
                                @if(auth()->user()->role == App\Constant::ROLE_SUPER_ADMIN)
                                <li class="nav-main-heading">Settings</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link {{ Request::path() == 'admin/users' ? 'active' : '' }}" href="{{ url('admin/users/') }}">
                                        <i class="nav-main-link-icon fa fa-users-gear"></i>
                                        <span class="nav-main-link-name">Users</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>

                <header id="page-header">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>
                            {{-- <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                            <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                    <span class="input-group-text border-0">
                                        <i class="fa fa-fw fa-search"></i>
                                    </span>
                                </div>
                            </form> --}}
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="dropdown d-inline-block ms-2">
                                <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle" src="{{ auth()->user()->photo != '' ? asset('storage/images/profile/' . auth()->user()->photo) : asset('assets/admin/media/avatars/avatar0.jpg') }}" alt="Header Avatar" style="width: 21px;">
                                    <span class="d-none d-sm-inline-block ms-2">{{ auth()->user()->name }}</span>
                                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                                    <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ auth()->user()->photo != '' ? asset('storage/images/profile/' . auth()->user()->photo) : asset('assets/admin/media/avatars/avatar0.jpg') }}" alt="">
                                        <p class="mt-2 mb-0 fw-medium">{{ auth()->user()->name }}</p>
                                        @if (auth()->user()->role == 0)
                                            <p class="mb-0 text-muted fs-sm fw-medium">Super Admin</p>
                                        @elseif (auth()->user()->role == 1)
                                            <p class="mb-0 text-muted fs-sm fw-medium">Admin</p>
                                        @elseif (auth()->user()->role == 2)
                                            <p class="mb-0 text-muted fs-sm fw-medium">Author</p>
                                        @endif
                                    </div>
                                    <div class="p-2">
                                        {{-- <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                            <span class="fs-sm fw-medium">Inbox</span>
                                            <span class="badge rounded-pill bg-primary ms-2">3</span>
                                        </a> --}}
                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ url('admin/profile/'.auth()->user()->id) }}">
                                            <span class="fs-sm fw-medium">Profile</span>
                                            {{-- <span class="badge rounded-pill bg-primary ms-2">1</span> --}}
                                        </a>
                                        {{-- <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                            <span class="fs-sm fw-medium">Settings</span>
                                        </a> --}}
                                    </div>
                                    <div role="separator" class="dropdown-divider m-0"></div>
                                    <div class="p-2">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <span class="fs-sm fw-medium">{{ __('Log Out') }}</span>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="page-header-search" class="overlay-header bg-body-extra-light">
                        <div class="content-header">
                            <form class="w-100" action="be_pages_generic_search.html" method="POST">
                                <div class="input-group">
                                    <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                        <div class="content-header">
                            <div class="w-100 text-center">
                                <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                            </div>
                        </div>
                    </div>

                </header>

                <main id="main-container">
                    @yield('content')
                    @stack('end_of_content')
                </main>

                <footer id="page-footer" class="bg-body-light">
                    <div class="content py-3">
                        <div class="row fs-sm">
                            <div class="col-sm-12 order-sm-1 py-1 text-center text-sm-start">
                                <a class="fw-semibold" target="_blank">PT Global Inspeksi Sertifikasi.</a> &copy; <span data-toggle="year-copy"></span>. All Rights Reserved
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script>
                var tags = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    prefetch: {
                        url: '/tag-names',
                        cache: false
                    }
                });
                tags.initialize();

                $('[name=tags]').tagsinput( {
                    typeaheadjs: {
                        name: 'tags',
                        source: tags.ttAdapter()
                    }
                });
            </script>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.min.js" integrity="sha512-LXVbtSLdKM9Rpog8WtfAbD3Wks1NSDE7tMwOW3XbQTPQnaTrpIot0rzzekOslA1DVbXSVzS7c/lWZHRGkn3Xpg==" crossorigin="anonymous"></script>

            <script src="{{ asset('assets/admin/js/oneui.app.min.js') }}"></script>
            {{-- <script src="{{ asset('assets/admin/js/plugins/chart.js/chart.min.js') }}"></script> --}}
            <script src="{{ asset('assets/admin/js/pages/be_pages_dashboard.min.js') }}"></script>

            <!-- jQuery (required for DataTables plugin) -->
            <script src="{{ asset('assets/admin/js/lib/jquery.min.js') }}"></script>

            <!-- Page JS Plugins -->
            <script src="{{ asset('assets/admin/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

            <!-- Page JS Code -->
            <script src="{{ asset('assets/admin/js/pages/be_tables_datatables.min.js') }}"></script>


            {{-- <script src="{{ asset('assets/tinymce/js/tinymce/tinymce.min.js') }}"></script> --}}

            <!-- Page JS Plugins -->
            {{-- <script src="{{ asset('assets/admin/js/plugins/ckeditor5-classic/build/ckeditor.js') }}"></script> --}}

            {{-- <!-- Page JS Helpers (CKEditor 5 plugins) -->
            <script>One.helpersOnLoad(['js-ckeditor5']);</script> --}}

            <!-- Page JS Plugins -->
            <script src="{{ asset('assets/admin/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/select2/js/select2.full.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

            <script src="https://unpkg.com/@yaireo/tagify"></script>
            <script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
            <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
            <script>One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider']);</script>
            @stack('scripts')

            @stack('js')

            @yield('footer')

            @yield('chart')

    </body>
</html>
