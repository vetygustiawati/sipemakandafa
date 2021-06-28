@extends('pengasuh.template.base')

@section('content')
    <!-- Main content -->
    <section class="content">
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-light ftco-navbar-light pt-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{url('/profil')}}" style="color: black">Selamat Datang Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          
        </div>
      </div>
    </nav>
    <br>

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_santri}}</h3>

                <p>TOTAL SANTRI</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user-graduate"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$kehadiran}}<sup style="font-size: 20px"></sup></h3>

                <p>KEHADIRAN</p>
              </div>
              <div class="icon">
               <i class="nav-icon fas fa-book"></i>
              </div>
          
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$jumlah_user}}</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp. {{number_format($uang_makan)}}</h3>

                <p>Total Uang Makan</p>
              </div>
              <div class="icon">
               <i class="nav-icon fas fa-hand-holding-usd"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection