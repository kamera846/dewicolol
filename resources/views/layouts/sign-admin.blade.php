 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4." />
        <meta name="author" content="Creative Tim" />
        <title>{{ $judul_halaman }}</title>
        <!-- Favicon -->
        @foreach ($settings as $setting)
        @if ($setting->favicon)
        <img src="{{ asset('storage' . $setting->favicon) }}" alt="">
        @else
        <link rel="icon" href="{{ asset('admin/assets/img/brand/blue.png') }}" type="image/png" />
        @endif
        @endforeach
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
        <!-- Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css" />
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.1.0') }}" type="text/css" />
    </head>

    <body class="bg-default">
        
        <!-- Main content -->
        @yield('main-content')

        {{-- Footer --}}
        <footer class="py-5" id="footer-main">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="copyright text-center text-muted">&copy; 2022 <a href="/" class="font-weight-bold ml-1">COLOL</a> - Powered by <a href="https://jongkreatif.id/" target="_blank" class="font-weight-bold ml-1">Jongkreatif</a>.</div>
                </div>
            </div>
        </footer>
        
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('admin/assets/js/argon.js?v=1.1.0') }}"></script>

        {{-- SweetAlert2 --}}
        <script src="{{ asset('admin/assets/js/sweetalert.js') }}"></script>

        {{-- Custom JS --}}
        <script>
            // login alert
            const flashData = document.querySelector(".flash-data").dataset["flashdata"];

            if (flashData === "gagal") {
                Swal.fire("Gagal", "Email / kata sandi salah!", "error");
            }

        </script>

        

    </body>
</html>
