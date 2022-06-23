@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
@foreach ($sections as $section)
<?php 
        $image = json_decode($section->cover);
    ?>
@if ($section->slug === 'contact' && $section->isActive === 'true')
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url(<?= asset($image != null ? 'storage/'.$image[0] : 'https://via.placeholder.com/1920x1100') ?>);">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 extra-small-screen page-title-large d-flex flex-column justify-content-center text-center">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">{{ $section->title }}</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end page title section -->
<!-- start contact info -->
@foreach ($settings as $setting)
<section class="wow animate__fadeIn">
    <div class="container px-0">
        <div class="row justify-content-center row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Kunjungi Desa</div>
                <p class="mx-auto">{{ $setting->lokasi }}<br></p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Telpon Kami</div>
                <p class="mx-auto">{{ $setting->telpon }}</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Kami</div>
                <p class="mx-auto">{{ $setting->email }}</p>
            </div>
            <!-- end contact info item -->
        </div>
    </div>
</section>
@endforeach
<!-- end contact info section -->
<!-- start contact form -->
@foreach ($sections as $section)
@if ($section->slug === 'help' && $section->isActive === 'true')
<section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <?php 
                $imageHelp = json_decode($section->cover);
            ?>
            <div class="col cover-background md-h-450px sm-h-350px wow animate__fadeIn" style="background-image:url(<?= asset($imageHelp != null ? 'storage/'. $imageHelp[0] : 'https://via.placeholder.com/1920x1100') ?>);"></div>
            <div class="col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                <h5 class=" text-white-2 alt-font font-weight-700 text-uppercase margin-5px-bottom sm-margin-three-bottom">{{ $section->title }}</h5>
                <div class="text-medium-gray alt-font text-small sm-margin-ten-bottom margin-55px-bottom">{!! $section->description !!}</div>
                {{-- Jangan ragu untuk menghubungi kami jika anda punya pertanyaan, dukungan, atau saran agaar kami lebih baik! --}}
                <form id="project-contact-form-4" method="post" target="_blank" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-results d-none"></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="nama" id="nama" placeholder="Nama lengkap *" class="bg-transparent border-color-medium-dark-gray medium-input required" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" id="email" placeholder="Alamat E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input required" required>
                        </div>

                        {{-- nomor --}}
                        @foreach ($settings as $setting)
                            <input type="hidden" name="nomor" value="{{ $setting->telpon }}" />
                        @endforeach

                        <div class="col-12">
                            <textarea name="pesan" id="pesan" placeholder="Isi pesan anda" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button id="project-contact-us-4-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<!-- end contact form -->
<!-- start social section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-1 social-icon-style-5">
                <ul class="large-icon mb-0">
                    @foreach ($socials as $social)
                        @if ($social->tipe_sosmed === 'Facebook')
                            <li><a href="{{ $social->link_sosmed }}" class="facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f  " aria-hidden="true"></i></a></li>
                        @endif
                        @if ($social->tipe_sosmed === 'Twitter')
                            <li><a href="{{ $social->link_sosmed }}" title="Twitter" class="twitter" target="_blank"><i class="fab fa-twitter "></i></a></li>
                        @endif
                        @if ($social->tipe_sosmed === 'Instagram')
                            <li><a href="https://instagram.com/" title="Instagram" class="google" target="_blank"><i class="fab fa-instagram  google"></i></a>
                        @endif
                        @if ($social->tipe_sosmed === 'Pinterest')
                            <li><a href="{{ $social->link_sosmed }}" target="_blank" class="pinterest" title="Pinterest"><i class="fab fa-pinterest-p "></i></a></li>
                        @endif
                        @if ($social->tipe_sosmed === 'Youtube')
                            <li></li><a href="{{ $social->link_sosmed }}" target="_blank" class="youtube" title="Youtube"><i class="fab fa-youtube "></i></a>
                        @endif
                    @endforeach
                    {{-- <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                    <li><a class="google" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li> --}}
                </ul>
            </div>                   
        </div>
    </div>
</section>
<!-- end social section -->

@endsection