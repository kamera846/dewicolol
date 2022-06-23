@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
@foreach ($sections as $section)    
@if($section->slug === 'header-about' && $section->isActive === 'true')
    <?php 
      $image = json_decode($section->cover);
    ?>
<section class="wow animate__fadeIn cover-background background-position-top top-space" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x450' )?>);">
    {{--  --}}
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                <!-- start page title -->
                <h1 class="alt-font text-white-2 font-weight-600 mb-0">{{ $section->title }}</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end page title section -->     
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
                            <div class="image"><img src="{{ asset('storage/' . $item) }}" alt="" style="min-height: 70vh;border-radius:10px;object-fit: cover;" width="100%"/></div>
                    @endforeach
                @else
                    <img src="https://via.placeholder.com/500x730" alt="" class="border-radius-6 w-100">
                @endif
            </div> 
            <div class="col-12 col-lg-8 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s">
                <h6 class="alt-font text-extra-dark-gray">Cerita Desa</h6>
                <p class="margin-5px-top">
                    {!! $section->description !!} 
                </p>
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
            {{-- <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">Spot Wisata</span>
                </div>
                <p class="w-90 lg-w-100">
                    <ul>
                        <li>Air Terjun Kembar Gajah</li>
                        <li>Kawasan Agrowisata Colol</li>
                        <li>Bukit Ziarah Boaala</li>
                        <li>Air Terjun Cunca Panggol</li>
                        <li>Air Terjun Cunca Wek</li>
                        <li>Air Terjun Cunca Radi Ntangis</li>
                        <li>Situs Sjarah Bendera Belanda</li>
                    </ul>
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item-->
            <!-- feature box item-->
            <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">Fasilitas Desa</span>
                </div>
                <p class="w-90 lg-w-100">
                    <ul>
                        <li>Areal Parkir</li>
                        <li>Balai Pertemuan</li>
                        <li>Homestay/Rumah Tinggal/Guest House</li>
                        <li>Kamar Mandi Umum</li>
                        <li>Kios Souvenir</li>
                        <li>Kuliner, Warung, Tempat Makan</li>
                        <li>Selfie Area, Spot Foto</li>
                    </ul>
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div>
            <!-- end feature box item-->
            <!-- feature box item-->
            <div class="col-12 col-lg-4 col-md-6 col-sm-10 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeInRight">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <span class="text-large line-height-22 padding-20px-left sm-padding-15px w-100">Makanan khas, Souvenir, <br> & Hasil Bumi</span>
                </div>
                <p class="w-90 lg-w-100">
                    <ul>
                        <li>Nasi Kaget Colol</li>
                        <li>Gelang Kopi Colol</li>
                        <li>Kopi Kemasan</li>
                        <li>Kopi</li>
                        <li>Ikan Air Tawar</li>
                    </ul>
                </p>
                <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
            </div> --}}
            <!-- end feature box item-->
        </div>
    </div>
</section>
<!-- end feature box -->
    
<!-- start post content section --> 
@foreach ($sections as $section)
<?php 
    $image = json_decode($section->cover);
?>
@if($section->slug === 'event' && $section->isActive === 'true' )
<section class="wow animate__fadeIn">
    <div class="container"> 
        <div class="row justify-content-center">
            <h6 class="alt-font text-extra-dark-gray text-center">Foto {{ $section->title }}</h6>
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-1col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start event image item -->
                    <?php $images = json_decode($section->cover) ?>
                    @if($images != null)
                    @foreach($images as $image)
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <img src="{{ asset('storage/' . $image) }}" alt="">
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                    <!-- end event emage item -->
                </ul>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end event image section -->  

@endsection