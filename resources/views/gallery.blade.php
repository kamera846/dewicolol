@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1100');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Galeri Kami</h1>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
<!-- end page title section --> 

<!-- start gallry content section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeInUp">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Momen yang berhasil kami abadikan</span>
                </div>
            </div>
        </div>
        <div class="row wow animate__fadeInUp">
            <div class="col-12 filter-content overflow-hidden">
                <ul class="hover-option2 portfolio-gallery portfolio-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium" style="position: relative; height: 227.75px;">
                    <li class="grid-sizer"></li>
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <a href="https://via.placeholder.com/900x650" title="Isi deskrisi gallery..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">Judul Galeri Lorem Ipsum</h6>
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
                        <a href="https://via.placeholder.com/900x650" title="Isi deskrisi gallery..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">Judul Galeri Lorem Ipsum</h6>
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
                        <a href="https://via.placeholder.com/900x650" title="Isi deskrisi gallery..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">Judul Galeri Lorem Ipsum</h6>
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
                        <a href="https://via.placeholder.com/900x650" title="Isi deskrisi gallery..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray">
                                    <img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery" data-no-retina="">
                                </div>
                                <h6 class="text-small font-weight-500 text-extra-dark-gray mt-3 text-center">Judul Galeri Lorem Ipsum</h6>
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
                </ul>
            </div>
        </div>
        
        <!-- start pagination -->
        <div class=" text-center margin-100px-top md-margin-50px-top wow animate__fadeInUp">
            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                <ul class="mx-auto">
                    <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end pagination -->
    </div>
</section>
<!-- end galleery content section -->

@endsection
