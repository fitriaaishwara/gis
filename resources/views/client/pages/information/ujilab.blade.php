@extends('client.layouts.app')
@section('content')
@section('title', 'Proses Uji Laboratorium')
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
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1100');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div class="col-12 col-xl-12 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom" style="font-size: 150%;">Information</h1>
                    <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 250%;">Proses Uji Laboratorium</h2>
                </div>
                <div class="down-section text-center"><a href="#manajemen" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="down-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 position-relative sm-margin-30px-bottom">
                <img class="border-radius-5px" src="https://via.placeholder.com/800x553" alt="" />
                <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large absolute-middle-center">
                    <span>
                        <span class="video-icon bg-gradient-light-purple-light-orange">
                            <i class="icon-simple-line-control-play text-white"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-gradient-light-purple-light-orange opacity-7"></span>
                                <span class="video-icon-sonar-afr bg-gradient-light-purple-light-orange"></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">Litho is meant to simplify the website building</h5>
                <p class="w-85 lg-w-90">Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="btn-dual margin-15px-top d-inline-block">
                    <a href="who-we-are.html" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Discover Litho<span class="bg-white"></span></a>
                    <a href="about-us.html" class="btn btn-medium btn-transparent-dark-gray btn-slide-right-bg xs-no-margin">Read More<span class="bg-extra-dark-gray"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Powerfull Theme Options</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Cursor-Click2 icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">No coding required</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Like-2 icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Easy to customize</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Talk-Man icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Customer satisfaction</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Heart icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">Huge icon collection</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                    <div class="feature-box-icon">
                        <i class="line-icon-Gear-2 icon-medium text-gradient-light-purple-light-orange margin-40px-bottom md-margin-20px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Advanced customization</span>
                        <p>Lorem ipsum is simply text of the printing and typesetting industry lorem ipsum has standard text</p>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-5px"></div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 sm-margin-30px-bottom">
                <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0">We design brand, digital experience that engaged the right customers</h5>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 col-md-7">
                <div class="row row-cols-1 row-cols-sm-2">
                    <!-- start counter item -->
                    <div class="col counter-style-01 last-paragraph-no-margin xs-margin-30px-bottom">
                        <h5 class="counter counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2530" data-speed="7000">2530</h5>
                        <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Custom shortcodes</span>
                        <p class="w-85 md-w-100">Lorem ipsum is simply dummy text the printing typesetting</p>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col counter-style-01 last-paragraph-no-margin">
                        <h5 class="counter counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2000" data-speed="7000">2000</h5>
                        <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Completed projects</span>
                        <p class="w-85 md-w-100">Lorem ipsum is simply dummy text the printing typesetting</p>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
            <div class="col-12">
                <div class="w-100 h-1px bg-medium-gray margin-7-rem-top margin-8-rem-bottom sm-margin-5-rem-tb"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 tab-style-01 wow animate__fadeIn" data-wow-delay="0.4s">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font font-weight-500 margin-7-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom sm-margin-20px-bottom">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#planning-tab">Planning</a><span class="tab-border bg-gradient-light-purple-light-orange"></span></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#research-tab">Research</a><span class="tab-border bg-gradient-light-purple-light-orange"></span></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#target-tab">Target</a><span class="tab-border bg-gradient-light-purple-light-orange"></span></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#campaign-tab">Campaign</a><span class="tab-border bg-gradient-light-purple-light-orange"></span></li>
                </ul>
                <!-- end tab navigation -->
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="planning-tab" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                <img src="https://via.placeholder.com/800x717" class="w-90 sm-w-100" alt="" />
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                <span class="alt-font d-block text-extra-medium margin-15px-bottom">Unlimited power customization</span>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray">We offer a full range of digital marketing services</h5>
                                <p class="w-85 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="about-me.html" class="btn btn-medium btn-dark-gray margin-15px-top">Discover litho</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="research-tab" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                <img src="https://via.placeholder.com/800x717" class="w-90 sm-w-100" alt="" />
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                <span class="alt-font d-block text-extra-medium margin-15px-bottom">Powerful theme for creative designer</span>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray">We are expert in search engine and social media</h5>
                                <p class="w-85 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="about-me.html" class="btn btn-medium btn-dark-gray margin-15px-top">Discover litho</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="target-tab" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                <img src="https://via.placeholder.com/800x717" class="w-90 sm-w-100" alt="" />
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                <span class="alt-font d-block text-extra-medium margin-15px-bottom">Unlimited power customization</span>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray">We created digital ideas that are bigger and bolder</h5>
                                <p class="w-85 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="about-me.html" class="btn btn-medium btn-dark-gray margin-15px-top">Discover litho</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="campaign-tab" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                <img src="https://via.placeholder.com/800x717" class="w-90 sm-w-100" alt="" />
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                <span class="alt-font d-block text-extra-medium margin-15px-bottom">Browse amazing social media features</span>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray">Litho is meant to simplify the website building</h5>
                                <p class="w-85 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="about-me.html" class="btn btn-medium btn-dark-gray margin-15px-top">Discover litho</a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center margin-5-rem-bottom">
                <span class="alt-font margin-5px-bottom d-inline-block text-uppercase font-weight-500 text-medium-gray">Meet our team</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-500">Creative People</h5>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
            <!-- start team item -->
            <div class="col team-style-01 text-start sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <figure class="border-radius-5px">
                    <div class="team-member-image">
                        <img alt="" src="https://via.placeholder.com/721x902">
                        <div class="team-overlay bg-transparent-gradient-light-purple-light-orange border-radius-5px"></div>
                    </div>
                    <figcaption class="d-flex flex-column padding-60px-lr padding-50px-tb md-padding-30px-all">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                        </div>
                        <span class="team-title d-block padding-one-bottom alt-font text-extra-medium text-white font-weight-500 mt-auto">Alexander Harvard</span>
                        <span class="team-sub-title d-block text-medium text-white-transparent alt-font">Operations officer</span>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col team-style-01 text-start sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <figure class="border-radius-5px">
                    <div class="team-member-image">
                        <img alt="" src="https://via.placeholder.com/721x902">
                        <div class="team-overlay bg-transparent-gradient-light-purple-light-orange border-radius-5px"></div>
                    </div>
                    <figcaption class="d-flex flex-column padding-60px-lr padding-50px-tb md-padding-30px-all">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                        </div>
                        <span class="team-title d-block padding-one-bottom alt-font text-extra-medium text-white font-weight-500 mt-auto">Bryan Jonhson</span>
                        <span class="team-sub-title d-block text-medium text-white-transparent alt-font">Graphic designer</span>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col team-style-01 text-start wow animate__fadeIn" data-wow-delay="0.6s">
                <figure class="border-radius-5px">
                    <div class="team-member-image">
                        <img alt="" src="https://via.placeholder.com/721x902">
                        <div class="team-overlay bg-transparent-gradient-light-purple-light-orange border-radius-5px"></div>
                    </div>
                    <figcaption class="d-flex flex-column padding-60px-lr padding-50px-tb md-padding-30px-all">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="icon-extra-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                        </div>
                        <span class="team-title d-block padding-one-bottom alt-font text-extra-medium text-white font-weight-500 mt-auto">Jeremy Dupont</span>
                        <span class="team-sub-title d-block text-medium text-white-transparent alt-font">Web developer</span>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
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
            <a href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang sertifikasi ISO dan lainnya" id='send-it'><i class='fab fa-whatsapp'></i>&nbsp Start Chat</a>
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

