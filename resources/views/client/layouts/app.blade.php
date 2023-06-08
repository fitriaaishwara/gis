<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="PT. Global Inspeksi Sertifikasi">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Jasa Sertifikasi ISO 9001, 45001, 37001, LSUP, LSPRO, ISPO,CHE.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url('assets/client/images/GIS/logo.png') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets/client/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('assets/client/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('assets/client/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets/client/css/responsive.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets/client/css/custom.css') }}" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    </head>
    <body data-mobile-nav-style="classic">

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar top-space navbar-expand-lg navbar-boxed navbar-dark bg-custom header-dark fixed-top responsive-sticky">
                <div class="container-fluid nav-header-container">
                    <div class="col-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand"href="{{ url('/')}}">
                            <img src="{{ url('assets/client/images/GIS/logo-teks.png') }}" data-at2x="{{ url('assets/client/images/GIS/logo-teks.png') }}" class="default-logo" width="1000px"alt="">
                            <img src="{{ url('assets/client/images/GIS/logo-teks.png') }}" data-at2x="{{ url('assets/client/images/GIS/logo-teks.png') }}" class="alt-logo"  width="1000px"alt="">
                            <img src="{{ url('assets/client/images/GIS/logo-teks.png') }}" data-at2x="{{ url('assets/client/images/GIS/logo-teks.png') }}" class="mobile-logo" alt="">
                        </a>
                    </div>
                    <div class="col-auto menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ url('/') }}" class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ url('/about-us') }}" class="nav-link {{ Request::path() === 'about-us' ? 'active' : '' }}" href="{{ url('/about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link {{ Request::path() === 'sertifikasi-iso/9001' || Request::path() === 'sertifikasi-iso/45001' || Request::path() === 'sertifikasi-iso/37001' || Request::path() === 'sertifikasi-sni/produk' || Request::path() === 'sertifikasi-sni/proses' || Request::path() === 'sertifikasi-sni/produk/jasa/pasar-rakyat' || Request::path() === 'sertifikasi-sni/produk/jasa/layanan-rehabilitasi' || Request::path() === 'sertifikasi-pariwisata/usaha-pariwisata' || Request::path() === 'sertifikasi-pariwisata/chse' ||  Request::path() === 'sertifikasi-pariwisata/sertifikasi-bintang' || Request::path() === 'sertifikasi-ispo' ||  Request::path() === 'uji-laboratorium' || Request::path() === 'inspeksi' ? 'active' : '' }}">Services</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown {{ Request::path() === 'sertifikasi-iso/9001' || Request::path() === 'sertifikasi-iso/45001' || Request::path() === 'sertifikasi-iso/37001' ? 'active' : '' }}">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Sertifikasi ISO<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-iso/9001' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-iso/9001') }}">ISO 9001</li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-iso/45001' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-iso/45001') }}">ISO 45001</a></li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-iso/37001' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-iso/37001') }}">ISO 37001</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'sertifikasi-sni/produk' || Request::path() === 'sertifikasi-sni/proses' || Request::path() === 'sertifikasi-sni/produk/jasa/pasar-rakyat' || Request::path() === 'sertifikasi-sni/produk/jasa/layanan-rehabilitasi'? 'active' : '' }}">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Sertifikasi SNI<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-sni/produk' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-sni/produk') }}">Produk</li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-sni/proses' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-sni/proses') }}">Proses</a></li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-sni/produk/jasa/pasar-rakyat' ||  Request::path() === 'sertifikasi-sni/produk/jasa/layanan-rehabilitasi' ? 'active' : '' }}">
                                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">Jasa<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown {{ Request::path() === 'sertifikasi-sni/produk/jasa/pasar-rakyat' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-sni/produk/jasa/pasar-rakyat') }}">Pasar Rakyat</a></li>
                                                        <li class="dropdown {{ Request::path() === 'sertifikasi-sni/produk/jasa/layanan-rehabilitasi' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-sni/produk/jasa/layanan-rehabilitasi') }}">Layanan Rehabilitasi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'sertifikasi-pariwisata/usaha-pariwisata' || Request::path() === 'sertifikasi-pariwisata/chse' ||  Request::path() === 'sertifikasi-pariwisata/sertifikasi-bintang' ? 'active' : '' }}">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Sertifikasi Pariwisata<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-pariwisata/usaha-pariwisata' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-pariwisata/usaha-pariwisata') }}">Usaha Pariwisata</li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-pariwisata/chse' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-pariwisata/chse') }}">CHSE</a></li>
                                                <li class="dropdown {{ Request::path() === 'sertifikasi-pariwisata/sertifikasi-bintang' ? 'active' : '' }}"><a href="{{ url('/sertifikasi-pariwisata/sertifikasi-bintang') }}">Sertifikasi Bintang</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'sertifikasi-ispo' ? 'active' : '' }}">
                                            <a href="{{ url('/sertifikasi-ispo') }}">Sertifikasi ISPO</i></a>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'uji-laboratorium' ? 'active' : '' }}">
                                            <a href="{{ url('/uji-laboratorium') }}">Uji Laboratorium</i></a>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'inspeksi' ? 'active' : '' }}">
                                            <a href="{{ url('/inspeksi') }}">Inspeksi</i></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link {{ Request::path() === 'proses-sertifikasi/flowchart-sertifikasi' ||  Request::path() === 'proses-sertifikasi/keluhan-dan-banding' || Request::path() === 'proses-sertifikasi/tanggung-gugat-ls' || Request::path() === 'artikel' || Request::path() === 'gallery' || Request::path() === 'verifikasi-sertifikat' || Request::path() === 'informasi-proses-sertifikasi' ? 'active' : '' }}">Information</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown {{ Request::path() === 'proses-sertifikasi/flowchart-sertifikasi' || Request::path() === 'proses-sertifikasi/keluhan-dan-banding' || Request::path() === 'proses-sertifikasi/tanggung-gugat-ls' ? 'active' : '' }}">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Proses Sertifikasi<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown {{ Request::path() === 'proses-sertifikasi/flowchart-sertifikasi' ? 'active' : '' }}"><a href="{{ url('/proses-sertifikasi/flowchart-sertifikasi') }}">Flowchart Sertifikasi</a></li>
                                                <li class="dropdown {{ Request::path() === 'proses-sertifikasi/keluhan-dan-banding' ? 'active' : '' }}"><a href="{{ url('/proses-sertifikasi/keluhan-dan-banding') }}">Keluhan dan Banding</a></li>
                                                {{-- <li class="dropdown {{ Request::path() === 'proses-sertifikasi/tanggung-gugat-ls' ? 'active' : '' }}"><a href="{{ url('/proses-sertifikasi/tanggung-gugat-ls') }}">Tanggung Gugat LS</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'artikel' ? 'active' : '' }}">
                                            <a href="{{ url('/artikel') }}">Artikel</a>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'gallery' ? 'active' : '' }}">
                                            <a href="{{ url('/gallery') }}">Gallery</a>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'verifikasi-sertifikat' ? 'active' : '' }}">
                                            <a href="{{ url('/verifikasi-sertifikat') }}">Verification Certificate</a>
                                        </li>
                                        <li class="dropdown {{ Request::path() === 'informasi-proses-sertifikasi' ? 'active' : '' }}">
                                            <a href="{{ url('/informasi-proses-sertifikasi') }}">Informasi Proses Sertifikasi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="{{ url('/customer-list') }}" class="nav-link {{ Request::path() === 'customer-list' ? 'active' : '' }}">Customers</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ url('/contact-us') }}" class="nav-link {{ Request::path() === 'contact-us' ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-end pe-0 font-size-0">
                        <div class="header-search-icon search-form-wrapper">
                            {{-- <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                            <!-- start search input -->
                            <div class="form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-start" action="search-result.html">
                                    <div class="search-form-box">
                                        <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end search input --> --}}
                        </div>
                        <div class="header-language dropdown">
                            <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                            <ul class="dropdown-menu alt-font">
                                <li><a href="javascript:void(0);" title="Indonesia"><span class="icon-country"><img src="{{ url('assets/client/images/country-flag-16X16/Indonesia.png') }}" alt=""></span>Indonesia</a></li>
                                <li><a href="javascript:void(0);" title="England"><span class="icon-country"><img src="{{ url('assets/client/images/country-flag-16X16/england.png') }}" alt=""></span>England</a></li>
                            </ul>
                        </div>
                        {{-- <div class="header-cart-icon dropdown">
                            <a href="javascript:void(0);"><i class="feather icon-feather-shopping-bag"></i><span class="cart-count alt-font bg-fast-blue text-white">2</span></a>
                            <ul class="dropdown-menu cart-item-list">
                                <li class="cart-item align-items-center">
                                    <a href="javascript:void(0);" class="alt-font close">×</a>
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="https://via.placeholder.com/150x191" class="cart-thumb" alt="" /></a>
                                    </div>
                                    <div class="product-detail alt-font">
                                        <a href="single-product.html">Delica Omtantur</a>
                                        <span class="item-ammount">$100.00</span>
                                    </div>
                                </li>
                                <li class="cart-item align-items-center">
                                    <a href="javascript:void(0);" class="alt-font close">×</a>
                                    <div class="product-image">
                                        <a href="single-product.html"><img src="https://via.placeholder.com/150x191" class="cart-thumb" alt="" /></a>
                                    </div>
                                    <div class="product-detail alt-font">
                                        <a href="single-product.html">Gianvito Rossi</a>
                                        <span class="item-ammount">$99.99</span>
                                    </div>
                                </li>
                                <li class="cart-item cart-total">
                                    <div class="alt-font margin-15px-bottom"><span class="w-50 d-inline-block text-medium text-uppercase">Subtotal:</span><span class="w-50 d-inline-block text-end text-medium font-weight-500">$199.99</span></div>
                                    <a href="shopping-cart.html" class="btn btn-small btn-dark-gray">view cart</a>
                                    <a href="checkout.html" class="btn btn-small btn-fast-blue">checkout</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        @yield('content')
        @stack('end_of_content')

        <!-- start section -->
        <section class="parallax padding-100px-tb md-padding-75px-tb sm-padding-50px-tb" data-parallax-background-ratio="0.1" style="background-image: url({{ asset ('assets/client/images/GIS/landing/footer.jpg')}}">
            <div class="opacity-medium bg-medium-slate-blue"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                        <h4 class="alt-font font-weight-600 text-white mb-0" style="font-size: 200%">Gearing your company through an innovative strategy</h4>
                    </div>
                    <div class="col-12 col-xl-5 col-md-4 text-center text-md-end">
                        <a href="{{ route('contact') }}" class="btn btn-extra-large btn-primary-button btn-slide-right-bg btn-round-edge">Contact Us<span class="bg-medium-slate-blue"></span></a>
                    </div>
                </div>
            </div>
            {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-5a368319-b5b1-4815-b04f-4ddefdba711d" ></div> --}}
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="footer-decor bg-custom-footer">
            <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->

                        <div class="col-12 col-lg-3 col-sm-6 order-sm-1 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                            {{-- <a href="{{ url('/') }}" class="footer-logo margin-20px-bottom d-inline-block"><img src="{{ url('assets/client/images/GIS/logo-teks.png') }}" data-at2x="{{ url('assets/client/images/GIS/logo-teks.png') }}" alt="" width="500"></a> --}}
                            <a href="{{ url('/') }}" class=" margin-20px-bottom d-inline-block"><img src="{{ url('assets/client/images/GIS/logo-teks.png') }}" data-at2x="{{ url('assets/client/images/GIS/logo.png') }}" alt="" width="500"></a>
                            {{-- <p class="margin-30px-bottom text-white-transparent" style="text-align: justify;" >PT. Global Inspeksi Sertifikasi</p> --}}

                            <a class="text-white-transparent" style="text-align: justify;" >Untuk informasi lebih lanjut silahkan hubungi:</a>
                            <br><a class="alt-font text-extra-small font-weight-500 d-inline-block text-white-transparent" href="https://www.instagram.com/ptglobalinspeksisertifikasi/" target="_blank"><i class="fab fa-instagram icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">ptglobalinspeksisertifikasi</span></a>
                            <a class="alt-font text-extra-small font-weight-500 d-inline-block text-white-transparent" href="https://www.facebook.com/profile.php?id=100083356178054&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook icon-extra-small align-middle margin-10px-right text-gradient-fast-blue-purple"></i><span class="d-inline-block align-middle">Global Inspeksi Sertifikasi</span></a>
                            <a class="alt-font text-extra-small font-weight-500 d-inline-block text-white-transparent" href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang Sertifikasi ISO dan Lainnya" target="_blank"><i class="fab fa-whatsapp icon-extra-small align-middle margin-10px-right text-gradient-turquoise-green-yellowish "></i><span class="d-inline-block align-middle">(+62) 81386647726</span></a>
                            <br><a class="alt-font text-extra-small font-weight-500 d-inline-block text-white-transparent" href="mailto:csglobalinspeksisertifikasi@gmail.com" target="_blank"><i class="fas fa-envelope icon-extra-small align-middle margin-10px-right text-gradient-magenta-orange"></i><span class="d-inline-block align-middle">Send Mail</span></a>
                            {{-- <div class="social-icon-style-12">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook text-white" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="dribbble text-white" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="twitter text-white" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="instagram text-white" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 offset-lg-1 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="{{ route('about') }}" class="text-white-transparent">About company</a></li>
                                <li><a href="{{ route('customerList') }}" class="text-white-transparent">Customer</a></li>
                                <li><a href="{{ route('contact') }}" class="text-white-transparent">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Services</span>
                            <ul>
                                <span class="alt-font font-weight-500 d-block text-white">ISO</span>
                                <li><a class="text-white-transparent" href="{{ route('iso9001') }}">ISO 9001</a></li>
                                <li><a class="text-white-transparent" href="{{ route('iso45001') }}">ISO 45001</a></li>
                                <li><a class="text-white-transparent" href="{{ route('iso37001') }}">ISO 37001</a></li>
                                <span class="alt-font font-weight-500 d-block text-white">SNI</span>
                                <li><a class="text-white-transparent" href="{{ route('sniProduk') }}">Produk</a></li>
                                <li><a class="text-white-transparent" href="{{ route('sniProses') }}">Proses</a></li>
                                <li><a class="text-white-transparent" href="{{ route('sniPasar') }}">Pasar Rakyat</a></li>
                                <li><a class="text-white-transparent" href="{{ route('sniRehab') }}">Layanan Rehabilitasi</a></li>
                                <span class="alt-font font-weight-500 d-block text-white">Pariwisata</span>
                                <li><a class="text-white-transparent" href="{{ route('sertifikasiPariwisata') }}">Usaha Pariwisata</a></li>
                                <li><a class="text-white-transparent" href="{{ route('sertifikasiChse') }}">CHSE</a></li>
                                <li><a class="text-white-transparent" href="{{ route('sertifikasiBintang') }}">Sertifikasi Bintang</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Google Maps</span>
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7869632283964!2d106.63759621529569!3d-6.291706363333853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb5ac8ae468f%3A0xf65bbc9dde2b1a5d!2sPT.%20Global%20Inspeksi%20Sertifikasi!5e0!3m2!1sen!2sid!4v1672711266831!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <ul>
                                <li><a class="text-white-transparent popup-googlemap" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7869632283964!2d106.63759621529569!3d-6.291706363333853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb5ac8ae468f%3A0xf65bbc9dde2b1a5d!2sPT.%20Global%20Inspeksi%20Sertifikasi!5e0!3m2!1sen!2sid!4v1672711266831!5m2!1sen!2sid">Open Google Map</a></li>
                            </ul>
                            <br>
                            <ul>
                                <span class="alt-font font-weight-500 d-block text-white">Services Lainnya</span>
                                <li><a class="text-white-transparent" href="{{ route('sertifikasiIspo') }}">ISPO</a></li>
                                <li><a class="text-white-transparent" href="{{ route('ujiLab') }}">Uji Laboratorium</a></li>
                                <li><a class="text-white-transparent" href="{{ route('inspeksi') }}">Inspeksi</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>

            <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom text-white">
                            <p class="text-white-transparent">© 2023. <a class="text-white-transparent" href="{{ url('/')}}" target="_blank">PT Global Inspeksi Sertifikasi. All Rights Reserved</a></p>
                            <p class="text-white-transparent">Designed by <a class="text-white-transparent" href="https://erakonsultan.com/" target="_blank"><img src="https://erakonsultan.com/wp-content/uploads/2021/02/LOGO2-1.png" alt="Era Konsultan" style="width: 100px;"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{ url('assets/client/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/client/js/theme-vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/client/js/main.js') }}"></script>

        @stack('js')

        <script>
            /* Whatsapp Chat Widget by www.idblanter.com */
            $(document).on("click","#send-it",function(){var a=document.getElementById("chat-input");if(""!=a.value){var b=$("#get-number").text(),c=document.getElementById("chat-input").value,d="https://web.whatsapp.com/send",e=b,f="&text="+c;if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))var d="whatsapp://send";var g=d+"?phone="+e+f;window.open(g, '_blank')}}),$(document).on("click",".informasi",function(){document.getElementById("get-number").innerHTML=$(this).children(".my-number").text(),$(".start-chat,.get-new").addClass("show").removeClass("hide"),$(".home-chat,.head-home").addClass("hide").removeClass("show"),document.getElementById("get-nama").innerHTML=$(this).children(".info-chat").children(".chat-nama").text(),document.getElementById("get-label").innerHTML=$(this).children(".info-chat").children(".chat-label").text()}),$(document).on("click",".close-chat",function(){$("#whatsapp-chat").addClass("hide").removeClass("show")}),$(document).on("click",".blantershow-chat",function(){$("#whatsapp-chat").addClass("show").removeClass("hide")});
        </script>
    </body>
</html>
