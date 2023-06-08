@extends('client.layouts.app')
@section('content')
@section('title', 'Verification Certificate')
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
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-start">Verification Certificate</h1>
                <!-- end page title -->
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                <!-- start breadcrumb -->
                <ul class="xs-text-center">
                    {{-- <li><a href="index.html" class="text-white-hover">Home</a></li> --}}
                    <li><a class="text-white-hover">Information</a></li>
                    <li>Verification Certificate</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>

{{-- <!-- start section -->
<section class="cover-background h-550px lg-h-500px xs-h-auto" style="background-image:url('http://localhost:8080/project/template/html/images/home-seo-agency-bg-02.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-3 col-lg-4 text-center text-lg-start md-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                <span class="alt-font font-weight-500 text-medium-slate-blue letter-spacing-1px d-inline-block text-uppercase margin-10px-bottom sm-margin-10px-bottom">Boost website speed?</span>
                <h4 class="alt-font font-weight-600 text-gradient-magenta-orange-2 mb-0">Verifikasi Sertifikat</h4>
            </div>
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 offset-xl-1 col-md-3 col-sm-6 text-center wow animate__zoomIn" data-wow-delay="0.3s">
                <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-35px-tb lg-padding-1-rem-lr">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-monitor icon-extra-medium text-gradient-magenta-orange-2 margin-20px-bottom d-inline-block"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 d-block text-medium-slate-blue line-height-24px">LSPRO</span>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-6px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-3 col-sm-6 text-center wow animate__zoomIn" data-wow-delay="0.4s">
                <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-35px-tb lg-padding-1-rem-lr">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-clock icon-extra-medium text-gradient-magenta-orange-2 margin-20px-bottom d-inline-block"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 d-block text-medium-slate-blue line-height-24px">LSUP</span>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-6px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-3 col-sm-6 text-center wow animate__zoomIn" data-wow-delay="0.5s">
                <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-35px-tb lg-padding-1-rem-lr">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-thumbs-up icon-extra-medium text-gradient-magenta-orange-2 margin-20px-bottom d-inline-block"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 d-block text-medium-slate-blue line-height-24px">Sistem Management</span>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-6px"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-lg-2 col-md-3 col-sm-6 text-center wow animate__zoomIn" data-wow-delay="0.6s">
                <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-35px-tb lg-padding-1-rem-lr">
                    <div class="feature-box-icon">
                        <i class="feather icon-feather-globe icon-extra-medium text-gradient-magenta-orange-2 margin-20px-bottom d-inline-block"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 d-block text-medium-slate-blue line-height-24px">Google advertising</span>
                    </div>
                    <div class="feature-box-overlay bg-white border-radius-6px"></div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end section --> --}}
<!-- start section -->
<section class="parallax overflow-visible wow animate__fadeIn" id="services" data-parallax-background-ratio="0.1" style="background-image: url('images/our-services-17.png');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-12 col-lg-8 col-md-12 md-margin-40px-bottom">
                <div class="row">
                    <div class="col-12 position-relative margin-2-half-rem-bottom sm-margin-2-half-rem-bottom">
                        <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">What we offer services</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray">Verification Certificate</h5>
                    </div>
                </div>
                <div class="col-12 col-lg-10 tab-style-05">
                    <div class="tab-box">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs margin-2-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr align-items-center font-weight-500 text-uppercase">
                            <li class="nav-item alt-font"><a class="nav-link active" href="#tab-nine1" data-bs-toggle="tab">LSUP & CHSE</a></li>
                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine2" data-bs-toggle="tab">LSPRO</a></li>
                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine5" data-bs-toggle="tab">Pasar Rakyat</a></li>
                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine3" data-bs-toggle="tab">Sistem Management</a></li>
                            <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine4" data-bs-toggle="tab">ISPO</a></li>
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane med-text fade in active show" id="tab-nine1">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start contact form -->
                                <form class="margin-30px-bottom" action="" method="POST" id="search-lsup">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Company Name</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="company_name" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Agreement Number</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="agreement_number" name="agreement_number" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="mb-1 mt-1 me-1 btn btn-fast-red" form="search-lsup"><i class="fa fa-check"></i>Verify</button>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab-nine2">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start contact form -->
                                <form class="margin-30px-bottom" action="" method="POST" id="search-lspro">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Company Name</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="company_name" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">SNI Number</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="sni_number" name="sni_number" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="mb-1 mt-1 me-1 btn btn-fast-red" form="search-lspro"><i class="fa fa-check"></i> Verify</button>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab-nine5">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start contact form -->
                                <form class="margin-30px-bottom" action="" method="POST" id="search-pasarRakyat">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Nama Pasar</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="namaPasar" name="namaPasar" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Nomor SNI</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="nomorSNI" name="nomorSNI" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="mb-1 mt-1 me-1 btn btn-fast-red" form="search-pasarRakyat"><i class="fa fa-check"></i> Verify</button>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab-nine3">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion3" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start contact form -->
                                <form class="margin-30px-bottom" action="" method="POST" id="search-management">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Company Name</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="company_name" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Scope</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="scope" name="scope" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="mb-1 mt-1 me-1 btn  btn-fast-red" form="search-management"><i class="fa fa-check"></i>Verify</button>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab-nine4">
                            <div class="panel-group accordion-event accordion-style-04" id="accordion3" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                <!-- start contact form -->
                                <form class="margin-30px-bottom" action="" method="POST" id="search-ispo">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Company Name</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="nama_perusahaan" name="nama_perusahaan" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label mb-1 text-2">Certificate Number</label>
                                            <input type="text" value="" maxlength="100" class="form-control text-3 h-auto py-2" id="no_sertifikat" name="no_sertifikat" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="mb-1 mt-1 me-1 btn  btn-fast-red" form="search-ispo"><i class="fa fa-check"></i>Verify</button>
                                </form>
                                <!-- end contact form -->
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
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
