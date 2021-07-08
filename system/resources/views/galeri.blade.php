<!DOCTYPE html>
<html lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <head>
    <title>SIPEMAKAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5cc76ac70c.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/animate.css">
    
    <link rel="stylesheet" href="{{'public'}}/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/magnific-popup.css">

    <link rel="stylesheet" href="{{'public'}}/web/css/aos.css">

    <link rel="stylesheet" href="{{'public'}}/web/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{'public'}}/web/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/nouislider.css">

    
    <link rel="stylesheet" href="{{'public'}}/web/css/flaticon.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/icomoon.css">
    <link rel="stylesheet" href="{{'public'}}/web/css/style.css">
  </head>
  <body>
    
  <div class="main-section">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{url('/home')}}">PONDOK PESANTREN DARUL FADHILAH KETAPANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="{{url('/home')}}" class="nav-link icon d-flex align-items-center"><i class="fa fa-home mr-2"></i> Home</a></li>
            <li class="nav-item"><a href="{{url('/visimisi')}}" class="nav-link icon d-flex align-items-center"><i class="fa fa-tasks mr-2"></i> Visi Misi</a></li>
            <li class="nav-item"><a href="{{url('/prestasi')}}" class="nav-link icon d-flex align-items-center"><i class="fa fa-tasks mr-2"></i> Prestasi</a></li>
            <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#myModal"><i class="fas fa-bell"></i>Info Pendaftaran</button>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi Pondok <i class="icofont-thin-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown05">
            <li><a class="dropdown-item" href="{{url('/sejarah')}}">Sejarah</a></li>
            <li><a class="dropdown-item" href="{{url('/kegponpes')}}">Majelis DAFA</a></li>
            <li><a class="dropdown-item" href="{{url('/foto')}}">Foto Pembangunan</a></li>
            <li><a class="dropdown-item" href="{{url('/galeri')}}">Galeri Pondok</a></li>
          </ul>
          </li>
        
          </ul>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="https://www.instagram.com/ponpesdarulfadhilah" class="nav-link icon d-flex align-items-center"><i class="ion-logo-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Informasi Pendaftaran</h4>
      </div>
      <div class="modal-body">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="{{url('public')}}/dist/img/gambar1.jpeg" class="d-block w-100" height="450" />
            </div>
            <div class="carousel-item" data-bs-interval="6000">
              <img src="{{url('public')}}/dist/img/gambar2.jpeg" class="d-block w-100" height="450" />
            </div>
          </div>
          <a class="carousel-control-prev" href="{{url('public')}}/dist/img/gambar2.jpeg" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="{{url('public')}}/dist/img/gambar2.jpeg" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- END nav -->

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<section class="" style="background: black;" >
 
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <br> <br> <br>
        <div class="col-lg-12">
          
          <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f1.jpeg" class="img-responsive">
  
              </div>
              <h2>Kegiatan Tadarus</h2>
              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f12.jpeg" class="img-responsive">
                
              </div>
             
              <h2>Kegiatan Tadarus</h2>
             
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f11.jpeg" class="img-responsive">
                
              </div>
  
              <h2>Kegiatan Musyawarah Wali Santri</h2>
              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f10.jpeg" class="img-responsive">
                
              </div>
             
              <h2>Kegiatan Musyawarah Wali Santri</h2>
             
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f4.jpeg" class="img-responsive">
                
              </div>
              
              <h2>Kegiatan Musyawarah Wali Santri</h2>
             
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f6.jpeg" class="img-responsive">
                
              </div>
              
              <h2>Kegiatan Ziaroh Kubur</h2>
              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f9.jpeg" class="img-responsive">

              </div>
              
              <h2>Kegiatan Ziaroh Kubur</h2>
              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f3.jpeg" class="img-responsive">
                
              </div>
              
              <h2>Kegiatan Ziaroh Kubur</h2>
              
            </div>
            <br>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f7.jpeg" class="img-responsive">
               
              </div>
             
              <h2>Upacara Memperingati Hari Kemerdekaan</h2>
             
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f8.jpeg" class="img-responsive">
                
              </div>
             
              <h2>Kegiatan Memperingati Hari Kemerdekaan</h2>
             </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f2.jpeg" class="img-responsive">
               
              </div>
              
              <h2>Kegiatan Perkenalan Santri Baru</h2>
             
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{url('public')}}/dist/img/f5.jpeg" class="img-responsive">
               
              </div>
              
              <h2>Kegiatan Perkenalan Santri Baru</h2>
          
            </div>
          </div>
        </div>
      </div>
    </div>
 
</div>

</section>

    <footer class="ftco-section ftco-section-2 bg-dark">
        <div class="col-md-12 text-center">
            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

               </script> All rights reserved |  <i class="icon-heart" ara-hidden="true"></i> by <a href="#" target="_blank">Vety Gustiawati</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
      </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{'public'}}/web/js/jquery.min.js"></script>
  <script src="{{'public'}}/web/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{'public'}}/web/js/popper.min.js"></script>
  <script src="{{'public'}}/web/js/bootstrap.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.easing.1.3.js"></script>
  <script src="{{'public'}}/web/js/jquery.waypoints.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.stellar.min.js"></script>
  <script src="{{'public'}}/web/js/owl.carousel.min.js"></script>
  <script src="{{'public'}}/web/js/jquery.magnific-popup.min.js"></script>
  <script src="{{'public'}}/web/js/aos.js"></script>

  <script src="{{'public'}}/web/js/nouislider.min.js"></script>
  <script src="{{'public'}}/web/js/moment-with-locales.min.js"></script>
  <script src="{{'public'}}/web/js/bootstrap-datetimepicker.min.js"></script>
  <script src="{{'public'}}/web/js/main.js"></script>
    
  </body>
</html>
