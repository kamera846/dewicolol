@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1100');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 extra-small-screen page-title-large d-flex flex-column justify-content-center text-center">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">Kontak Kami</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start contact info -->
<section class="wow animate__fadeIn">
    <div class="container px-0">
        <div class="row justify-content-center row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Kunjungi Desa</div>
                <p class="mx-auto">Desa Colol Kecamatan Lamba Leda Timur <br> Kabupaten Manggarai Timur - NTT</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Telpon Kami</div>
                <p class="mx-auto">+62 823-3912-2463</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Kami</div>
                <p class="mx-auto">desacolol@gmail.com</p>
            </div>
            <!-- end contact info item -->
        </div>
    </div>
</section>
<!-- end contact info section -->
<!-- start contact form -->
<section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col cover-background md-h-450px sm-h-350px wow animate__fadeIn" style="background: url(https://via.placeholder.com/1200x854)"></div>
            <div class="col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                <h5 class=" text-white-2 alt-font font-weight-700 text-uppercase margin-5px-bottom sm-margin-three-bottom">Hubungi Kami</h5>
                <div class="text-medium-gray alt-font text-small sm-margin-ten-bottom margin-55px-bottom">Jangan ragu untuk menghubungi kami jika anda punya pertanyaan, dukungan, atau saran agaar kami lebih baik!</div>
                <form id="project-contact-form-4" method="post" target="_blank" autocomplete="off">
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
                        <input type="hidden" name="nomor" value="082339122463" />

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
<!-- end contact form -->
<!-- start social section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-1 social-icon-style-5">
                <ul class="large-icon mb-0">
                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                    <li><a class="google" href="http://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                </ul>
            </div>                   
        </div>
    </div>
</section>
<!-- end social section -->

@endsection