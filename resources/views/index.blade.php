@extends('layouts.main')

@section('page-content')

<!-- start slider section -->
<section class="p-0 wow animate__fadeIn">
    <div class="swiper-container full-screen black-move sm-h-500px md-landscape-h-580px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            @foreach ($sections as $section)
                @if($section->slug === 'carousel-1' && $section->isActive == 'true')
                <?php 
                    $image = json_decode($section->cover);
                ?>
                <div class="swiper-slide cover-background" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x991') ?>);">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                                <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">{{ $section->title }}</h1>
                                <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">{{$section->description}}</p>
                                {{-- <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-top">Download now</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- end slider item -->
            <!-- start slider item -->
            @if($section->slug === 'carousel-2' && $section->isActive == 'true')
                <?php 
                    $image = json_decode($section->cover);
                ?>
            <div class="swiper-slide cover-background" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x991') ?>);">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">{{$section->title}}</h1>
                            <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">{{$section->description}}</p>
                            {{-- <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-tb">Download now</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end slider item -->
            <!-- start slider item -->
            @if($section->slug === 'carousel-3' && $section->isActive == 'true')
                <?php 
                    $image = json_decode($section->cover);
                ?>
            <div class="swiper-slide cover-background" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x991') ?>);">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">{{$section->title}}</h1>
                            <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">{{$section->description}}</p>
                            {{-- <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-tb">Download now</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
        <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
        <!-- end slider navigation -->
    </div>
</section>
<!-- end slider section --> 
<!-- start story section -->
@foreach ($sections as $section)
@if($section->slug === 'about'  && $section->isActive == 'true')
<section class="wow animate__fadeIn">
    <div class="container"> 
        <div class="row align-items-center mb-5 md-margin-0px-bottom">
            <div class="col-12 col-lg-4 text-center md-margin-30px-bottom wow animate__fadeInLeft">
                <?php $image = json_decode($section->cover); ?>
                @if($image != null)
                    @foreach($image as $index => $item)
                            <div class="image"><img src="{{ asset('storage/' . $item) }}" alt="" style="min-height: 70vh;border-radius:10px; object-fit: cover;" width="100%"/></div>
                    @endforeach
                @else
                    <img src="https://via.placeholder.com/500x730" alt="" class="border-radius-6 w-100">
                @endif
            </div> 
            <div class="col-12 col-lg-8 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s">
                <h6 class="alt-font text-extra-dark-gray">Cerita Desa</h6>
                <p class="margin-5px-top"style="text-align: justify;">{!! $section->description !!}</p>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end story section -->
<!-- start feature box  -->
<section class="bg-extra-dark-gray wow animate__fadeIn md-padding-one-half-lr sm-padding-two-lr">
    <div class="container">
        <div class="row justify-content-center">
            <!-- feature box item-->
            @foreach ($sections as $section)
            @if ($section->slug === 'produk-1' && $section->isActive === 'true')
            <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">{{ $section->title }}</span>
                </div>
                <p class="w-90 lg-w-100">
                    {!! $section->description !!}
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            @endif
            @endforeach
            <!-- end feature box item-->
            <!-- feature box item-->
            @foreach ($sections as $section)
            @if ($section->slug === 'produk-2' && $section->isActive === 'true')
            <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100"> {{ $section->title }}</span>
                    {{-- Fasilitas Desa --}}
                </div>
                <p class="w-90 lg-w-100">
                    {{-- <ul>
                        <li>Areal Parkir</li>
                        <li>Balai Pertemuan</li>
                        <li>Homestay/Rumah Tinggal/Guest House</li>
                        <li>Kamar Mandi Umum</li>
                        <li>Kios Souvenir</li>
                        <li>Kuliner, Warung, Tempat Makan</li>
                        <li>Selfie Area, Spot Foto</li>
                    </ul> --}}
                    {!! $section->description !!}
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            @endif
            @endforeach
            <!-- end feature box item-->
            <!-- feature box item-->
            @foreach ($sections as $section)
            @if ($section->slug === 'produk-3' && $section->isActive === 'true')
            <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">{{ $section->title }} <br></span>
                    {{-- Makanan khas, Souvenir, <br> & Hasil Bumi --}}
                </div>
                <p class="w-90 lg-w-100">
                    {{-- <ul>
                        <li>Nasi Kaget Colol</li>
                        <li>Gelang Kopi Colol</li>
                        <li>Kopi Kemasan</li>
                        <li>Kopi</li>
                        <li>Ikan Air Tawar</li>
                    </ul> --}}
                    {!! $section->description !!}
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            @endif
            @endforeach
            <!-- end feature box item-->
        </div>
    </div>
</section>
<!-- end feature box -->
@foreach ($sections as $section)
    @if ($section->slug === 'gallery' && $section->isActive === 'true')
    @if($jumlah_galeri != 0)
    <section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">{{ $section->title }}</h5>
            </div>
        </div>
        <div class="row wow animate__fadeInUp">
            <div class="col-12 filter-content overflow-hidden">
                <ul class="hover-option2 portfolio-gallery portfolio-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium" style="position: relative; height: 227.75px;">
                    <li class="grid-sizer"></li>
                    <!-- start image gallery item -->
                    @foreach ($galleries as $gallery)
                    <li class="grid-item wow animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="{{ 'storage/' . $gallery->foto }}" title="{{ $gallery->judul }}" data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="{{ 'storage/' . $gallery->foto }}" alt="" class="project-img-gallery" data-no-retina="" style="max-height: 40vh; min-height:40vh; object-fit: cover">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">{{ $gallery->judul }}</h6>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    @endforeach
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    {{-- <li class="grid-item wow animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="{{ 'storage/' . $gallery->foto }}" title="{{ $gallery->judul }}" data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="{{ 'storage/' . $gallery->foto }}" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">{{ $gallery->judul }}</h6>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="{{ 'storage/' . $gallery->foto }}" title="{{ $gallery->judul }}" data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="{{ 'storage/' . $gallery->foto }}" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">{{ $gallery->judul }}</h6>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li> --}}
                    <!-- end image gallery item -->
                </ul>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endforeach
<!-- end galleery content section -->

<!-- start blog section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Artikel Terbaru</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start post item -->
                    @if($jumlah_blog >= 1)
                    @foreach($blogs as $blog)
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog/{{ $blog->slug }}">
                                    <img src="{{ 'storage/' . $blog->gambar_blog }}" alt="" style="min-height: 30vh; max-height: 30vh; object-fit: cover">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog/{{ $blog->slug }}" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">{{ $blog->judul }}</a>
                                <p>{{ substr(strip_tags($blog->konten), 0, 79) }}</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">Oleh {{ $blog->penulis }}&nbsp;&nbsp;|&nbsp;&nbsp;{{ $blog->created_at->isoFormat('d MMMM Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end blog section -->

@endsection