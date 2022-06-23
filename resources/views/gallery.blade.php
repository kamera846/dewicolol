@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
@foreach ($sections as $section)
<?php 
$image = json_decode($section->cover);
?>
@if($section->slug === 'gallery')
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x1100') ?>);">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{ $section->title }}</h1>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end page title section --> 

<!-- start gallry content section -->
@foreach ($sections as $section )
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
            </ul>
            {{-- <div class="row justify-content-center">
                {{ $galleries->links() }}
            </div> --}}
        </div>
    </div>
</div>
</section>
@endif
@endif
@endforeach


<!-- end galleery content section -->

@endsection
