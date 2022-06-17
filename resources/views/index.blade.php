@extends('layouts.main')

@section('page-content')

<!-- start slider section -->
<section class="p-0 wow animate__fadeIn">
    <div class="swiper-container full-screen black-move sm-h-500px md-landscape-h-580px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x991');">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">We combine design, thinking and technical</h1>
                            <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">Everything you could possibly want it to do and not only that, beautifully carefully designed.</p>
                            <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-top">Download now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x991');">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">We always stay on the cutting edge of digital</h1>
                            <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">Everything you could possibly want it to do and not only that, beautifully carefully designed.</p>
                            <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-tb">Download now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x991');">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="alt-font text-extra-dark-gray font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">We crafts stunning and intuitive apps</h1>
                            <p class="text-extra-dark-gray text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">Everything you could possibly want it to do and not only that, beautifully carefully designed.</p>
                            <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-dark-gray btn-rounded btn-small no-margin-lr">Purchase Pofo</a><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-transparent-dark-gray btn-rounded btn-small margin-20px-lr sm-margin-5px-tb">Download now</a></div>
                        </div>
                    </div>
                </div>
            </div>
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
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
            <!-- start feature box item -->
            <div class="col feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn last-paragraph-no-margin">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">01.</h3>
                    <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left w-100">Creativity.<br> Discover talent.</span>
                </div>
                <p class="w-90 md-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">02.</h3>
                    <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left w-100">Technology.<br> Expert analysis.</span>
                </div>
                <p class="w-90 md-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col feature-box-1 wow animate__fadeIn last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="d-flex align-items-center margin-15px-bottom alt-font">
                    <h3 class="char-value text-deep-pink letter-spacing-minus-1 text-medium-gray font-weight-600 mb-0">03.</h3>
                    <span class="text-large text-extra-dark-gray line-height-22 padding-20px-left w-100">Discover.<br> Explore work.</span>
                </div>
                <p class="w-90 md-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start feature section -->
<section class="p-0 wow animate__fadeIn bg-light-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col cover-background wow animate__fadeInLeft md-h-450px" style="background-image:url('https://via.placeholder.com/960x683');"></div>
            <div class="col padding-five-all md-padding-ten-all sm-padding-50px-tb md-padding-15px-lr wow animate__fadeInRight ">
                <div class="row m-0">
                    <div class="col-12 col-xl-11 margin-five-bottom lg-margin-six-bottom md-margin-40px-bottom sm-margin-30px-bottom sm-no-padding-lr">
                        <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-start md-w-70 mx-auto mx-lg-0 md-no-margin-bottom sm-w-75 xs-w-100">We are delivering beautiful digital products for you</h4>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-2 row-cols-lg-1 row-cols-md-2 row-cols-sm-2 m-0">
                    <!-- start features box item -->
                    <div class="col margin-six-bottom md-margin-50px-bottom sm-margin-40px-bottom last-paragraph-no-margin">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-desktop text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Elegant / Unique design</div>
                                <p class="w-95 xl-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col margin-six-bottom md-margin-50px-bottom sm-margin-40px-bottom last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-pricetags text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Different Layout Type</div>
                                <p class="w-95 xl-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col lg-margin-six-bottom md-margin-50px-bottom sm-margin-40px-bottom last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-chat text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Make it Simple</div>
                                <p class="w-95 xl-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="feature-box-5 position-relative ">
                            <i class="icon-mobile text-medium-gray icon-medium"></i>
                            <div class="feature-content">
                                <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">True Responsiveness</div>
                                <p class="w-95 xl-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- end feature section -->
<!-- start counter section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
            <!-- start counter item-->
            <div class="col text-center md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-heart icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="4650" data-speed="2000">4650</h6>
                        <span>Happy Clients</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col text-center md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-laptop icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="3790" data-speed="2000">3790</h6>
                        <span>Project Completed</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col text-center xs-margin-15px-bottom wow animate__fadeInUp" data-wow-delay="0.4s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-camera icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="5580" data-speed="2000">5580</h6>
                        <span>Photo Capture</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
            <!-- start counter item-->
            <div class="col text-center wow animate__fadeInUp" data-wow-delay="0.6s">
                <div class="counter-feature-box-1 w-100 border-all padding-5px-all">
                    <div class="counter-box bg-white d-flex justify-content-center flex-column h-100">
                        <i class="icon-chat icon-medium text-medium-gray margin-15px-bottom"></i>
                        <h6 class="d-block font-weight-600 text-extra-dark-gray alt-font mb-0 counter" data-to="8580" data-speed="2000">8580</h6>
                        <span>Telephonic Talk</span>
                    </div>
                </div>
            </div>
            <!-- end counter item-->
        </div>
    </div>            
</section>
<!-- end counter section -->
<!-- start recent work section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Our recent works</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">New stunning projects for our amazing clients</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 filter-content overflow-hidden">
                <ul class="hover-option6 lightbox-portfolio portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio-item item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-01.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-01.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Herbal Beauty Salon</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-02.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-02.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Tailoring Interior</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Branding and Brochure</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-03.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-03.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Designblast Inc</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-04.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-04.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">HardDot Stone</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-05.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-05.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Crop Identity</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Branding and Brochure</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <figure>
                            <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                <img src="https://via.placeholder.com/800x650" alt=""/>
                                <div class="portfolio-icon">
                                    <a href="single-project-page-06.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                    <a class="gallery-link" title="Lightbox gallery image title..." href="https://via.placeholder.com/800x650"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <figcaption class="bg-white">
                                <div class="portfolio-hover-main text-center">
                                    <div class="portfolio-hover-box align-middle">
                                        <div class="portfolio-hover-content position-relative">
                                            <a href="single-project-page-06.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Violator Series</span></a>
                                            <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end recent work section -->
<!-- start full width feature box -->
<section class="p-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start features box item -->
            <div class="col d-flex align-items-center text-center border-right border-bottom border-color-extra-light-gray xs-no-border-right wow animate__fadeInUp last-paragraph-no-margin">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <i class="icon-desktop icon-large text-deep-pink"></i>
                    <span class="d-block alt-font font-weight-600 text-extra-dark-gray margin-25px-top margin-10px-bottom">Elegant / Unique design</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col d-flex align-items-center text-center border-right border-bottom border-color-extra-light-gray md-no-border-right wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <i class="icon-pricetags icon-large text-deep-pink"></i>
                    <span class="d-block alt-font font-weight-600 text-extra-dark-gray margin-25px-top margin-10px-bottom">Different Layout Type</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col d-flex align-items-center text-center border-right border-bottom border-color-extra-light-gray xs-no-border-right wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <i class="icon-target icon-large text-deep-pink"></i>
                    <span class="d-block alt-font font-weight-600 text-extra-dark-gray margin-25px-top margin-10px-bottom">Testing for Perfection</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col d-flex align-items-center text-center border-bottom border-color-extra-light-gray wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <i class="icon-mobile icon-large text-deep-pink"></i>
                    <span class="d-block alt-font font-weight-600 text-extra-dark-gray margin-25px-top margin-10px-bottom">True Responsiveness</span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text.</p>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end full width feature box -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Why Choose Us?</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600">We deliver 100% and provide instant response</h5>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center"><img src="images/screen.jpg" alt=""></div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start services section -->
<section class="wow animate__fadeIn bg-extra-dark-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 position-relative text-center md-margin-50px-bottom sm-margin-30px-bottom">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                    <img src="https://via.placeholder.com/900x650" alt="" class="w-100">
                    <div class="icon-play">
                        <div class="absolute-middle-center">
                            <img src="images/icon-play.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-6 last-paragraph-no-margin">
                <div class="padding-twelve-left text-center text-lg-start md-no-padding-lr">
                    <h5 class="alt-font text-white-2">We provide high quality and cost effective services</h5>
                    <p class="text-extra-large w-90 font-weight-300 text-extra-light-gray lg-w-100">Since our foundation in 2005 our goal has been to use digital technology to create experiences.</p>
                    <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <a href="services-classic.html" class="btn btn-small btn-rounded btn-transparent-white margin-30px-top">Explore services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services section -->
<!-- start testimonial section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">What people say</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">We have received tons of awesome testimonials</h5>
            </div>
        </div>
        <div class="row position-relative justify-content-center">
            <div class="col-12 col-md-12 col-sm-9">
                <div class="swiper-container swiper-pagination-bottom black-move blog-slider" data-slider-options='{ "slidesPerView": "1", "allowTouchMove":true, "loop":false, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-1", "prevEl": ".swiper-button-prev-1" }, "breakpoints": { "992": { "slidesPerView":"3" }, "768": { "slidesPerView":"2" } }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
                    <div class="swiper-wrapper">
                        <!-- start testimonial item -->
                        <div class="swiper-slide">
                            <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all h-100 sm-padding-30px-all">
                                <img src="https://via.placeholder.com/149x149" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                <p class="md-margin-15px-bottom sm-margin-20px-bottom">I wanted to hire the best and after looking at several other companies, I knew Jacob was the perfect guy for the job. He is a true professional.</p>
                                <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Shoko Mugikura</span>
                                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Design Manager</span>
                            </div>
                        </div>
                        <!-- end testimonial item -->
                        <!-- start testimonial item -->
                        <div class="swiper-slide">
                            <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all h-100 sm-padding-30px-all">
                                <img src="https://via.placeholder.com/149x149" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                <p class="md-margin-15px-bottom sm-margin-20px-bottom">Trust us we looked for a very long time and wasted thousands of dollars testing other teams, freelancers, and outsource companies.</p>
                                <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Alexander Harvard</span>
                                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Co Founder / CEO</span>
                            </div>
                        </div>
                        <!-- end testimonial item -->
                        <!-- start testimonial item -->
                        <div class="swiper-slide">
                            <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all h-100 sm-padding-30px-all">
                                <img src="https://via.placeholder.com/149x149" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                <p class="md-margin-15px-bottom sm-margin-20px-bottom">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</p>
                                <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Lindsay Swanson</span>
                                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                            </div>
                        </div>
                        <!-- end testimonial item -->
                        <!-- start testimonial item -->
                        <div class="swiper-slide">
                            <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all h-100 sm-padding-30px-all">
                                <img src="https://via.placeholder.com/149x149" class="rounded-circle w-100px h-100px margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                <p class="md-margin-15px-bottom sm-margin-20px-bottom">Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks again guys for all your hard work.</p>
                                <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">Herman Miller</span>
                                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Creative Director</span>
                            </div>
                        </div>
                        <!-- end testimonial item -->
                    </div>                        
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonial section -->
<!-- start blog section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Latest Blogs</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Publish what you think, don't put it on social media</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-01.html">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-grid.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-01.html">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Styles come and go. Design is a language, not a style.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-grid.html" class="text-medium-gray">Herman Miller</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-01.html">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Recognizing the need is the primary condition for design.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-grid.html" class="text-medium-gray">Hugh Macleod</a>&nbsp;&nbsp;|&nbsp;&nbsp;15 March 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end blog section -->

@endsection