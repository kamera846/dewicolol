<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php 
        $keywords = "desa, wisata, colol, desa wisata, desa colol, wisata colol, desa wisata colol, ntt, nusa tenggara timur, manggarai barat";
        $description = "Sejarah peradaban masyarakat penghuni kampung sowang yang berlokasi Didesa Loha, Kecamatan Pacar, Kabupaten Manggarai Barat. kampung sowang diberi nama oleh leluhur “empo” yang datang dari suku nawangkarena sebelum dijadikan sebuah tempat pemukiman."; 
        $setting = $settings[0];
        $web_url = sprintf("%s://%s%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI'])
        ?>
        <!-- title -->
        <title>{{ $judul_halaman }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="{{ $description }}">
        <!-- keywords -->
        <meta name="keywords" content="{{ $keywords }}}">
        <meta itemprop="name" content="{{$judul_halaman}}">
        <meta itemprop="description" content="{{$description}}">
        <meta itemprop="image" content="{{ asset('storage/' . $setting->logo) }}">
        
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{$web_url}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$judul_halaman}}">
        <meta property="og:description" content="{{$description}}">
        <meta property="og:image" content="{{ asset('storage/' . $setting->logo) }}">
        
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$judul_halaman}}">
        <meta name="twitter:description" content="{{$description}}">
        <meta name="twitter:image" content="{{ asset('storage/' . $setting->logo) }}">
        <!-- favicon -->
        @foreach ($settings as $setting)
        @if ($setting->favicon)
        <link rel="icon" href="{{ asset('storage/' . $setting->favicon) }}" type="image/png" />
        @else
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
        @endif
        @endforeach
        {{-- <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}"> --}}
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
            <nav class="navbar navbar-default bootsnav background-black header-dark white-link navbar-top navbar-expand-lg on no-full">
                <div class="container-lg nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto ps-0">
                        <a href="/" title="Desa Wisata Colol" class="logo">
                            {{-- <img src="{{ asset('images/logo-white.png') }}" data-at2x="{{ asset('images/logo@2x.png') }}" class="logo-dark default" alt="Pofo"><img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a> --}}
                            @foreach ($settings as $setting)
                                        <a href="./"><img src="{{ asset('storage/' . $setting->logo) }}" alt="" style="max-height: 60px;" /></a>
                                    {{-- <a href="/"><h1 class="text-white">Loha</h1><p class="text-white">Desa Wisata</p></a> --}}
                                    @endforeach
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
                            <ul class="nav navbar-nav navbar-left no-margin alt-font text-normal">
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
                            @foreach ($socials as $social)
                            @if ($social->tipe_sosmed === 'Facebook')
                                <a href="{{ $social->link_sosmed }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            @endif
                            @if ($social->tipe_sosmed === 'Twitter')
                                <a href="{{ $social->link_sosmed }}" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if ($social->tipe_sosmed === 'Instagram')
                                <a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if ($social->tipe_sosmed === 'Pinterest')
                                <a href="{{ $social->link_sosmed }}" target="_blank" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                            @endif
                            @if ($social->tipe_sosmed === 'Youtube')
                                    <a href="{{ $social->link_sosmed }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                            @endif
                            @endforeach                          
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
        @foreach ($sections as $section)
        @if($section->slug === 'footer') 
        <footer class="footer-standard-dark bg-extra-dark-gray"> 
            <div class="footer-widget-area padding-three-tb sm-padding-40px-tb">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-sm-start">
                            <!-- start logo -->
                            <a href="/" class="margin-20px-bottom d-inline-block">
                                @foreach ($settings as $setting)
                                <a href="./"><img src="{{ asset('storage/' . $setting->logo) }}" class="footer-logo" alt="" style="max-height: 60px;" /></a>
                                @endforeach
                            <!-- end logo -->
                            @foreach ($sections as $section)
                                @if ($section->slug === 'footer')
                                    <p class=" d-inline-block w-95 lg-w-100 xs-w-95">{!! $section->description !!}</p>
                                @endif
                            @endforeach
                            <!-- start social media -->
                            <div class="social-icon-style-8 d-inline-block align-middle">
                                <ul class="small-icon no-margin-bottom">
                                    @foreach ($socials as $social)
                                        @if ($social->tipe_sosmed === 'Facebook')
                                            <li><a href="{{ $social->link_sosmed }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f text-white-2" aria-hidden="true"></i></a></li>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Twitter')
                                            <li><a href="{{ $social->link_sosmed }}" title="Twitter" target="_blank"><i class="fab fa-twitter text-white-2"></i></a></li>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Instagram')
                                            <li><a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram text-white-2"></i></a>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Pinterest')
                                            <li><a href="{{ $social->link_sosmed }}" target="_blank" title="Pinterest"><i class="fab fa-pinterest-p text-white-2"></i></a></li>
                                        @endif
                                        @if ($social->tipe_sosmed === 'Youtube')
                                                <li></li><a href="{{ $social->link_sosmed }}" target="_blank" title="Youtube"><i class="fab fa-youtube text-white-2"></i></a>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <!-- end social media -->
                        </div>
                        <div class="col-lg-2"></div>
                        <!-- start additional links -->
                        <div class="col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left md-margin-30px-bottom text-center text-sm-start">
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
                        <!-- start contact information -->
                        <div class="col-lg-4 col-md-6 widget widget md-margin-30px-bottom padding-45px-left md-padding-15px-left xs-margin-30px-bottom text-center text-sm-start">
                            <div class="widget-title alt-font  text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Info Kontak</div>
                            @foreach ($settings as $setting)
                                <div class="">Email: <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
                                <div class="margin-15px-bottom">Telepon: {{ $setting->telpon }}</div>
                                <p class="d-block w-80 sm-w-100 margin-0px-bottom">{{ $setting->lokasi }}</b></p>    
                            @endforeach
                        <!-- end contact information -->
                    </div>
                </div>
            </div>
            <div class="container margin-20px-top">
                <div class="border-color-medium-dark-gray border-top padding-40px-top">
                    <div class="row"> 
                        <!-- start copyright -->
                        <div class="text-center">© {{ date('Y') }} Colol - Powered by <a href="https://jongkreatif.id" target="_blank" class="text-dark-gray">JongKreatif</a>.</div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        @endif
        @endforeach
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
