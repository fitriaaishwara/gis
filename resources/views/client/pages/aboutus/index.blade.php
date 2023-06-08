@extends('client.layouts.app')
@section('content')
@section('title', 'About Us')
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
<section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ url('assets/client/images/GIS/about.jpg') }}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom" style="font-size: 150%">About our company</h1>
                <h3 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom" style="font-size:250%;">PT. Global Inspeksi Sertifikasi</h3>
            </div>
            {{-- <div class="down-section text-center"><a href="#profile" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div> --}}
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="profile" class="pb-md-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            {{-- <div class="col-12 text-center overlap-gap-section overlap-height">
                <img src="{{ asset('assets/client/images/GIS/sompany_profile.png')}}" alt="" />
            </div> --}}
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section  class="p-0 overlap-section overflow-visible wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center sm-no-margin-lr">
            <div class="col-12 col-lg-11 box-shadow-medium bg-white align-items-center justify-content-center padding-6-rem-all md-padding-3-rem-all">
                <div class="row align-items-center justify-content-center mx-lg-0">
                    <div class="col-12 col-xl-12 col-md-6 col-sm-11 text-center text-md-start sm-margin-20px-tb">
                        <span class="alt-font d-block text-red margin-5px-bottom">PT. GLOBAL INSPEKSI SERTIFIKASI</span>
                        <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-30px-bottom  sm-margin-20px-bottom"><span class="font-weight-600">Profile</span> Perusahaan</h5>
                        <p class="margin-40px-bottom sm-margin-30px-bottom" style="text-align: justify;"><span class="font-weight-600">PT. Global Inspeksi Sertifikasi</span> adalah perusahaan lokal yang bergerak di jasa sertifikasi yang didirikan pada bulan Oktober 2016 yang berlokasi di area komersil bisnis di wilayah Tangerang.
                            <br><span class="font-weight-600">Dalam rangka memberi pengamanan</span> dari penggunaan yang tidak tepat dan melindungi masyarakat dari peredaran produk yang tidak memenuhi persyaratan mutu, keamanan, dan kemanfaatan maka perlu dilakukan penilaian terhadap pemenuhan standard kesesuaian. Inilah yang memotivasi kami,Global Inspeksi Sertifikasi untuk ikut bersama mendukung regulasi Pemerintah, partner pelaku industry dan juga perlindungan konsumen.
                            <br><span class="font-weight-600">Manajemen Global Inspeksi Sertifikasi</span> merupakan kumpulan personil yang sudah mapan di bidang audit dan sertifikasi sistem manajemen dan produk. Global Inspeksi Sertifikasi juga memiliki hubungan yang baik dengan instansi pemerintahan, partner lokal dan juga internasional yang mendukung regulasi yang sudah ditetapkan oleh Pemerintah.</p>
                        {{-- <a href="contact-us-modern.html" class="btn btn-medium btn-fast-blue btn-round-edge">Get Started Now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<br>
<br>
<br>

<!-- start section -->
<section class="big-section bg-seashell p-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="d-flex flex-column">
                    <div class="row">
                        <div class="col-12 col-sm-6 cover-background xs-h-300px wow animate__fadeIn" data-wow-delay="0.4s" style="background-image: url('{{ asset ('assets/client/images/GIS/landing/visi.jpg')}}')"></div>
                        <div class="col-12 col-sm-6 bg-seashell wow animate__fadeIn" data-wow-delay="0.5s">
                            <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                <span class="text-white alt-font font-weight-600 text-extra-dark-gray text-large margin-20px-bottom d-block" style="font-size:200%">Visi</span>
                                <p class="text-white-transparent">Menjadi Lembaga Sertifikasi yang diakui baik di wilayah Indonesia maupun Internasional dan memegang komitmen untuk maju bersama dalam meningkatkan mutu kualitas produk, proses dan jasa dari masa ke masa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 cover-background order-sm-2 xs-h-300px wow animate__fadeIn" data-wow-delay="0.8s" style="background-image: url('{{ asset ('assets/client/images/GIS/landing/misi.jpg')}}')"></div>
                        <div class="col-12 col-sm-6 bg-seashell order-sm-1 wow animate__fadeIn" data-wow-delay="0.5s">
                            <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                <span class="text-white alt-font font-weight-600 text-extra-dark-gray text-large margin-20px-bottom d-block" style="font-size:200%">Misi</span>
                                <ul class="list-style-06">
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Membantu dan mendukung kebijakan Pemerintah dalam meningkatkan kualitas industri melalui penerapan sistem manajemen yang sesuai dan berkembang secara berkelanjutan.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px  last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Membantu dan mendukung konsumen dalam implementasi dan pengembangan sistem manajemen.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Penghematan biaya melalui peningkatan efisiensi sehingga memberikan keunggulan kompetitif.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Penghematan biaya melalui peningkatan efisiensi sehingga memberikan keunggulan kompetitif.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px  last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Meningkatkan kompetensi sarana dan prasarana termasuk SDM yang professional di bidang sistem manajemen.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Menjadi partner para pelaku usaha untuk meningkatkan mutu kualitas yang lebih baik.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 cover-background xs-h-300px wow animate__fadeIn" data-wow-delay="0.5s" style="background-image: url('{{ asset ('assets/client/images/GIS/landing/foya.jpg')}}')"></div>
                        <div class="col-12 col-sm-6 bg-seashell wow animate__fadeIn" data-wow-delay="0.5s">
                            <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                <span class="text-white alt-font font-weight-600 text-extra-dark-gray text-large margin-20px-bottom d-block" style="font-size:200%">Sasaran Mutu</span>
                                <ul class="list-style-06">
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.2s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">
                                            Agar setiap tahun, Lembaga Sertifikasi Produk dan Sistem Manajemen PT. Global Inspeksi Sertifikasi menambah akreditasi terhadap sertifikasi terhadap lingkup produk dan sistem manajemen dan ruang lingkup yang diajukan.</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px  last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Implementasi secara menyeluruh untuk sertifikasi produk dan sistem manajemen yang ditetapkan..</p>
                                        </div>
                                    </li>
                                    <li class="border-radius-6px last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                                        <div><span class="w-25px h-25px text-center bg-fast-blue rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                        <div><p style="text-align: justify;" class="text-white-transparent">Pelaksaan tepat waktu pada semua perencanaan sistem manajemen</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="big-section">
    <div class="container">
        <div class="row">
            <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font font-weight-500 margin-7-rem-bottom md-margin-5-rem-bottom sm-margin-20px-bottom">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#planning-tab">Kebijakan Ketidakberpihakan</a><span class="tab-border bg-extra-dark-gray"></span></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#research-tab">Komitmen Anti Suap</a><span class="tab-border bg-extra-dark-gray"></span></li>
                </ul>
                <!-- end tab navigation -->
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="planning-tab" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12 offset-lg-1 col-md-6 text-center text-sm-start">
                                <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-15px-bottom d-inline-block" style="font-size: 14pt;">Kebijakan</span>
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom">Ketidakberpihakan</h5>
                                <p class="w-85 lg-w-100" style="text-align:justify;">Pelayanan jasa sertifikasi Produk ataupun Sistem Manajemen yang dilakukan oleh Lembaga Sertifikasi PT Global Inspeksi Sertifikasi dimaksudkan agar terwujud kepercayaan pemohon/ klien terhadap produk yang dihasilkannya memenuhi persyaratan Standar Nasional (SNI), Sistem Manajemen maupun persyaratan lainnya yang telah ditetapkan, dan adanya perlindungan konsumen serta untuk meningkatkan daya saing dalam pasar domestik .
                                    Setiap personel sesuai dengan kompetensinya di semua tingkatan organisasi wajib memenuhi tuntutan mutu pelayanan jasa sertifikasi produk dan sistem manajemen, dan menghindarkan diri dari segala bentuk tekanan, termasuk tekanan komersial, yang dapat mempengaruhi mutu pelayanan sertifikasi.
                                    Pelayanan jasa sertifikasi produk dan Sistem Manajemen Lembaga Sertifikasi PT Global Inspeksi Sertifikasi dilaksanakan sesuai dengan lingkup sertifikasi</p>
                                <p class="w-95" style="text-align: justify;">Tangerang, 1 Desember 2016 <br>PT Global Inspeksi Sertifikasi</p>
                                <p class="w-95" style="text-align: justify;">
                                    <span class="font-weight-600">Direktur<br><br>
                                    Vera Marini</span></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="research-tab" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12 offset-lg-1 col-md-6 text-center text-sm-start">
                                <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-15px-bottom d-inline-block" style="font-size: 14pt;">Komitmen</span>
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom">Anti Suap</h5>
                                <p class="w-85 lg-w-100" style="text-align:justify;">
                                    PT Global Inspeksi Sertifikasi berkomitmen untuk menjalankan anti-suap dalam melaksanakan layanannya baik dalam sertifikasi, inspeki dan juga mengendalikan risiko suap. Setiap penipuan, penipuan, ketidakjujuran, pencurian / penggelapan, pelanggaran dalam proses pengadaan barang dan jasa, penyalahgunaan posisi / otoritas, penyuapan / gratifikasi yang terjadi di PT Global Inspeksi Sertifikasi atau terkait dengan PT Global Inspeksi Sertifikasi harap dapat dilaporkan agar dapat segera ditindaklanjutin. PT Global Inspeksi Sertifikasi menganalisis laporan dan menindaklanjuti laporan pelanggaran berdasarkan bukti yang diberikan dan melindungi Pelapor.
                                    <br><br>Pelaporan ini dilakukan dengan dukungan data yang relevan dan dimaksudkan untuk kepentingan Perusahaan, tidak dimaksudkan untuk memaksakan seseorang. Pelaporan dapat disampaikan kepada Direktur PT Global Inspeksi Sertifikasi atau Bagian Informasi Umum, melalui informasi sebagai berikut:
                                    <br>Email : csglobalinspeksisertifikasi@gmail.com
                                    <br>Telepon : +62 21 50208008
                                    <br>Telepon : +62 21 50560008
                                    <br>Fax :+62 21 50208009
                                    <br>Fax :+62 21 50560009
                                    <br>Situs web : www.gis-cert.com
                                    <br>Surat : PT. Global Inspeksi Sertifikasi Foresta Business Loft 2 Unit 16, BSD – Indonesia
                                    <br><br>Pelapor harus memberikan identitas mereka dalam melaporkan keluhan dan memastikan bahwa setiap informasi tentang identitas pihak pelapor dan laporannya dijaga kerahasiaannya. Pelaporan dilakukan di bawah prinsip anonim, rahasia dan independen.
                                    <p class="w-95" style="text-align: justify;">
                                        <span class="font-weight-600">Direktur<br><br>
                                        Vera marini</span></p>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </div>
    </div>
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
</section>
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

