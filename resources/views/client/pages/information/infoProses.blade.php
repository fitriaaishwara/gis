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


<section class="big-section parallax wow animate__fadeIn" data-parallax-background-ratio="0.1" style="background-image: url({{ asset('assets/client/images/GIS/gallery.png')}}); visibility: visible; animation-name: fadeIn; background-position: 50% 20.9156px;">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center wow animate__zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                {{-- <span class="alt-font font-weight-500 text-white text-uppercase letter-spacing-2px opacity-5 d-block margin-30px-bottom md-margin-20px-bottom">Category</span> --}}
                <h2 class="alt-font font-weight-500 text-white letter-spacing-minus-2px margin-50px-bottom md-margin-40px-bottom" style="font-size:35pt;">Informasi Proses Sertifikasi</h2>
                {{-- <a href="{{ url('/artikel')}}" class="btn btn-fancy btn-large btn-gradient-magenta-orange btn-round-edge-small">All News & Event</a> --}}
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="big-section bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-10">
                <div class="panel-group accordion-event accordion-style-03" id="accordion3" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="panel-heading active-accordion">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-01" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pemberian Sertifikat</span>
                                    <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-01" class="panel-collapse collapse show" data-bs-parent="#accordion3">
                            <div class="panel-body">Pemberian sertifikat dilakukan setelah klien memenuhi seluruh persyaratan standard dan peraturan yang diacu dalam proses sertifikasi oleh PT. Global Inspeksi Sertifikasi melalui proses audit dan proses perbaikan yang telah dilakukan dan di validasi
                                Keputusan sertifikasi yang dilakukan oleh PT. Global Inspeksi Sertifikasi bersifat objektif tanpa ada unsur tekanan dan keberpihakan Klien untuk selanjutnya dapat menggunakan sertifikat tersebut sesuai dengan lingkup yang diajukan dan sesuai dengan peraturan baik dari internal maupun peraturan PT. Global Inspeksi Sertifikasi.</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-02" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Penolakan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-02" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Penolakan permohonan sertifikasi dapat dikarenakan :<br>
                                Lembaga sertifikasi tidak dapat mensertifikasi ruang lingkup yang diajukan oleh pemohon
                                Pemohon dalam proses pengajuannya belum dapat memenuhi persyaratan standard yang dijadikan acuan sehingga proses sertifikasi belum dapat berjalan
                                Sedangkan dalam keputusan sertifikasi, penolakan dapat terjadi karena :<br>
                                Terjadi ketidaksesuaian yang signifikan pada sistem manajemen yang tidak dapat ditolerir sehingga proses sertifikasi dihentikan
                                Pada proses perbaikan ketidaksesuaian, pemohon tidak dapat menunjukan perbaikan telah dilakukan sampai batas waktu yang telah ditetapkan oleh PT. Global Inspeksi Sertifikasi
                                Apabila klien tidak menyetujui keputusan terkait sertifikasi, klien dapat melakukan banding (prosesnya terdapat pada bagian banding).</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-03" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pemeliharaan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Pemeliharaan sertifikat akan dilakukan oleh PT. Global Inspeksi Sertifikasi dengan melakukan pengawasan berkala minimal 1 (satu) kali setahun dan pengawasan sewaktu‑waktu jika diperlukan, untuk memastikan bahwa perusahaan yang telah disertifikasi selalu memenuhi persyaratan mutu dan standar yang digunakan untuk sertifikasinya.</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="panel-heading active-accordion">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-04" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pembaruan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-04" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Pembaruan sertifikat dilakukan pada saat masa berlaku seritifikat akan habis (tidak melewati tanggal akhir berlaku sertifikat). PT. Global Inspeksi Sertifikat akan melakukan penilaian ulang terhadap implementasi dan efektifitas sistem manajemen klien serta performa dari sistem manajemen klien selama periode waktu berjalan.
                                <br>Apabila klien dalam peniliaiannya memenuhi persyaratan standard dan peraturan yang dijadikan acuan sistem manajemen, maka sertifikat sistem manajemen klien akan diperpanjang sesuai dengan masa berlaku sistem manajemen.</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-06" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pembekuan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-05" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Pembekuan seritfikat dilakukan bila terjadi ketidaksesuaian sigifikan pada sistem manajemen ketika dilakukan pemeliharaan sertifikat atau ketika terjadi keluhan dari pihak-pihak terkait yang kemudian ditindaklanjuti oleh PT. Global Inspeksi Sertifikasi dengan melakukan pemilharaan tidak terjadwal.
                                <br>
                                Pembekuan tersebut membuat sertifikat tidak dapat digunakan sementara, sampai ketidaksesuaian yang terjadi telah diperbaiki oleh klien. Apabila dalam jangka waktu tertentu yang telah ditetapkan klien tidak dapat memperbaiki ketidaksesuaian maka sertifikat dapat dicabut</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-06" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pemulihan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-06" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Pemulihan sertifikat untuk sertifikat yang dibekukan akan dilakukan setelah PT. Global Inspeksi Sertifikasi memastikan bahwa ketidaksesuaian yang menyebabkan pembekuan sertifikat telah diperbaiki dan ditinjau keefektifitasannya.</div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-07" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pencabutan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-07" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">Pencabutan sertifikat perusahaan dilakukan dengan pertimbangan:
                                <br>
                                - keinginan perusahaan<br>
                                - pelanggaran terhadap standar yang diacu.<br>
                                - kegagalan dalam memenuhi ketetapan prosedur sertifikasi.<br>
                                - tidak memenuhi persyaratan sertifikasi baru karena adanya revisi standar<br>
                                - perusahaan mengalami kebangkrutan.<br>
                                - melakukan pelanggaran / penyalahgunaan sertifikat<br>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-08" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Perluasan Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-08" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">
                                Perluasan sertifikat diberikan kepada perusahaan dengan mengajukan permohonan perluasan ruang lingkup sertifikat sistem manajemen, setelah memenuhi ketentuan yang berlaku.
                                <br>Penilaian akan dilakukan untuk ruang lingkup yang diajukan guna memastikan ruang lingkup tersebut memenuhi seluruh persyaratan standard dan peraturan yang digunakan
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="panel-heading">
                            <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-09" aria-expanded="false">
                                <div class="panel-title">
                                    <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Pengurangan Ruang Lingkup Sertifikat</span>
                                    <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-03-09" class="panel-collapse collapse" data-bs-parent="#accordion3">
                            <div class="panel-body">
                                Pengurangan ruang lingkup sertifikat dapat terjadi jika terjadi ketidaksesuaian signifikan ruang lingkup tersebut terhadap persyaratan standard dan peraturan yang diacu.
                                <br>Pengurangan ruang lingkup sertifikat juga dapat terjadi karena pengajuan dari klien serta faktor lain yang dapat mempengaruhi kesesuaian ruang lingkup terkait terhadap standard.
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
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

