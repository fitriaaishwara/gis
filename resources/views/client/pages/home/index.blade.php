@extends('client.layouts.app')
@section('content')
@section('title', 'Global Inspeksi Sertifikasi')
@section('meta_description', '')
@section('meta_keywords', '')

@if (!empty($popup->image))
<div class="modal fade" id="popup">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-body">
                    <a href="{{ $popup->url }}" target="_blank">
                        <img src="{{ url ('storage/images/popup/' . $popup->image) }}" alt="popup" class="img-fluid">
                    </a>
                </div>
            </div>
    </div>
</div>
@endif


<!-- start section -->
<section class="p-0">
    <div class="swiper-container white-move mobileoff-fullscreen-top-space md-h-600px sm-h-500px" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->

            @if ($sliders->isEmpty())

                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('{{ url('assets/client/images/GIS/landing/cust_list.jpg')}}');">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">PT Global Inspeksi Sertifikasi</h2>
                                {{-- <div class="d-inline-block">
                                    <a href="#" target="_blank" class="btn btn-fancy btn-medium btn-custom margin-30px-right xs-margin-15px-bottom">Learn Now</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            @else
                @foreach ($sliders as $slider)
                <div class="swiper-slide cover-background" style="background-image: url('{{ url('storage/images/slider/' .$slider->image) }}');">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">{{ $slider->title }}</h2>
                                <div class="d-inline-block">
                                    @if ($slider->button_status == 1)
                                        <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-fancy btn-medium btn-custom margin-30px-right xs-margin-15px-bottom">{{ $slider->button_text }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-light-pagination"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!-- <div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07"><i class="feather icon-feather-arrow-right"></i></div>
        <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07"><i class="feather icon-feather-arrow-left"></i></div>  -->
        <!-- end slider navigation -->
    </div>

</section>
<!-- end section -->

<!-- start section -->
<section class="big-section bg-seashell p-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="d-flex flex-column">
                    <div class="row">
                        <div class="col-12 col-sm-6 cover-background xs-h-300px wow animate__fadeIn" data-wow-delay="0.4s" style="background-image: url('{{ asset('assets/client/images/GIS/landing/about_us.jpg')}}')"></div>
                        <div class="col-12 col-sm-6 bg-seashell wow animate__fadeIn" data-wow-delay="0.5s">
                            <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                <span class="d-inline-block alt-font text-extra-large text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom" style="font-size:100%">About Us</span>
                                <span class="alt-font font-weight-600 text-white text-large margin-20px-bottom d-block" style="font-size:200%">PT. Global Inspeksi Sertifikasi</span>
                                <p class="text-white-transparent">PT. Global Inspeksi Sertifikasi memberikan layanan proses sertifikasi produk dan sertifikasi sistem manajemen yang profesional, dapat diandalkan, terpercaya, serta independen untuk peningkatan potensi perusahaan anda secara berkelanjutan secara efektif dan efisien. PT. Global Inspeksi Sertifikasi juga didukung oleh personel yang berpengalaman dalam bidang sertifikasi yang memilki pemahaman yang dibutuhkan perusahaan anda dalam pelaksanaan proses sertifikasi.</p>
                                <a href="{{ url('/about-us') }}" class="btn btn-small btn-custom margin-5px-top">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

{{-- <!-- start section -->
<section class="position-relative overflow-visible p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-5 col-lg-6 cover-background md-h-500px sm-h-350px wow animate__fadeIn" data-wow-delay="0.1s" style="background-image:url('https://via.placeholder.com/1139x782');"></div>
                <div class="col-12 col-xl-7 col-lg-6 bg-extra-dark-gray padding-10-rem-tb padding-nine-lr xl-padding-six-all md-padding-ten-all sm-padding-ten-lr sm-padding-fifteen-tb wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-light-brownish-orange letter-spacing-2px text-uppercase d-block margin-2-half-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s">About Us</span>
                    <h4 class="alt-font font-weight-600 text-white letter-spacing-minus-1-half w-90 margin-3-rem-bottom xl-w-100 md-w-90 sm-w-100 wow animate__fadeIn" data-wow-delay="0.4s">Global Inspeksi Sertifikasi</h4>
                    <p class="text-large line-height-38px w-100 lg-w-100 md-w-80 sm-w-100 wow animate__fadeIn" data-wow-delay="0.4s" style="text-align: justify;">PT. Global Inspeksi Sertifikasi memberikan layanan proses sertifikasi produk dan sertifikasi sistem manajemen yang profesional, dapat diandalkan, terpercaya, serta independen untuk peningkatan potensi perusahaan anda secara berkelanjutan secara efektif dan efisien. PT. Global Inspeksi Sertifikasi juga didukung oleh personel yang berpengalaman dalam bidang sertifikasi yang memilki pemahaman yang dibutuhkan perusahaan anda dalam pelaksanaan proses sertifikasi.</p>
                    <a href="contact-us-modern.html" class="btn btn-link btn-extra-large text-white margin-15px-top letter-spacing-1px wow animate__fadeIn" data-wow-delay="0.6s">Start new projects</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section --> --}}

{{-- <!-- start section -->
<section class="big-section wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="planning-tab" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5 text-end sm-margin-40px-bottom">
                                <img src="https://via.placeholder.com/800x625" alt="" />
                            </div>
                            <div class="col-12 col-lg-6 offset-lg-1 col-md-6 text-center text-sm-start">
                                <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-15px-bottom d-inline-block">About Us</span>
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom">Global Inspeksi Sertifikasi</h5>
                                <p class="w-85 lg-w-100" style="text-align: justify;">PT. Global Inspeksi Sertifikasi memberikan layanan proses sertifikasi produk dan sertifikasi sistem manajemen yang profesional, dapat diandalkan, terpercaya, serta independen untuk peningkatan potensi perusahaan anda secara berkelanjutan secara efektif dan efisien. PT. Global Inspeksi Sertifikasi juga didukung oleh personel yang berpengalaman dalam bidang sertifikasi yang memilki pemahaman yang dibutuhkan perusahaan anda dalam pelaksanaan proses sertifikasi.</p>
                                <a href="index.html" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section --> --}}
<!-- start section -->
<section class="bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                <span class="alt-font text-extra-dark-gray font-weight-600 w-95 lg-w-100 text-gradient-sky-blue-pink" style="font-size:200%">Why Choose Us</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                <div class="feature-box h-100 feature-box-left-icon-middle padding-4-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-8px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-all md-padding-4-rem-all">
                    <div class="feature-box-icon margin-20px-right">
                        <i class="line-icon-Gear-2 icon-medium text-fast-blue"></i>
                    </div>
                    <div class="feature-box-content line-height-22px">
                        <div class="text-extra-dark-gray alt-font font-weight-500 line-height-20px">Independent</div>
                        {{-- <span class="text-small alt-font">Easy installation theme</span> --}}
                    </div>
                    <div class="bg-medium-light-gray margin-25px-top w-100 h-1px"></div>
                    <p class="margin-25px-top" style="text-align: justify;">Global Inspeksi Sertifikasi adalah lembaga sertifikasi independen dalam lingkup sertifikasi sistem manajemen ISO, sertifikasi SNI, sertifikasi ISPO, dan Lembaga sertifikasi usaha pariwisata LSUP</p>
                    <h3 class="alt-font opacity-2 font-weight-500 letter-spacing-minus-2px position-absolute bottom-minus-20px sm-bottom-minus-15px right-50px m-0">01</h3>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4  col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="feature-box h-100 feature-box-left-icon-middle padding-4-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-8px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-all md-padding-4-rem-all">
                    <div class="feature-box-icon margin-20px-right">
                        <i class="line-icon-Transform icon-medium text-fast-blue"></i>
                    </div>
                    <div class="feature-box-content line-height-22px">
                        <div class="text-extra-dark-gray alt-font font-weight-500 line-height-20px">Commitment</div>
                        {{-- <span class="text-small alt-font">Unlimited theme guide</span> --}}
                    </div>
                    <div class="bg-medium-light-gray margin-25px-top w-100 h-1px"></div>
                    <p class="margin-25px-top" style="text-align: justify;">Global Inspeksi Sertifikasi berkomitmen untuk mendukung regulasi Pemerintah, partner pelaku industry dan juga perlindungan konsumen.<br><br></p>
                    <h3 class="alt-font opacity-2 font-weight-500 letter-spacing-minus-2px position-absolute bottom-minus-20px sm-bottom-minus-15px right-50px m-0">02</h3>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-12 col-lg-4  col-md-9 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="feature-box h-100 feature-box-left-icon-middle padding-4-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-8px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-all md-padding-4-rem-all">
                    <div class="feature-box-icon margin-20px-right">
                        <i class="line-icon-Heart icon-medium text-fast-blue"></i>
                    </div>
                    <div class="feature-box-content line-height-22px">
                        <div class="text-extra-dark-gray alt-font font-weight-500 line-height-20px">Continuous Improvement</div>
                        {{-- <span class="text-small alt-font">Fully optimised code</span> --}}
                    </div>
                    <div class="bg-medium-light-gray margin-25px-top w-100 h-1px"></div>
                    <p class="margin-25px-top" style="text-align: justify;">Global Inspeksi Sertifikasi selalu melakukan evaluasi dan perbaikan untuk terus menjadi lebih baik<br><br><br><br></p>
                    <h3 class="alt-font opacity-2 font-weight-500 letter-spacing-minus-2px position-absolute bottom-minus-20px sm-bottom-minus-15px right-50px m-0">03</h3>
                </div>
            </div>
            <!-- end fancy text box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn">
            <div class="col-12 col-lg-5 col-sm-9 text-center text-lg-start md-margin-40px-bottom sm-margin-15px-bottom xs-margin-20px-bottom">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 w-95 lg-w-100 text-gradient-sky-blue-pink">Our Services</h5>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 wow animate__fadeIn" data-wow-duration="0.3">
                {{-- <div class="row row-cols-1 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col text-center text-sm-start xs-margin-30px-bottom">
                        <div class="last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray xs-margin-5px-bottom">Build perfect websites</span>
                            <p class="w-85 lg-w-100 xs-w-75 mx-auto mx-sm-0">Lorem ipsum dolor consectetur adipiscing elit eiusmod tempor elit eiusmod tempor.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col text-center text-sm-start">
                        <div class="last-paragraph-no-margin">
                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray xs-margin-5px-bottom">Unique experiences</span>
                            <p class="w-85 lg-w-100 xs-w-75 mx-auto mx-sm-0">Lorem ipsum dolor consectetur adipiscing elit eiusmod tempor elit eiusmod tempor.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div> --}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 margin-4-rem-top md-margin-4-rem-top">
                <div class="outside-box-right">
                    <!-- start slider -->
                    <div class="swiper-container white-move" data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/landing/slider/iso_9k.jpg')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sistem Manajemen</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">ISO 9001</div>
                                        <a href="{{ route('iso9001') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/landing/slider/iso_45k.jpg')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sistem Manajemen</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">ISO 45001</div>
                                        <a href="{{ route('iso45001') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/new/iso_37.png')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sistem Manajemen</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">ISO 37001</div>
                                        <a href="{{ route('iso37001') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/sni/sni.jpg')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sertifikasi SNI</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">LSPro (SNI)</div>
                                        <a href="{{ route('sniProduk') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/new/psrakyat.png')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sertifikasi SNI</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Pasar Rakyat</div>
                                        <a href="{{ route('sniPasar') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/new/rehab.png')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sertifikasi SNI</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Layanan Rehabilitasi</div>
                                        <a href="{{ route('sniRehab') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/lsup_new.jpeg')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        <div class="text-white opacity-6 margin-10px-bottom">Sertifikasi Usaha</div>
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">LSUP (Pariwisata)</div>
                                        <a href="{{ route('sertifikasiPariwisata') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/ispo_new.jpeg')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        {{-- <div class="text-white opacity-6 margin-10px-bottom">Indonesia Sustainable Palm Oil System Certification</div> --}}
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">ISPO Certification</div>
                                        <a href="{{ route('sertifikasiIspo') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                            <!-- start interactive banner item -->
                            <div class="swiper-slide interactive-banners-style-07">
                                <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{ asset('assets/client/images/GIS/new/chse.png')}}" alt=""/>
                                        <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                        {{-- <div class="text-white opacity-6 margin-10px-bottom">Indonesia Sustainable Palm Oil System Certification</div> --}}
                                        <div class="alt-font text-extra-large text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">CHSE</div>
                                        <a href="{{ route('sertifikasiChse') }}" class="btn btn-fancy btn-very-small btn-custom btn-round-edge margin-15px-top">View information</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end interactive banner item -->
                        </div>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-light-blue">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-1-rem-bottom wow animate__fadeIn">
                    <span class="alt-font text-extra-dark-gray font-weight-600 w-95 lg-w-100 text-gradient-sky-blue-pink" style="font-size:200%">Our Partners</span>
                </div>
            </div>
            <!-- start client slider -->
            <div class="swiper-container text-center" data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 } } }'>
                <div class="swiper-wrapper">
                    <!-- start slider item --><div class="swiper-slide"><img alt=""src="{{ asset("assets/client/images/GIS/ourclient/logo-1.png") }}" width="90%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-2.png") }}" width="40%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-5.png") }}" width="90%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-3.png") }}" width="90%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-4.png") }}" width="120%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-6.png") }}" width="105%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-7.png") }}" width="38%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-8.png") }}" width="35%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-9.png") }}" width="35%"></div><!-- end slider item -->
                    <!-- start slider item --><div class="swiper-slide"><img alt="" src="{{ asset("assets/client/images/GIS/ourclient/logo-10.png") }}" width="35%"></div><!-- end slider item -->
                </div>
            </div>
            <!-- start slider navigation -->
            <!--<div class="swiper-button-next-nav swiper-button-next  rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
            <div class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>-->
            <!-- end slider navigation -->
            <!-- end client slider -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->

