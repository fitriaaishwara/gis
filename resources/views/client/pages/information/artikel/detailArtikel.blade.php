@extends('client.layouts.app')
@section('content')

@foreach ($articles as $article)
@section('title', "$article->title")
@section('meta_description', "$article->description")
@section('meta_keywords', "$article->keywords")

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
<section class="cover-background" data-parallax-background-ratio="0.5" style="background: url('{{ url ('storage/images/header/' . $article->articleHeaders->image) }}');">
    <div class="opacity-extra-medium-2 bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-10 position-relative one-half-screen d-flex justify-content-end flex-column sm-h-400px">
                <h2 class="alt-font text-white font-weight-500 margin-5-half-rem-bottom w-85 lg-w-100">{{ $article->title }}</h2>
                <ul class=" list-unstyled">
                    <li class="d-block d-sm-inline-block margin-50px-right xs-margin-10px-bottom xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">Author name</span>
                        <a class="text-white alt-font">{{ $article->user->name ?? 'Unknown'}}</a>
                    </li>
                    <li class="d-block d-sm-inline-block margin-50px-right xs-margin-10px-bottom xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">Publication date</span>
                        <a class="text-white alt-font">{{ date('d F Y', strtotime($article->date))}}</a>
                    </li>
                    <li class="d-block d-sm-inline-block margin-50px-right xs-no-margin-right">
                        <span class="text-white opacity-5 d-block">Categories</span>
                        <a class="text-white alt-font">{{ $article->categories->name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 last-paragraph-no-margin sm-margin-30px-bottom">
                <h6 class="text-extra-dark-gray font-weight-500">{{ $article->title }}</h6>
                <p>{!! $article->content !!}</p>
            </div>
            <div class="col-12 col-lg-4 offset-lg-1 col-md-5">
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categories</span>
                    <ul class="list-style-07 list-unstyled">
                        @foreach ($articleCat  as $item)
                        <li>
                            <a href="{{ url('/article/category/' . $item->name ) }}" >{{ $item->name }}</a><span class="item-qty">{{ $item->articles->count() }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                    <ul class="latest-post-sidebar position-relative">
                        @foreach ($articlesRecent as $article)
                        <li class="d-flex wow animate__fadeIn" data-wow-delay="0.2s">
                            <figure class="flex-shrink-0">
                                <a href="{{ url('detail' , $article->slug ) }}"><img class="border-radius-3px" src="{{ url ('storage/images/header/' . $article->articleHeaders->image) }}" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1">
                                <a href="{{ url('detail' , $article->slug ) }}" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">{{ $article->title }}</a>
                                {{-- <span class="text-medium d-block line-height-22px">{{ Str::limit ($article->description, 25) }}</span> --}}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container">
        {{-- <div class="row">
            <div class="col-12 col-lg-10 d-flex flex-wrap align-items-center mx-auto margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="col-12 col-md-9 text-center text-md-start sm-margin-10px-bottom px-0">
                    <div class="tag-cloud">
                        <a href="blog-grid.html">Development</a>
                        <a href="blog-grid.html">Events</a>
                        <a href="blog-grid.html">Media</a>
                        <a href="blog-grid.html">Mountains</a>
                    </div>
                </div>
                <div class="col-12 col-md-3 text-center text-md-end px-0">
                    <a class="likes-count text-uppercase text-extra-dark-gray font-weight-500" href="#"><i class="far fa-heart"></i><span>05 Likes</span></a>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto margin-60px-bottom md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="w-100 box-shadow-small align-items-center border-radius-5px padding-4-rem-all text-center margin-60px-right">
                    <img src="{{ !empty($article->user->photo) ? asset('storage/images/profile/' . $article->user->photo) : asset('assets/admin/media/avatars/avatar0.jpg') }}" class="rounded-circle w-110px" alt="photo profile"/>
                    <br><a class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">{{ $article->user->name ?? 'Unknown' }}</a>
                    <span class="text-medium d-block line-height-18px sm-margin-15px-bottom">Author</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 text-center elements-social social-icon-style-09 mx-auto">
                <ul class="medium-icon">
                    <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/profile.php?id=100083356178054&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="whatsapp" href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang Sertifikasi ISO dan Lainnya" target="_blank"><i class="fab fa-whatsapp"></i><span></span></a></li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="https://www.instagram.com/ptglobalinspeksisertifikasi/" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                    <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="email" href="mailto:csglobalinspeksisertifikasi@gmail.com" target="_blank"><i class="fas fa-envelope"></i><span></span></a></li>
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
            <a href="//api.whatsapp.com/send?phone=+6281386647726&text=Halo Global Inspeksi Sertifikasi, Saya ingin bertanya tentang Sertifikasi ISO dan Lainnya" id='send-it'><i class='fab fa-whatsapp'></i>&nbsp Start Chat</a>
        </div>
    </div>
    <div id='get-number'>
    </div>
    <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Chat With Us</a>
<!-- end section -->
{{-- <!-- start section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <span class="alt-font font-weight-500 text-uppercase d-inline-block">You may also like</span>
                <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related posts</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/850x885" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">23 February 2020</a>
                                <a href="blog-post-layout-01.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Build perfect websites</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/850x885" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">18 February 2020</a>
                                <a href="blog-post-layout-02.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Beautiful layouts design</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/850x885" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">23 January 2019</a>
                                <a href="blog-post-layout-03.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Fashion is not something</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section --> --}}
@endforeach
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
