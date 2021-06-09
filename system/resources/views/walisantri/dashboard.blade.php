@extends('walisantri.template.base')

@section('content')

  <body>
    
  <div class="main-section">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-light ftco-navbar-light pt-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{url('/profil')}}" style="color: black">Selamat Datang Wali Santri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <img src="{{url('public/web/images/logoye.png')}}"style="display: block; margin: auto;" >
        <div class="col-md-12 text-center">
          </div>
  </div>
  </body>
</html>
@endsection