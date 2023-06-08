@extends('client.layouts.app')
@section('content')
@section('title', 'Gallery')
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

<section class="bg-custom-footer padding-25px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-8 col-lg-6">
                <!-- start page title -->
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-start">Gallery</h1>
                <!-- end page title -->
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                <!-- start breadcrumb -->
                <ul class="xs-text-center">
                    {{-- <li><a href="index.html" class="text-white-hover">Home</a></li> --}}
                    <li><a class="text-white-hover">Information</a></li>
                    <li><a class=" text-white" href="{{ route('gallery') }}">Gallery</a></li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>

<section class="big-section parallax wow animate__fadeIn" data-parallax-background-ratio="0.1" style="background-image: url({{ asset('assets/client/images/GIS/gallery.png')}}); visibility: visible; animation-name: fadeIn; background-position: 50% 20.9156px;">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center wow animate__zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                {{-- <span class="alt-font font-weight-500 text-white text-uppercase letter-spacing-2px opacity-5 d-block margin-30px-bottom md-margin-20px-bottom">Category</span> --}}
                <h2 class="alt-font font-weight-500 text-white letter-spacing-minus-2px margin-50px-bottom md-margin-40px-bottom" style="font-size:40pt;">Gallery</h2>
                {{-- <a href="{{ url('/artikel')}}" class="btn btn-fancy btn-large btn-gradient-magenta-orange btn-round-edge-small">All News & Event</a> --}}
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class="bg-light-gray pt-8">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- start filter navigation -->
                <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                    <li class="nav active"><a data-filter="*" href="#">All</a></li>
                    <li class="nav"><a data-filter=".6" href="#">Team</a></li>
                    <li class="nav"><a data-filter=".7" href="#">Client</a></li>
                    <li class="nav"><a data-filter=".8" href="#">Event</a></li>
                    <li class="nav"><a data-filter=".9" href="#">Lainnya</a></li>
                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>
                    @foreach ($gallery as $value)
                    <!-- start portfolio item -->
                    <li class="grid-item wow {{ $value->category }} animate__fadeIn" data-wow-delay="0.2s">
                        <div class="portfolio-box border-radius-6px box-shadow-large">
                            <div class="portfolio-image bg-gradient-magenta-orange-2">
                                <img src="{{ asset('storage/images/gallery/' . $value->image) }}" alt="images" />
                                <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                    <div class="portfolio-icon">
                                        <a href="{{ asset('storage/images/gallery/' . $value->image) }}" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                        <a href="single-project-page-03.html" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-caption bg-white padding-30px-tb md-padding-20px-tb">
                                <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">{{ $value->title }}</span></a>
                                <span class="text-medium d-block margin-one-bottom">{{ $value->description }}</span>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
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

