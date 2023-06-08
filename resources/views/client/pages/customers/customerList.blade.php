@extends('client.layouts.app')
@section('content')
@section('title', 'Customer List')
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
<!-- start page title -->
<section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('assets/client/images/GIS/landing/cust_list.jpg')}}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom">PT. Global Inspeksi Sertifikasi</h1>
                <h3 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size:250%;">Customer List</h3>
            </div>
            {{-- <div class="down-section text-center"><a href="#list" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div> --}}
        </div>
    </div>
</section>
<!-- end page title -->
{{-- <!-- start section -->
<section class="extra-big-section cover-background overflow-visible" style="background-image: url('{{ asset ('assets/client/images/GIS/home-startup-about-bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12 overlap-section md-no-margin-top md-margin-70px-bottom sm-margin-50px-bottom">

            </div>
        </div>
        <div class="row align-items-end">
            <div class="col-12 col-lg-3 col-md-6 order-1 text-center text-lg-end last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInLeft">
                <div class="title-large-2 text-red alt-font line-height-70px letter-spacing-minus-3px font-weight-600">175+</div>
                <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-2px d-block margin-15px-bottom sm-margin-5px-bottom">Client</span>
                <p class="w-90 d-inline-block sm-w-60 xs-w-80">Lorem ipsum dolor sit consectetur do eiusmod tempor incididunt</p>
            </div>
            <div class="col-12 col-lg-6 order-3 order-lg-2 text-center z-index-0 wow animate__fadeIn">
                <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                    <span class="text-extra-big-2 alt-font text-uppercase text-green font-weight-600 letter-spacing-minus-10px image-mask cover-background" style="background-image: url('https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/HWdWOg4x-j2movvk9/videoblocks-creative-business-team-meeting-happy-people-working-in-modern-office-late-at-night_hysazowt_thumbnail-1080_01.png')">GIS</span>
                    <span class="alt-font text-extra-large text-extra-dark-gray letter-spacing-4px font-weight-600 text-uppercase margin-5px-top d-block">PT. Global Inspeksi Sertifikasi</span>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 order-2 text-center text-lg-start order-lg last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInRight">
                <div class="title-large-2 text-red alt-font line-height-70px letter-spacing-minus-3px font-weight-600" >200+</div>
                <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-2px d-block margin-15px-bottom sm-margin-5px-bottom">Certificate</span>
                <p class="w-90 d-inline-block sm-w-60 xs-w-80">Lorem ipsum dolor sit consectetur do eiusmod tempor incididunt</p>
            </div>
        </div>
    </div>
</section>
<!-- end section --> --}}
<!-- start section -->
<section class="overflow-visible pt-md-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center overlap-section wow animate__zoomIn">
                <img class="rounded-circle box-shadow-large w-170px h-170px border-all border-width-10px border-color-white" src="{{ asset ('assets/client/images/GIS/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<div class="container mt-5">
    <br>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
            <!-- start feature box item-->
            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                    <i class="line-icon-Cursor-Click2 icon-medium text-red"></i>
                </div>
                <div class="feature-box-content">
                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Independent</div>
                    <span>Easy to customize</span>
                </div>
            </div>
            <!-- end feature box item-->
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
            <!-- start feature box item-->
            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                    <i class="line-icon-Bakelite icon-medium text-red"></i>
                </div>
                <div class="feature-box-content">
                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Commitment</div>
                    <span>High quality services</span>
                </div>
            </div>
            <!-- end feature box item-->
        </div>
        <div class="col-12 col-lg-4 col-md-6 col-sm-8">
            <!-- start feature box item-->
            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                    <i class="line-icon-Boy icon-medium text-red"></i>
                </div>
                <div class="feature-box-content">
                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Continuous Improvement</div>
                    <span>Build perfect websites</span>
                </div>
            </div>
            <!-- end feature box item-->
        </div>
    </div>
</div>

<!-- start section -->
<section class="border-color-medium-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 text-center margin-6-rem-bottom wow animate__fadeIn " style="visibility: visible; animation-name: fadeIn;">
                <span class="text-extra-medium text-gradient-magenta-orange text-uppercase alt-font font-weight-500 letter-spacing-1px d-block margin-5px-bottom">Since 2016</span>
                <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray mb-0">Customer List</h5>
            </div>
            <div class="col-12 col-lg-10 tab-style-05">
                <div class="tab-box">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs margin-7-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr align-items-center justify-content-center font-weight-500 text-uppercase">
                        <li class="nav-item alt-font"><a class="nav-link active" href="#tab-nine1" data-bs-toggle="tab">LSUP</a></li>
                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine2" data-bs-toggle="tab">LSPRO</a></li>
                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine3" data-bs-toggle="tab">ISO</a></li>
                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine4" data-bs-toggle="tab">ISPO</a></li>
                        <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine5" data-bs-toggle="tab">CHSE</a></li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane med-text fade in active show" id="tab-nine1">
                        <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
                                @foreach ($clientLsup as $item)
                                    <!-- start client logo item -->
                                    <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom padding-2-half-rem-top">
                                        <a href="#"><img src="{{ asset('storage/images/clients/' . $item->logo) }}" class="w-80" aalt="logo_customer"></a>
                                    </div>
                                    <!-- end client logo item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab-nine2">
                        <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
                                    @foreach ($clientLspro as $item)
                                        <!-- start client logo item -->
                                        <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom">
                                            <a href="#"><img src="{{ asset('storage/images/clients/' . $item->logo) }}" class="w-80" aalt="logo_customer"></a>
                                        </div>
                                        <!-- end client logo item -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab-nine3">
                        <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
                                @foreach ($clientManagement as $item)
                                    <!-- start client logo item -->
                                        <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom">
                                        <a href="#"><img src="{{ asset('storage/images/clients/' . $item->logo) }}" class="w-80" aalt="logo_customer"></a>
                                    </div>
                                    <!-- end client logo item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab-nine4">
                        <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
                                @foreach ($clientIspo as $item)
                                    <!-- start client logo item -->
                                        <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom">
                                        <a href="#"><img src="{{ asset('storage/images/clients/' . $item->logo) }}" class="w-80" aalt="logo_customer"></a>
                                    </div>
                                    <!-- end client logo item -->
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab-nine5">
                        <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
                                @foreach ($clientChse as $item)
                                    <!-- start client logo item -->
                                        <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom">
                                        <a href="#"><img src="{{ asset('storage/images/clients/' . $item->logo) }}" class="w-80" aalt="logo_customer"></a>
                                    </div>
                                    <!-- end client logo item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
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
        let time = {{ $popup->time ?? '' }};
        time = time * 1000;
        setTimeout(function() {
            $('#popup').modal('show');
        }, time);

        console.log(time);
    });
</script>
@endpush
