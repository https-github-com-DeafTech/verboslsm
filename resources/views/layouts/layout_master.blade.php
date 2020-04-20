
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start developing with a User Interface Kit with Bootstrap 4">
    <meta name="author" content="Themesberg">
    <title> @yield('title') </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <!-- Pixel CSS -->

    <link rel="stylesheet" href="{{ asset('css/pixel.css') }}">
</head>

<body>


    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark navbar-theme-dark headroom" style="background:#4e73df">
            <div class="container position-relative">
                <a class="navbar-brand mr-lg-5" href="/">
                   Alfonso Balderas
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-9 collapse-brand">
                                <a href="/">
                                    <h3>Inicio</h3>
                                </a>
                            </div>
                            <div class="col-3 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>

                            <!-- Form -->
                            <form method="GET" action="{{ route('search') }}" autocomplete="off">
                                <div class="input-group ml-lg-6">

                                        <input class="form-control"
                                        name="verbo" id="verbo"
                                        placeholder="Buscar" type="text">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-search">
                                                <input type="submit" style="display:none;"/></i></span>
                                        </div>

                                        <div id="autocomplete_VerbosLSM"></div>
                                </div>
                            </form>
                            {{ csrf_field() }}
                                <!-- End of Form -->
                </div>

                <div class="d-flex align-items-center">

                    {{-- <a href="/acceder" role="button" class="btn btn-primary ml-lg-3 animate-up-2">Acceder</a>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                </div>
            </div>
        </nav>
    </header>


    <main>
    @yield('content')

    </main>


    <footer class="footer bg-dark text-white py-4 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <h5>Santiago de Querétaro, México</h5>

                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <h5>contacto@deaftech.com.mx</h5>

                </div>

            </div>
            <div class="copyright mt-0 text-center">
                &#xA9;
                Deaf Tech
                <script>
                    document.write(new Date().getFullYear())
                </script></a>.
            </div>
        </div>
    </footer>



    <!-- Core -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <!-- <script src="/vendor/bootstrap/bootstrap.min.js"></script> -->
    <script src="vendor/headroom/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- pixel JS -->
    <script src="js/pixel.js"></script>

    <!-- pixel JS -->
    <script src="{{ asset('js/jsAutocomplete.js') }}"></script>

</body>

</html>
