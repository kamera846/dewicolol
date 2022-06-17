@extends('layouts.main')

@section('page-content')
<!-- Start end page title -->
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image: url(&quot;https://via.placeholder.com/1920x1100&quot;); visibility: visible; animation-name: fadeIn;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog grid full width</h1>
                <span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- Start page section -->
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-1col hover-option4 blog-post-style3 gutter-extra-large" style="position: relative; height: 1654.44px;">
                    <li class="grid-sizer"></li>
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog/slug">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog/slug" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;13 May 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 33.3297%; top: 0px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-02.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-02.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Graphic design will save the world right after rock and roll does.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Herman Miller</a>&nbsp;&nbsp;|&nbsp;&nbsp;29 April 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.4s" style="position: absolute; left: 66.6594%; top: 0px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-03.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-03.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Recognizing the need is the primary condition for design.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Hugh Macleod</a>&nbsp;&nbsp;|&nbsp;&nbsp;18 April 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 0%; top: 543.812px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-04.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-04.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">At a meta level, design connects the dots between mere survival and humanism.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Willie Clark</a>&nbsp;&nbsp;|&nbsp;&nbsp;31 March 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" style="position: absolute; left: 33.3297%; top: 543.812px; visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-post-layout-05.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-05.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">The only important thing about design is how it relates to people.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">John Doe</a>&nbsp;&nbsp;|&nbsp;&nbsp;09 March 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item --> 
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 66.6594%; top: 543.812px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-standard-post.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-standard-post.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Design is the conscious effort to impose a meaningful order.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Isaac Tobin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 February 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.4s" style="position: absolute; left: 33.3297%; top: 1087.62px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-gallery-post.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-gallery-post.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Design creates culture. Culture shapes values. Values determine the future.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Jason Bourne</a>&nbsp;&nbsp;|&nbsp;&nbsp;14 January 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start animate__fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 66.6594%; top: 1087.62px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="blog-html5-video-post.html">
                                    <img src="https://via.placeholder.com/1200x752" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-html5-video-post.html" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Design is the conscious effort to impose a meaningful order.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="" class="text-medium-gray">Amanda Holmes</a>&nbsp;&nbsp;|&nbsp;&nbsp;01 January 2017</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                </ul>
            </div>
        </div>
        <!-- start pagination -->
        <div class="text-center margin-100px-top md-margin-50px-top wow animate__fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
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
<!-- end page section -->


@endsection