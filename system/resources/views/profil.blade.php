@extends('admin.template.base')

@section('content')
<!DOCTYPE html>
<html lang="en">
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
        <a class="navbar-brand" href="{{url('/profil')}}">PONPES DAFA KETAPANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="https://www.facebook.com/smansa.ketapang" class="nav-link icon d-flex align-items-center"><i class="ion-logo-facebook"></i></a></li>
            <li class="nav-item"><a href="https://twitter.com/Smansaketapang" class="nav-link icon d-flex align-items-center"><i class="ion-logo-twitter"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/smansa.ketapang" class="nav-link icon d-flex align-items-center"><i class="ion-logo-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight img" style="background-image: url(public/web/images/sma1-2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row description js-fullheight align-items-center justify-content-center">
          <div class="col-md-8 text-center">
            <div class="text">
              <h1>SELAMAT DATANG</h1>
              <h4 class="mb-5">di Sistem Informasi Pembayaran Uang Makan Santri</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mr-5 ml-5">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30 res-mg-t-30">
                       
                    </div> <br><br>
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30 res-mg-t-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2 >Visi Pondok Pesantren Darul Fadhilah Ketapang</h2>
                                <div class="main-income-phara">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <p style="text-align: justify;">Memasyarakatkan Al-Qur’an dan Meng Al-Qur’ankan Masyarakat</p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30 res-mg-t-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Misi Pondok Pesantren Darul Fadhilah Ketapang</h2>
                                <div class="main-income-phara">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate" style="text-align: justify;">
                                    <p>Adapun misi dari Pondok Pesantren Darul Fadhilah Ketapang sebagai berikut:
                                      <ol>
                                        <li>Mencetak penghafal-penghafal Al-Qur’an yang berkeyakinan dan beramal Ahlussunah waljamaah.</li>
                                        <li>Ikut serta dalam usaha mencerdaskan kehidupan bangsa sebagaimana tertuang dalam UUD 1945.</li>
                                        <li>Mencetak generasi yang balance, yang mampu menggabungkan cita-cita akhirat dan cita-cita dunia.</li>
                                        <li>Mencetak Dai-Dai Mukhlis, Amil, Tawadu’ yang didukung dengan skill-skill usaha.</li>
                                      </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pt-5 ml-5 mr-5">
                    <div class="about-sparkline shadow-reset desplay-n-tablet-pro">
                        <div class="sparkline-hd">
                            <div class="main-spark-hd">
                                <h2>Sejarah Pondok Pesantren Darul Fadhilah Ketapang</h2>
                                <div class="outline-icon">
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                  <p style="text-align: justify;">Pondok Pesantren Darul Fadhilah 
                                Ketapang mulai terbentuk pada tahun 2015 yang terletak di Jl. Pendidikan, Kauman, Benua Kayong, Kabupaten Ketapang, Kalimantan Barat. Sistem pendidikan yang diterapkan adalah sistem pendidikan yang fokus, berjenjang, terpadu, yaitu perpaduan antara pendidikan Diniyyah Pondok Pesantren (PONPES) dan pendidikan formal. 
								Pondok Pesantren Darul Fadhilah sebagai salah satu tempat pendidikan islam, yang memiliki orientasi mencetak generasi muslim untuk menjadi insan yang paripurna dalam tindak, sikap, serta ucapan, dengan tetap mengutamakan penguasaan Al-Qur’an baik hafalan, pemahaman, serta pengamalan, yang merupakan literatur pokok bagi umat islam/muslim dengan tidak melupakan hadist-hadist dan cabang-cabang ilmu islam yang lain. 
								Pada tahun 2015 Pondok Pesantren Darul Fadhilah memulai perjalanannya, saat itu jumlah santri putra hanya 28 orang dan santri putri hanya 11 orang dengan total keseluruhan 39 orang santri. Dari tahun pertama ini perjalanan Pondok Pesantren Darul Fadhilah hanyalah dibimbing oleh beberapa asatid dan asatidzah. Hingga pada tahun 2020 ini total santri putra ada 253 orang dan santri putri 203 orang, dan juga memiliki sekolah formal mulai dari PAUD, SD, SMP, SMA dan SMK. Kemudian dari pondoknya sendiri terdapat pilihan Hifdzhul Qur’an dan Taklim Kutub. Selain itu, terdapat 104 majelis yang tersebar dimana-mana dibawah naungan Darul Fadhilah yang terdiri dari majelis bapak-bapak, ibu-ibu, remaja hingga anak-anak.</p>
                                </div>
                            </div>
                        </div><br>
                        
                    </div>
                    <div class="about-sparkline shadow-reset desplay-n-tablet-pro">
                        <div class="sparkline-hd">
                            <div class="main-spark-hd">
                                <h2>Prestasi Pondok Pesantren Darul Fadhilah baik dalam bidang agama maupun formal</h2>
                                <div class="outline-icon">
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                  <p style="text-align: justify;">Pondok Pesantren Darul Fadhilah Ketapang mempunyai prestasi baik dalam bidang agama maupun formal, yaitu sebagai berikut:
                                    <ol>
                                      <li>Telah mencetak 8 santri penghafal Al-Qur’an</li>
                                      <li>Telah memberikan beasiswa kepada 5 santri putra dan 1 santri putri di Universitas Al Azhar Cairo Mesir</li>
                                      <li>Telah memberikan beasiswa kerja kepada 3 santri putra dan 1 santri putri ke negara Malaysia</li>
                                      <li>Telah memberikan beasiswa magang kepada 14 santri putra di The Learning Farm, Cianjur</li>
                                    </ol>
                                  </p>
                                </div>
                            </div>
                        </div><br><br><br><br>
                        
                    </div>
                </div>
            
            </div>
        </div>



    <footer class="ftco-section ftco-section-2 bg-dark">
        <div class="col-md-12 text-center">
           
          </div>
      </footer>

  </div>

  


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
@endsection