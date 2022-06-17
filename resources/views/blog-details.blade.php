@extends('layouts.main')

@section('page-content')
<!-- Start end page title -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space" style="margin-top: 72px; visibility: visible; animation-name: fadeIn;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-xl-8 col-md-6 d-flex flex-column justify-content-center text-center text-md-start">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">This is a standard post with a preview image</h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                <!-- breadcrumb -->
                <ul class="text-center text-md-start text-uppercase">
                    <li><a href="#" class="text-dark-gray">25 April 2017</a></li>
                    <li><span class="text-dark-gray">by <a href="blog-masonry.html">Jay Benjamin</a></span></li>
                    <li class="text-dark-gray"><a href="blog-masonry.html">Design</a></li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- Start page section -->
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container position-relative"> 
        <div class="row">
            <div class="col-12 blog-content">
                <div class="row justify-content-center">
                    <main class="col-12 col-xl-9 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="col-12 blog-details-text last-paragraph-no-margin">
                            <img src="https://via.placeholder.com/900x631" alt="" class="w-100 margin-45px-bottom" data-no-retina="">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong class="text-extra-dark-gray">Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more <u>recently with desktop publishing</u> software like aldus pagemaker including versions.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the <strong class="text-extra-dark-gray">first true generator on the internet.</strong> It uses a dictionary of over 200 Latin words, combined with a <u>handful of model sentence structures,</u> to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                            <blockquote class="border-color-deep-pink">
                                <p>Reading is not only informed by what’s going on with us at that moment, but also governed by how our eyes and brains work to process information. What you see and what you’re experiencing as you read these words is quite different.</p>
                                <footer>Jason Maria</footer>
                            </blockquote>
                            <img src="https://via.placeholder.com/900x600" alt="" class="w-100 margin-45px-bottom" data-no-retina="">
                            <!-- dropcaps -->
                            <p><span class="first-letter first-letter-block bg-extra-dark-gray text-white-2">M</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Simply dummy text of the printing and typesetting industry. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <!-- end dropcaps -->
                            <figure class="wp-caption alignleft"><img alt="" src="https://via.placeholder.com/350x255" data-no-retina=""><figcaption class="wp-caption-text">There is no sincerer love than the love of food.</figcaption></figure>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                            <span class="text-extra-dark-gray font-weight-500 margin-15px-bottom d-block text-medium">You can never quit. Winners never quit, and quitters never win</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                        </div>
                    </main>
                    <aside class="col-12 col-xl-3 col-lg-4 col-md-7">
                        <div class="d-inline-block w-100 margin-45px-bottom sm-margin-25px-bottom">
                            <form action="search-result.html" method="post" class="position-relative">
                                <div class="position-relative">
                                    <input name="text" id="text" data-email="required" type="text" placeholder="Enter your keywords..." class="bg-transparent padding-40px-right text-small mb-0 border-color-extra-light-gray medium-input float-start">
                                    <button type="submit" class="bg-transparent btn position-absolute right-0 top-1 search-button"><i class="fas fa-search ms-0"></i></button>
                                </div>   
                            </form>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                            <a href="about-me.html"><img src="https://via.placeholder.com/800x533" alt="" class="margin-25px-bottom" data-no-retina=""></a>
                            <p class="margin-20px-bottom text-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="about-me.html">About Author</a>
                        </div>
                        <div class="margin-50px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
                            <ul class="latest-post position-relative">
                                <li class="media d-flex">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-masonry.html"><img src="https://via.placeholder.com/480x358" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
                                </li>
                                <li class="media d-flex">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-masonry.html"><img src="https://via.placeholder.com/480x358" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
                                </li>
                                <li class="media d-flex">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-masonry.html"><img src="https://via.placeholder.com/480x358" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
                                </li>
                                <li class="media d-flex">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-masonry.html"><img src="https://via.placeholder.com/480x358" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <a href="#"><img src="{{ asset('images/menu-banner-01.png') }}" alt="" class="w-100" data-no-retina=""></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page section -->

@endsection