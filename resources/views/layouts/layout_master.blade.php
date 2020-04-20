<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Verbos - Deaf Tech</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
 <!-- Page Wrapper -->
 <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <h4>VerbosLSM - Deaf Tech</h4>
                    <ul class="navbar-nav ml-auto">
                            <!-- Form -->
                            <form method="GET" action="{{ route('search') }}" autocomplete="off" 
                            class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                            <div class="input-group">
                                        <input class="form-control bg-light border-0 small"
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


        </nav>
        <!-- End of Topbar -->


    <main>
    @yield('content')

    </main>


    <footer class="footer bg-dark text-white py-4 overflow-hidden">
        <div class="container">
            <div class="copyright mt-0 text-center">
                &#xA9;
                Deaf Tech
                <script>
                    document.write(new Date().getFullYear())
                </script></a>.
            </div>
        </div>
    </footer>


</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script language="Javascript" src="js/jsAutocomplete.js"></script>

</body>

</html>
