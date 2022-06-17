<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>{{ $judul_halaman }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootsnav.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme-vendors.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    </head>
    <body> 
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav background-white header-light navbar-top navbar-expand-lg">
                <div class="container-lg nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto ps-0">
                        <a href="/" title="Pofo" class="logo"><img src="{{ asset('images/logo.png') }}" data-at2x="{{ asset('images/logo@2x.png') }}" class="logo-dark default" alt="Pofo"><img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pe-0 pe-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav navbar-left no-margin alt-font text-normal"">
                                <!-- start menu item -->
                                <li class="">
                                    <a href="/" class="nav-link">Beranda</a>
                                </li>
                                <li class="">
                                    <a href="/about" class="nav-link">Tentang</a>
                                </li>
                                <li class="">
                                    <a href="/blog" class="nav-link">Artikel</a>
                                </li>
                                <li class="">
                                    <a href="/gallery" class="nav-link">Galeri</a>
                                </li>
                                <li class="">
                                    <a href="/contact" class="nav-link">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto pe-0">
                        <div class="header-social-icon d-none d-md-inline-block">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>                          
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->

        {{-- page content --}}
        @yield('page-content')

        <!-- start footer --> 
        <footer class="footer-standard-dark bg-extra-dark-gray"> 
            <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-sm-6 widget md-margin-30px-bottom text-center text-sm-start">
                            <!-- start logo -->
                            <a href="/" class="margin-20px-bottom d-inline-block"><img class="footer-logo" src="{{ asset('images/logo-white.png') }}" data-at2x="images/logo-white@2x.png" alt=""></a>
                            <!-- end logo -->
                            <p class=" d-inline-block w-95 lg-w-100 xs-w-95">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <!-- start social media -->
                            <div class="social-icon-style-8 d-inline-block align-middle">
                                <ul class="small-icon no-margin-bottom">
                                    <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!-- end social media -->
                        </div>
                        <!-- start additional links -->
                        <div class="col-lg-3 col-sm-6 widget padding-45px-left md-padding-15px-left md-margin-30px-bottom text-center text-sm-start">
                            <div class="widget-title alt-font  text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Halaman</div>
                            <ul class="list-unstyled">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/about">Tentang</a></li>
                                <li><a href="/blog">Artikel</a></li>
                                <li><a href="/gallery">Galeri</a></li>
                                <li><a href="/contact">Kontak</a></li>
                            </ul>
                        </div>
                        <!-- end additional links -->
                        <!-- start latest blog post -->
                        {{-- <div class="col-lg-3 col-sm-6 border-right border-color-medium-dark-gray">
                            <div class="widget-title alt-font  text-medium-gray text-uppercase margin-15px-bottom font-weight-600 text-center text-sm-start">Latest Blog Post</div>
                            <ul class="latest-post position-relative">
                                <li class="media d-flex border-bottom border-color-medium-dark-gray">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-01.html"><img src="https://via.placeholder.com/700x403" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 "><a href="blog-post-layout-01.html" class="d-block mb-1">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li class="media d-flex border-bottom border-color-medium-dark-gray">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-02.html"><img src="https://via.placeholder.com/700x403" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 "><a href="blog-post-layout-02.html" class="d-block mb-1">A lot of care, effort &amp; passion...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li class="media d-flex">
                                    <figure class="flex-shrink-0">
                                        <a href="blog-post-layout-03.html"><img src="https://via.placeholder.com/700x403" alt="" data-no-retina=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1 "><a href="blog-post-layout-03.html" class="d-block mb-1">I love making the stuff, that's...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                            </ul>
                        </div> --}}
                        <!-- end latest blog post -->
                        <!-- start contact information -->
                        <div class="col-lg-3 col-sm-6 widget widget md-margin-30px-bottom padding-45px-left md-padding-15px-left xs-margin-30px-bottom text-center text-sm-start">
                            <div class="widget-title alt-font  text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Info Kontak</div>
                            <p class=" d-block margin-15px-bottom w-80 sm-w-100">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                            <div class="">Email: <a href="mailto:sales@domain.com">sales@domain.com</a></div>
                            <div class="">Phone: +44 (0) 123 456 7890</div>
                            <a href="contact-us-modern.html" class=" text-uppercase text-decoration-underline">Tampilkan arah</a>
                        </div>
                        <!-- end contact information -->
                    </div>
                </div>
            </div>
            <div class="bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-md-6 text-md-start  text-center">© 2021 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" class="text-dark-gray">ThemeZaa</a></div>
                        <div class="col-md-6 text-md-end  text-center">
                            <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootsnav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/theme-vendors.min.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
