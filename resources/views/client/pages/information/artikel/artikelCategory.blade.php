@extends('client.layouts.app')
@section('content')
@section('title', 'Artikel')
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
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-start">Artikel</h1>
                <!-- end page title -->
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                <!-- start breadcrumb -->
                <ul class="xs-text-center">
                    {{-- <li><a href="index.html" class="text-white-hover">Home</a></li> --}}
                    <li>Information</li>
                    <li><a class="text-white-hover" href="{{ url ('/artikel') }}">Artikel</a></li>
                    {{-- @foreach ($articles as $item)
                    <li><a class="text-white-hover">{{ $item->categories->name }}</a></li>
                    @endforeach --}}

                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>

<section class="big-section parallax wow animate__fadeIn" data-parallax-background-ratio="0.1" style="background-image: url(&quot;https://img.freepik.com/free-psd/aerial-view-woman-using-digital-tablet-snacks_53876-11992.jpg?w=1380&t=st=1675753905~exp=1675754505~hmac=5f0864279c8641e0c2306b1c9e74557e30c2fe3140cd56e6b16c633892e69457&quot;); visibility: visible; animation-name: fadeIn; background-position: 50% 20.9156px;">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center wow animate__zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                {{-- <span class="alt-font font-weight-500 text-white text-uppercase letter-spacing-2px opacity-5 d-block margin-30px-bottom md-margin-20px-bottom">Category</span> --}}
                @foreach ($articles as $item)
                <h2 class="alt-font font-weight-500 text-white letter-spacing-minus-2px margin-50px-bottom md-margin-40px-bottom" style="font-size:40pt;">{{ $item->categories->name }}</h2>
                @endforeach
                <a href="{{ url('/artikel')}}" class="btn btn-fancy btn-large btn-gradient-magenta-orange btn-round-edge-small">All News & Event</a>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class="bg-light-gray pt-7 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                    @foreach ($articles as $item)
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                            <div class="blog-post-image bg-medium-slate-blue">
                                <a href="{{ url('detail' , $item->slug ) }}" title=""><img src="{{ url ('storage/images/header/' . $item->articleHeaders->image) }}" alt="{{ $item->articleHeaders->alt }}"></a>
                                <a href="{{ url('detail' , $item->slug ) }}" class="blog-category alt-font">{{ $item->categories->name }}</a>
                            </div>
                            <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                <a class="alt-font text-small d-inline-block margin-10px-bottom">{{ date('d F Y', strtotime($item->date))}}</a>
                                <a href="{{ url('detail' , $item->slug ) }}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">{{ $item->title }}</a>
                                <p>{{ Str::limit ($item->description, 100) }}</p>
                                <div class="d-flex align-items-center">
                                    <img class="avtar-image" src="{{ !empty($item->user->photo) ? asset('storage/images/profile/' . $item->user->photo) : asset('storage/images/profile/avatar.png') }}" alt="Photo Profile"/>
                                    <span class="alt-font text-small me-auto">By {{ $item->user->name ?? 'Unknown'}}</a></span>
                                    {{-- <a href="blog-post-layout-01.html" class="blog-like alt-font text-extra-small"><i class="far fa-heart"></i><span>28</span></a> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    @endforeach
                </ul>
                <!-- start pagination -->
                <div class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn">
                    {{ $articles->links() }}
                </div>
                <!-- end pagination -->
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

