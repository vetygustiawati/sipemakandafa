  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; SIPEMAKAN</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{url('public')}}/node_modules/bootstrap-social/bootstrap-social.css">
    <script src="https://kit.fontawesome.com/5cc76ac70c.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="{{url('public')}}/fontawesome-free/css/all.css">
    

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/components.css">
  </head>

  <body>
    <div id="app">
      <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
          <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3 text-center"><br><br><br><br><br>
              <h4 class="text-dark font-weight-normal text-center">Welcome to <br><span class="font-weight-bold">Sistem Informasi Pembayaran<br>Uang Makan Santri</span>
              </h4>
              <p class="text-muted">Before you get started, you must login</p>
              <form method="POST" action="{{url('login')}}" class="needs-validation text-left" novalidate="">
                 @include('admin.template.utils.notif')
                @csrf
                <div class="form-group ">
                  <label for="username">Username</label>
                  <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fa fa-user"></i>
                            </div>
                          </div>
                          <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus placeholder="Username">
                  <div class="invalid-feedback">
                    Maaf, anda belum memasukan Username
                  </div>
                </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                  </div>
                    <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fa fa-lock"></i>
                              </div>
                            </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required placeholder="Password">
                    <div class="invalid-feedback">
                      Maaf, anda belum memasukan Password
                    </div>
                  </div>
                </div><br>


                  <div class="form-group text-center">
                  <button onclick="login()" type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="3">
                    Login
                  </button>
                </div><br>

              </form>

              <div class="text-center mt-5 text-small">
                Copyright &copy; Vety Gustiawati
                
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{url('public')}}/assets/img/unsplash/logo1.jpg">
            <div class="absolute-bottom-left index-2">
              <div class="text-light p-5 pb-2">
                <div class="mb-5 pb-3">
                  <h3>Sistem Informasi Pembayaran</h3>
                  <h4 class="font-weight-normal text-muted-transparent">Uang Makan Santri</h4>
                  <h5 class="font-weight-normal text-muted-transparent">Pondok Pesantren Darul Fadhilah</h5>
                </div>
                <!-- Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{url('public')}}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{url('public')}}/assets/js/scripts.js"></script>
    <script src="{{url('public')}}/assets/js/custom.js"></script>
    
    <!-- Page Specific JS File -->
  </body>
  </html>

