@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1100');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 extra-small-screen page-title-large d-flex flex-column justify-content-center text-center">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-15px-bottom">Contact us classic</h1>
                <!-- end page title -->
                <!-- start sub title -->
                <span class="text-white-2 opacity6 alt-font">Unlimited power and customization possibilities</span>
                <!-- end sub title -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start contact info -->
<section class="wow animate__fadeIn">
    <div class="container px-0">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">We love to talk</h5>
            </div>  
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                <p class="mx-auto">401 Broadway, 24th Floor<br>New York, NY 10013.</p>
                <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">GET DIRECTION</a>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                <p class="mx-auto">Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
                <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">call us</a>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                <p class="mx-auto"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com">hr@yourdomain.com</a></p>
                <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">send e-mail</a>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                <p class="mx-auto">Lorem Ipsum is simply dummy<br>text of the printing.</p>
                <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top sm-margin-10px-top d-inline-block">open ticket</a>
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
                <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Ready to request a quote?</h5>
                <form id="project-contact-form-4" action="email-templates/contact-form.php" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-results d-none"></div>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                </div>
                <div class="col-12 col-md-6">
                    <input type="tel" name="phone" id="phone" placeholder="Phone" class="bg-transparent border-color-medium-dark-gray medium-input">
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                </div>
                <div class="col-12 col-md-6">
                    <div class="select-style medium-select border-color-medium-dark-gray">
                        <select name="budget" id="budget" class="bg-transparent mb-0">
                            <option value="">Select your budget</option>
                            <option value="$500 - $1000">$500 - $1000</option>
                            <option value="$1000 - $2000">$1000 - $2000</option>
                            <option value="$2000 - $5000">$2000 - $5000</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <textarea name="comment" id="comment" placeholder="Describe your project" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button id="project-contact-us-4-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top submit">send message</button>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact form -->
<!-- start map section -->
<section class="p-0 one-second-screen md-h-400px sm-h-300px wow animate__fadeIn">
    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
</section>
<!-- end map section -->
<!-- start social section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-1 social-icon-style-5">
                <ul class="large-icon mb-0">
                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                </ul>
            </div>                   
        </div>
    </div>
</section>
<!-- end social section -->

@endsection