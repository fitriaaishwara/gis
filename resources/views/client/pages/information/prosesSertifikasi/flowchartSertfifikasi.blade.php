@extends('client.layouts.app')
@section('content')
@section('title', 'Flowchart Sertifikasi')
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


<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset ('assets/client/images/GIS/landing/header/bg_iso_9001.jpg')}}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-12 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom" style="font-size: 150%;">Information</h1>
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 250%;">Flowchart Sertifikasi</h2>
            </div>
            <div class="down-section text-center"><a href="#manajemen" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>

<section id="manajemen" class="shopping-right-side-bar pt-10">
    <div class="container">
        {{-- <div class="col-12 col-lg-12 tab-style-05">
            <div class="tab-box">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs margin-7-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr align-items-center font-weight-500 text-uppercase">
                    <li class="nav-item alt-font"><a class="nav-link"  href="{{ url('/proses-sertifikasi-sni-sistem-1') }}">SNI - Sistem 1</a></li>
                    <li class="nav-item alt-font"><a class="nav-link" href="{{ url('/proses-sertifikasi-sni-sistem-5') }}">SNI - Sistem 5</a></li>
                    <li class="nav-item alt-font"><a class="nav-link active" href="{{ url('/proses-sertifikasi-sistem-manajemen') }}">Sistem Manajemen</a></li>
                    <li class="nav-item alt-font"><a class="nav-link" href="{{ url('/proses-sertifikasi-usaha-pariwisata') }}">Usaha Pariwisata</a></li>
                    <li class="nav-item alt-font"><a class="nav-link" href="#" >Uji Laboratorium</a></li>
                </ul>
                <!-- end tab navigation -->
            </div>
        </div> --}}
        <div class="row">
            <!-- start sidebar -->
            <div class="col-12 position-relative">
                <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">Alur Pengajuan Sertifikasi</span>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray">Flowchart Sertifikasi</h5>
                <p class="w-80 margin-4-half-rem-bottom md-w-100">Dibawah ini merupakan skema pengajuan sertifikasi :</p>
            </div>
            <div class="col-12 col-lg-12 col-md-8 shopping-content padding-55px-right md-padding-15px-right sm-margin-30px-bottom">
                <img src="{{ asset('assets/client/images/GIS/sistem_manajemen.png')}}" alt="" class="img-fluid w-100">
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

