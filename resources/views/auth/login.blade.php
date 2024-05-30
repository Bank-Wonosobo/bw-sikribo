<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Bank Wonosobo Apps</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('logo.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Templates Main CSS File -->
  <link href="{{ asset('templates/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Templates Name: NiceAdmin
  * Templates URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-templates/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-0">
                <a href="index.html" class="d-flex align-items-center">
                  <img src="{{ asset('bg-01.png') }}" width="300px" alt="">
                  {{-- <span class="d-none d-lg-block">NiceAdmin</span> --}}
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login Ya Gaess</h5>
                    <p class="text-center small">Masukan email & password untuk login</p>
                  </div>

                  <form class="row g-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-12">
                      <label for="youremail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" id="youremail" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div class="invalid-feedback">Please enter your email.</div> --}}
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="yourPassword" value="{{ old('password') }}" required>
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-dark w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-templates/ -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templates/') }}assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/quill/quill.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('templates/') }}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templates/') }}assets/js/main.js"></script>

</body>

</html>