<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                <span class="alt-font text-extra-dark-gray font-weight-600 w-95 lg-w-100 text-gradient-sky-blue-pink" style="font-size:200%">News & Event</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content px-sm-0">
                <ul class="blog-classic blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    @foreach ($articles as $article)
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post">
                            <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                <a href="{{ url('detail' , $article->slug ) }}"><img src="{{ url ('storage/images/header/' . $article->articleHeaders->image) }}" alt=""/></a>
                            </div>
                            <p>
                                <time pubdate datetime="2022-01-10">10 Jan 2022</time>
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                {{ $article->user->name ?? 'Unknown' }}
                            </p>
                            <div class="post-details">
                                <a href="{{ url('detail' , $article->slug ) }}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">{{ $article->title }}</a>
                                {{-- <p class="w-95">{{ substr($article->description,0,100) }}</p> --}}
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <img src='{{ url('assets/client/images/GIS/logo.png') }}' width="40px" alt=''>
            <span class="bold">&nbspPT Global Inspeksi Sertifikasi</span>
            <p></p>
        </div>
        <div class='get-new hide'>
                <div id='get-label'></div>
                <div id='get-nama'></div>
        </div>
    </div>
    <div class='home-chat'>
        <!-- Info Contact Start -->
        <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
            <div class='info-avatar'>
                <img src='https://2.bp.blogspot.com/-y6xNA_8TpFo/XXWzkdYk0MI/AAAAAAAAA5s/RCzTBJ_FbMwVt5AEZKekwQqiDNqdNQJjgCLcBGAs/s70/supportmale.png'/>
            </div>
            <div class='info-chat'>
                <span class='chat-label'>Support</span>
                <span class='chat-nama'>Customer Service 1</span>
            </div>
            <span class='my-number'>6281386647726</span>
        </a>
        <!-- Info Contact End -->
        <div class='blanter-msg'>
            Call us to <b>021 50560008</b> from <i>08:00 AM - 17:00 PM</i>
        </div>
    </div>
    <div class='start-chat hide'>
        <div class='first-msg'>
            <span>Halo! Ada yang bisa dibantu?</span>
        </div>
        <div class='blanter-msg'>
            {{-- <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea> --}}
            <a href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang Sertifikasi ISO dan Lainnya" id='send-it'><i class='fab fa-whatsapp'></i>&nbsp Start Chat</a>
        </div>
    </div>
    <div id='get-number'>
    </div>
    <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Chat With Us</a>
<!-- end section -->

@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        let time = {{ ($popup) ? $popup->time:0 }};
        time = time * 1000;
        setTimeout(function() {
            $('#popup').modal('show');
        }, time);

        console.log(time);
    });
</script>
@endpush

