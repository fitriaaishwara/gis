@extends('client.layouts.app')
@section('content')
@section('title', 'Verification Certificate - LSUP')
@section('meta_description', '')
@section('meta_keywords', '')

<section class="bg-custom-footer padding-25px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-8 col-lg-6">
                <!-- start page title -->
                <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-start">Detail Certificate</h1>
                <!-- end page title -->
            </div>
            <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                <!-- start breadcrumb -->
                <ul class="xs-text-center">
                    {{-- <li><a href="index.html" class="text-white-hover">Home</a></li> --}}
                    <li><a class="text-white-hover">Information</a></li>
                    <li>Verification Certificate</li>
                    <li>LSUP</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>

<section class="container py-5-5 my-5-5">
    <h4 class="alt-font font-weight-600 text-slate-blue letter-spacing-minus-1px margin-15px-bottom text-center">Verification Certificate</h4>
    <p class="w-75 mx-auto lg-w-95 sm-w-100 text-center">Lembaga Sertifikasi Usaha Pariwisata (LSUP)</p>
    <br>
    <table class="w-100 table table-sm table-hover justify-content-center">
        <thead>
            <tr>
                <td class="font-weight-600">
                    Business Name
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ $verifikasi->business_name }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Business Address
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ $verifikasi->business_address }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Company Name
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ $verifikasi->company_name }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Agreement Number
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ $verifikasi->agreement_number }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Status
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    @if ($verifikasi->certificate_status == 10)
                        Valid
                        @elseif ($verifikasi->certificate_status == 11)
                        Suspend
                        @elseif ($verifikasi->certificate_status == 12)
                        Withdraw
                        @elseif ($verifikasi->certificate_status == 13)
                        Expired
                    @endif
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Surveillance 1
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ date('d F Y', strtotime($verifikasi->first_surveillance)) }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Surveillance 2
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ date('d F Y', strtotime($verifikasi->second_surveillance)) }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Certificate Date
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ date('d F Y', strtotime($verifikasi->certificate_date)) }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Issue Date
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ date('d F Y', strtotime($verifikasi->issue_date)) }}
                </td>
            </tr>
            <tr>
                <td class="font-weight-600">
                    Expired Date
                </td>
                <td style="width: 10px" class="text-center">
                    :
                </td>
                <td>
                    {{ date('d F Y', strtotime($verifikasi->expired_date)) }}
                </td>
            </tr>
        </thead>
    </table>
    <div class="row justify-content-center">
        <div class="col-12 col">
            <a href="#" class="btn btn-sm btn-fast-red d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"  onclick="window.history.back()"><i class="fa fa-arrow-left left-icon"></i>Back</a>
            {{-- <button class="btn btn-primary btn-sm" onclick="window.history.back()">Back</button> --}}
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


@endsection
