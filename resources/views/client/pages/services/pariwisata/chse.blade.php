@extends('client.layouts.app')
@section('content')
@section('title', 'CHSE')
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
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset ('assets/client/images/GIS/new/bg_chse.png')}}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom" style="font-size: 150%">Pariwisata</h1>
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size: 150%">Cleanliness, Health, Safety, dan Environment (CHSE)</h2>
            </div>
            <div class="down-section text-center"><a href="#lsup" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="lsup" class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            {{-- <div class="col-12 col-xl-4  col-lg-5 order-lg-2 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <div class="outside-box-right">
                    <img src="{{ asset('assets/client/images/what-we-offers-03.jpg') }}" class="box-shadow-medium border-radius-5px overflow-hidden" alt="" />
                </div>
            </div> --}}
            <div class="col-12 col-xl-12 col-lg-6 order-lg-1 padding-five-right sm-padding-15px-right wow animate__fadeIn" data-wow-delay="0.2s">
                <h5 class="alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                    <span class="d-initial p-0">Sertifikasi</span>
                    <span class="cd-words-wrapper d-initial p-0">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">CHSE</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">CHSE</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">CHSE</b>
                    </span>
                </h5>
                <p style="text-align: justify;">Penting sekali di era pandemic ini untuk semua industri menerapkan protokol
                    Kesehatan terutama di sektor wisata dan akomodasi. Hal ini tentunya sejalan
                    dengan inisiatif Kemenparekraf yang memastikan tempat wisata harus menerapkan
                    protokol kesehatan sesuai dengan Permenparekraf No 13 tahun 2020 tentang standar
                    dan Sertifikasi Kebersihan, Kesehatan, Keselamatan, dan Kelestarian Lingkungan
                    Sektor Pariwisata Dalam Masa Penanganan Pandemi Corona Virus Disease 2019.<br>
                    Badan Standarisasi Nasional (BSN) bekerjasama dengan Kementerian Pariwisata dan
                    Ekonomi menerbitkan Standar SNI 9042 – 2021 tentang Kebersihan, Kesehatan,
                    Keselamatan dan Kelestarian Lingkungan ( CHSE) Tempat Penyelenggaraan dan Pendukung
                    Kegiatan Pariwisata.<br>
                    Sertifikasi CHSE merupakan sebuah proses pemberian sertifikasi kepada Usaha Pariwisata
                    Destinasi Pariwisata dan Produk Pariwisata lainnya untuk memberikan jaminan kepada
                    wisatawan terhadap pelaksanaan Kebersihan, Keselamatan dan Kelestarian Lingkungan
                    Dimensi sertifikasi CHSE itu sendiri dari Kebersihan, Kesehatan, Keselamatan, dan
                    Kelestarian Lingkungan. Sementara, tiga kriteria yang perlu dipenuhi adalah manajemen
                    atau tata kelola, kesiapan SDM, serta partisipasi pengunjung.<br>
                    Penerapan sertifikasi SNI 9042:2021 CHSE dapat dilakukan oleh pelaku usaha yang
                    bergerak di bidang :
                </p>
                <div class="row">
                    <div class="col-12 col-xl-12 col-lg-6 col-md-8">
                        <ul class="list-style-05">
                            <li>Daya Tarik Wisata</li>
                            <li>Hotel</li>
                            <li>Restoran</li>
                            <li>Spa</li>
                            <li>Pondok Wisata</li>
                            <li>Lapangan Golf</li>
                            <li>Taman Rekreasi</li>
                            <li>Tempat Penyelenggaraan Pertemuan, Perjalanan Insentif, Konferensi dan Pameran</li>
                            <li>Arena Permainan</li>
                            <li>Tempat Pusat Informasi Pariwisata</li>
                            <li>Tempat Penjualan Cendera Mata dan Oleh-oleh</li>
                            <li>Kawasan Pariwisata</li>
                            <li>Destinasi Pariwisata</li>
                        </ul>
                    </div>
                </div>
                <p style="text-align: justify;">
                    Beberapa manfaat dengan diterapkannya pedoman CHSE ini antara lain:
                </p>
                <ul class="list-style-01 text-extra-dark-gray">
                    <li style="text-align: justify;"><i class="fas fa-check text-extra-medium-gray"></i>Bertujuan untuk mengembalikan kepercayaan wisatawan untuk
                        kembali berkunjung ke destinasi Wisata<span class="list-hover bg-white box-shadow-small border-radius-4px"></span>
                    </li>
                    <li style="text-align: justify;"><i class="fas fa-check text-extra-medium-gray"></i>Diharapkan dapat membantu membangkitkan kembali para pelaku
                        pariwisata kembali berjaya seperti sebelumnya<span class="list-hover bg-white box-shadow-small border-radius-4px"></span>
                    </li>
                    <li style="text-align: justify;"><i class="fas fa-check text-extra-medium-gray"></i>Memulihkan perekonomian Indonesia, terutama sektor pariwisata<span class="list-hover bg-white box-shadow-small border-radius-4px"></span>
                    </li>
                    <li style="text-align: justify;"><i class="fas fa-check text-extra-medium-gray"></i>Terwujudnya pemulihan sektor pariwisata yang terpadu dan
                        berkesinambungan<span class="list-hover bg-white box-shadow-small border-radius-4px"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="big-section bg-extra-medium-slate-blue wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center divider-full margin-9-half-rem-bottom p-0 lg-margin-5-half-rem-bottom wow animate__fadeIn">
                <div class="divider-border divider-light d-flex align-items-center w-100">
                    <span class="alt-font font-weight-600 text-gradient-sky-blue-pink text-uppercase letter-spacing-1px d-block padding-30px-lr" style="font-size:20pt">Services Lainnya</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-lg-0 wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="swiper-container portfolio-classic position-relative" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('iso9001') }}"><img src="{{ asset ('assets/client/images/GIS/landing/recent/9001.jpg')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('iso9001') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('iso9001') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Iso 9001</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Sistem Manajemen Mutu</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('iso45001') }}"><img src="{{ asset ('assets/client/images/GIS/landing/recent/45001.jpg')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('iso45001') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('iso45001') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Iso 45001</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Sistem Manajemen K3</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('iso37001') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_iso_37.png')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('iso37001') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('iso37001') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Iso 37001</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Sistem Manajemen Anti Penyuapan</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sniProduk') }}"><img src="{{ asset ('assets/client/images/GIS/sni/os_sni.jpg')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sniProduk') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sniProduk') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">LSPRO</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">SNI</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sniPasar') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_psrakyat.png')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sniPasar') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sniPasar') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Pasar Rakyat</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">SNI</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sniRehab') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_rehab.png')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sniRehab') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sniRehab') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">Layanan Rehabilitasi</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">SNI</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sertifikasiPariwisata') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_lsup.jpg')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sertifikasiPariwisata') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sertifikasiPariwisata') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">LSUP</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Pariwisata</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sertifikasiChse') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_chse.png')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sertifikasiChse') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sertifikasiChse') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">CHSE</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Pariwisata</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                        <!-- start slide item -->
                        <div class="swiper-slide overflow-hidden">
                            <div class="portfolio-box text-center">
                                <div class="portfolio-image bg-gradient-magenta-orange">
                                    <a href="{{ route('sertifikasiIspo') }}"><img src="{{ asset ('assets/client/images/GIS/new/os_ispo.jpg')}}" alt="" /></a>
                                    <div class="portfolio-hover align-items-center justify-content-center d-flex">
                                        <div class="portfolio-icon">
                                            <a href="{{ route('sertifikasiIspo') }}" class="border-all border-width-2px rounded-circle border-color-white bg-white"><i class="ti-arrow-right text-extra-dark-gray"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                    <a href="{{ route('sertifikasiIspo') }}" class="alt-font text-white font-weight-500 text-uppercase d-inline-block margin-5px-bottom">ISPO</a>
                                    <span class="d-block text-medium-gray text-small line-height-18px text-uppercase">Indonesia Sustainable Palm Oil System Certification</span>
                                </div>
                            </div>
                        </div>
                        <!-- end slide item -->
                    </div>
                    <!-- start slider navigation -->
                    <!--<div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-01 light"><i class="feather icon-feather-arrow-right"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-01 light"><i class="feather icon-feather-arrow-left"></i></div>-->
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
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
            <a href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang sertifikasi Pariwisata (LSUP)" id='send-it'><i class='fab fa-whatsapp'></i>&nbsp Start Chat</a>
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
