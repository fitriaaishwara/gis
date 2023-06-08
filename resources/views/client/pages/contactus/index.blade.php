@extends('client.layouts.app')
@section('content')
@section('title', 'Contact Us')
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
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-start">Contact Us</h1>
                <!-- end page title -->
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                <!-- start breadcrumb -->
                <ul class="xs-text-center">
                    {{-- <li><a href="index.html" class="text-white-hover">Home</a></li>
                    <li><a href="#" class="text-white-hover">Elements</a></li> --}}
                    <li>Contact Us</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class="big-section home-freelancer-bg-img wow animate__fadeIn" style="background:url('{{ url('client/images/GIS/home-freelancer-img-06.jpg')}}')  no-repeat top left;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-8 d-flex flex-column md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-2px mb-lg-auto md-margin-5-rem-bottom"><span class="text-border text-border-color-black text-border-width-2px opacity-3">Diskusikan</span><br /> <p style="font-size: 50pt">Dengan Kami</p></h1>
                <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray text-uppercase d-block margin-25px-bottom">Contact info</span>
                <p class="mb-0">Foresta Business Loft 2 Unit 16, Jln BSD Raya Utama, Tangerang, 15339, Indonesia.</p>
                <p>
                    <span class="font-weight-500 text-extra-dark-gray">Tel:</span> 021 50208008 <br />
                    <span class="font-weight-500 text-extra-dark-gray">Tel:</span> 021 50560008 <br />
                    <span class="font-weight-500 text-extra-dark-gray">Fax:</span> 021 50208009 <br />
                    <span class="font-weight-500 text-extra-dark-gray">Fax:</span> 021 50560009 <br />
                    <span class="font-weight-500 text-extra-dark-gray">Email:</span><a href="mailto:csglobalinspeksisertifikasi@gmail.com" class="text-extra-dark-gray-hover"> csglobalinspeksisertifikasi@gmail.com</a>
                </p>
                <div class="social-icon-style-02">
                    <ul class="medium-icon">
                        <li class="m-0"><a class="facebook text-start" href="https://www.facebook.com/profile.php?id=100083356178054&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="m-0"><a class="instagram text-start" href="https://www.instagram.com/ptglobalinspeksisertifikasi/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="m-0"><a class="email text-start" href="mailto:csglobalinspeksisertifikasi@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
                        <li class="m-0"><a class="whatsapp text-start" href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang Sertifikasi ISO dan Lainnya" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 col-md-8 wow animate__fadeIn" data-wow-delay="0.4s">
                @if (Session::has('error'))
                <div class="alert alert-danger mb-3">{{ Session::get('error') }}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-succes mb-3">{{ Session::get('success') }}</div>
                @endif
                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-5-rem-bottom letter-spacing-minus-1px">Let's get in touch with us</h5>
                <div class="row">
                    <div class="col-12 col-lg-12 tab-style-05">
                        <div class="tab-box">
                            <!-- start tab navigation -->
                            <ul class="nav nav-tabs margin-7-rem-bottom md-margin-5-rem-bottom xs-margin-15px-lr align-items-center font-weight-500 text-uppercase">
                                <li class="nav-item alt-font"><a class="nav-link active" href="#tab-nine1" data-bs-toggle="tab">Pengajuan</a></li>
                                <li class="nav-item alt-font"><a class="nav-link" href="#tab-nine2" data-bs-toggle="tab">Kritik & Saran</a></li>
                                <li class="nav-item alt-font"><a class="nav-link" href="whatsapp://send?text=Halo%20GIS%20Saya%20ingin%20bertanya%20tentang%20sertifikasi%20ISO%20dan%20lainnya&phone=+6281386647726">Chat With Us</a></li>
                            </ul>
                            <!-- end tab navigation -->
                        </div>
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane med-text fade in active show" id="tab-nine1">
                                <div class="panel-group accordion-event accordion-style-04" id="accordion1" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <form class="contact-form form-style-2 form-errors-light" action="{{ url('/kirimEmail') }}" method="POST" enctype="multipart/form-data" id="form-send-email-pengajuan">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="medium-input text-black bg-medium-gray margin-25px-bottom border-radius-10px">
                                                <select  id="type" name="type" class="form-control">
                                                    <option selected disabled>Pilih Jenis Kelengkapan Pengajuan</option>
                                                    @foreach ($tipePengajuan as $tipe)
                                                    <option value="{{$tipe->type}}">{{$tipe->type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="name" name="name" placeholder="Fullname" value="{{ old('name')}}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="email" value="" data-msg-required="Please enter your email." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="email" name="email" value="{{ old('email')}}" placeholder="Email" required>
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="number" value="" data-msg-required="Please enter your name." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone')}}" required>
                                                @error('phone_number')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="subject" name="subject" value="{{ old('subject')}}" placeholder="Subject" required>
                                                @error('subject')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col mb-4">
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="message" name="message" value="{{ old('message')}}" placeholder="Message" required></textarea>
                                                @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-center">
                                                <input type="submit" value="Ajukan Permohonan" class="btn btn-medium btn-fancy btn-gradient-magenta-orange mb-0" form="form-send-email-pengajuan" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab-nine2">
                                <div class="panel-group accordion-event accordion-style-04" id="accordion2" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                    <form class="contact-form form-style-2 form-errors-light" action="{{ url('/sendMail') }}" method="POST" enctype="multipart/form-data" id="form-send-email">
                                        @csrf

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="name" name="name" placeholder="Fullname" value="{{ old('name')}}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="email" value="" data-msg-required="Please enter your phone Email." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="email" name="email" value="{{ old('email')}}" placeholder="Email" required>
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" value="" data-msg-required="Please Enter Subject." maxlength="100" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="subject" name="subject" value="{{ old('subject')}}" placeholder="Subject" required>
                                                @error('subject')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col mb-4">
                                                <textarea maxlength="5000" data-msg-required="Please enter your Message." rows="4" class="input-border-bottom border-color-extra-light-gray large-input px-0 margin-25px-bottom border-radius-0px required" id="message" name="message" value="{{ old('message')}}" placeholder="Message" required></textarea>
                                                @error('message')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col text-center">
                                                <input type="submit" value="Kirim Kritik & Saran" class="btn btn-medium btn-fancy btn-gradient-magenta-orange mb-0" form="form-send-email" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
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
<!-- start section -->
<section class="bg-light-gray">
    <div class="container-fluid padding-twelve-lr xl-padding-ten-lr lg-padding-three-lr">
        <div class="row">
            <div class="col-12 text-center margin-7-rem-bottom">
                <span class="d-block alt-font margin-5px-bottom">Branch Office</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Global Inspeksi Sertifikasi</h5>
            </div>
            <div class="col-12 col-lg-4 col-sm-6 margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="bg-white border-radius-4px box-shadow-small padding-4-rem-all lg-padding-3-rem-all h-100">
                    <span class="alt-font text-extra-medium text-extra-dark-gray font-weight-500 d-block margin-15px-bottom">Jakarta</span>
                    <ul class="p-0 list-style-03 text-start margin-15px-bottom">
                        <li>Jl. Raya Daan Mogot No. 89 RT.2/RW.2, Wijaya Kusuma, Kec. Grogol Petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460</a></li>
                        <li>Email : globalinspeksisertifikasi@gmail.com</a></li>
                        <li>Tel : 021 50208008 <br>Fax : 021 50208009</a></li>
                    </ul>
                    {{-- <a href="#" class="btn btn-link btn-large text-fast-blue">See all articles</a> --}}
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-6 margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="bg-white border-radius-4px box-shadow-small padding-4-rem-all lg-padding-3-rem-all h-100">
                    <span class="alt-font text-extra-medium text-extra-dark-gray font-weight-500 d-block margin-15px-bottom">Surabaya</span>
                    <ul class="p-0 list-style-03 text-start margin-15px-bottom">
                        <li>Jl. Pahlawan No.2, Kwadengan Barat, Lemahputro, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61213</a></li>
                        <li>Email : globalinspeksisertifikasi@gmail.com</a></li>
                        <li>Tel : 031 99726239
                            <br>Fax : 021 50560009</a></li>
                    </ul>
                    {{-- <a href="#" class="btn btn-link btn-large text-fast-blue">See all articles</a> --}}
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-6 margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="bg-white border-radius-4px box-shadow-small padding-4-rem-all lg-padding-3-rem-all h-100">
                    <span class="alt-font text-extra-medium text-extra-dark-gray font-weight-500 d-block margin-15px-bottom">Medan</span>
                    <ul class="p-0 list-style-03 text-start margin-15px-bottom">
                        <li>Jl. Juanda No 61i , Medan , Sumatera utara – Indonesia</a></li>
                        <li>Email : globalinspeksisertifikasi@gmail.com</a></li>
                        <li>Tel : 061 42005051</a></li>
                    </ul>
                    {{-- <a href="#" class="btn btn-link btn-large text-fast-blue">See all articles</a> --}}
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-6 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="bg-white border-radius-4px box-shadow-small padding-4-rem-all lg-padding-3-rem-all h-100">
                    <span class="alt-font text-extra-medium text-extra-dark-gray font-weight-500 d-block margin-15px-bottom">Padang</span>
                    <ul class="p-0 list-style-03 text-start margin-15px-bottom">
                        <li>Jln Raya kampung jambak No 1A. depan universitas perintis (di sebelah gerbang perumahan jihad ). Kecamatan koto
                            tangah padang sumbar kode pos 25586</li>
                        <li>Email : globalinspeksisertifikasi@gmail.com</a></li>
                        <li>Tel : 021 50208008
                            <br>Fax : 021 50208009</li>
                    </ul>
                    {{-- <a href="#" class="btn btn-link btn-large text-fast-blue">See all articles</a> --}}
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-6 xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="bg-white border-radius-4px box-shadow-small padding-4-rem-all lg-padding-3-rem-all h-100">
                    <span class="alt-font text-extra-medium text-extra-dark-gray font-weight-500 d-block margin-15px-bottom">Batam</span>
                    <ul class="p-0 list-style-03 text-start margin-15px-bottom">
                        <li>Ruko Manalagi Blok C No 10. Kel. Belian.Kec. Batam. Batam, Kepri, Indonesia. Kota kode pos 29464</li>
                        <li>Email : globalinspeksisertifikasi@gmail.com</li>
                        <li>Tel : 021 50208008
                            <br>Fax : 021 50208009</li>
                    </ul>
                    {{-- <a href="#" class="btn btn-link btn-large text-fast-blue">See all articles</a> --}}
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
            <a href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang sertifikasi ISO dan lainnya" id='send-it'><i class='fab fa-whatsapp'></i>&nbsp Start Chat</a>
        </div>
    </div>
    <div id='get-number'>
    </div>
    <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Chat With Us</a>
<!-- end section -->
<script>
    $('select.form-control').select2({
        theme: "bootstrap-5",
        width: '100%'
    });
</script>
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

