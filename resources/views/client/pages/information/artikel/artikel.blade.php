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
                    <li><a class="text-white-hover">Information</a></li>
                    <li><a class="text-white-hover" href="{{ url ('/artikel') }}">Artikel</a></li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!-- start section -->
<section class="blog-right-side-bar pt-0">
    <div class="container">
        <div class="row justify-content-center">
            @if ($articles->count())
                <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                    @foreach ($articles as $article)
                    <!-- start blog item -->
                    <div class="col-12 blog-post-content border-all border-color-medium-gray border-radius-6px overflow-hidden text-center p-0 margin-4-half-rem-bottom wow animate__fadeIn">
                        <div class="blog-image"><a href="{{ url('detail' , $article->slug ) }}"><img src="{{ url ('storage/images/header/' . $article->articleHeaders->image) }}" alt="{{ $article->articleHeaders->alt }}"/></a></div>
                        <div class="blog-text d-inline-block w-100">
                            <div class="content padding-5-half-rem-all lg-padding-4-half-rem-all xs-padding-20px-lr xs-padding-40px-tb position-relative mx-auto w-90 lg-w-100">
                                <div class="blog-details-overlap text-small font-weight-500 bg-custom border-radius-4px alt-font text-white text-uppercase"><a href="{{ url('detail' , $article->slug ) }}" class="text-white">{{ date('d F Y', strtotime($article->date))}}</a> <span class="margin-5px-lr">•</span> <a href="blog-masonry.html" class="text-white">{{ $article->categories->name }}</a></div>
                                <h6 class="alt-font font-weight-500"><a href="{{ url('artikel' , $article->slug ) }}" class="text-extra-dark-gray text-fast-blue-hover">{{ $article->title }}</a></h6>
                                <p>{{ Str::limit ($article->description, 200) }}</p>
                                <a href="{{ url('detail' , $article->slug ) }}" class="btn btn-small btn-transparent-dark-gray btn-round-edge btn-slide-up-bg margin-10px-top">Continue Reading <span class="bg-extra-dark-gray"></span></a>
                            </div>
                            <div class="row row-cols-1 author border-top border-color-extra-medium-gray text-medium-gray text-very-small text-uppercase alt-font m-0">
                                <div class="col col-sm blog-hover-btn padding-20px-tb border-right border-color-extra-medium-gray xs-no-border-right xs-border-bottom">
                                    <a href="{{ url('detail' , $article->slug ) }}"><i class="far fa-user blog-icon"></i><i class="far fa-user blog-icon blog-icon-hover text-sky-blue"></i>By  {{ $article->user->name ?? 'Unknown'}}</a>
                                </div>
                                {{-- <div class="col col-sm blog-hover-btn padding-20px-tb border-right border-color-extra-medium-gray xs-no-border-right xs-border-bottom">
                                    <a href="blog-post-layout-01.html"><i class="far fa-heart blog-icon"></i><i class="far fa-heart blog-icon blog-icon-hover text-sky-blue"></i>05 Like post</a>
                                </div>
                                <div class="col col-sm blog-hover-btn padding-20px-tb">
                                    <a href="blog-post-layout-01.html"><i class="far fa-comment blog-icon"></i><i class="far fa-comment blog-icon blog-icon-hover text-sky-blue"></i>23 Comment</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- end blog item -->
                    @endforeach
                    <!-- start pagination -->

                    <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top xs-margin-4-rem-top wow animate__fadeIn">
                        {{ $articles->links() }}
                    </div>
                    <!-- end pagination -->
                </div>
            @else
                <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                    <div class="col-12 blog-post-content overflow-hidden text-center p-0 margin-4-half-rem-bottom wow animate__fadeIn">
                        <div class="blog-text d-inline-block w-100">
                            <div class="content padding-5-half-rem-all lg-padding-4-half-rem-all xs-padding-5px-lr xs-padding-40px-tb position-relative mx-auto w-90 lg-w-100">
                                <h6 class="alt-font font-weight-500"><a class="text-extra-dark-gray">Artikel tidak ditemukan</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- start sidebar -->
            <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                <div class="d-inline-block w-100 margin-5-rem-bottom">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                    <form method="get" action="{{ url('/artikel') }}">
                        <div class="position-relative">
                            <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Search" name="search" value="{{ request('search') }}" />
                            <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                        </div>
                    </form>
                </div>
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
                {{-- <div class="margin-5-rem-bottom xs-margin-35px-bottom md-padding-3-rem-top wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Tags</span>
                    <div class="tag-cloud">
                        <a href="blog-grid.html">Development</a>
                        <a href="blog-grid.html">Mountains</a>
                        <a href="blog-grid.html">Lifestyle</a>
                        <a href="blog-grid.html">Hotel</a>
                        <a href="blog-grid.html">Event</a>
                        <a href="blog-grid.html">Multimedia </a>
                        <a href="blog-grid.html">Fashion</a>
                    </div>
                </div> --}}
            </aside>
            <!-- end sidebar -->
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
