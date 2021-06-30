@extends('walisantri.template.base')

@section('content')

  <body>
    
  <div class="main-section">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-light ftco-navbar-light pt-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" style="color: black">Selamat Datang Wali Santri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <br>
    <div class="row">
      <!-- pengumuman -->
      <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-info elevation-1"><i class="fa fa-clock"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">PENGUMUMAN MUSYAWARAH WALI SANTRI (<b>MWS</b>)</span>
            <span class="info-box-number">
              {{ date('l, d F Y', strtotime($mws[0]->hari)) }}
              <br>
              <p>{{$mws[0]->ket}}</p>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- akhir pengumuman -->

      <!-- tunggakan -->
      <div class="col-12 col-sm-6 col-md-6">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fa fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TUNGGAKAN (<b>SPP</b>)</span>
            <span class="info-box-number">
              {{$tunggakan}} Bulan - Rp.{{number_format($tunggakan*300000)}}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- akhir tunggakan -->
    </div>



    <img src="{{url('public/web/images/logoye.png')}}"style="display: block; margin: auto;" >
        <div class="col-md-12 text-center">
          </div>
  </div>
  </body>
</html>
@endsection