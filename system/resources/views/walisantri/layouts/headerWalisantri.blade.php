<nav class="main-header navbar navbar-expand navbar-dark navbar-light" style="background: #AC3B61; color: white; !important">
   <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">WALI SANTRI</a>
      </li>
      
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         @if(Auth::check())
            {{request()->user()->username}}
            @else
            Silahkan Login
            @endif
         <img src="{{url('public')}}/dist/img/user.jpg" alt="User Avatar" style="height: 100%;"class=" img-circle">
        </a> 
        <!-- <div class="dropdown-menu dropdown-menu-right">
          <a href="profile" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a> -->
           <div class="dropdown-menu dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <a href="{{url('logout')}}" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')"  class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
          
        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{url('logout')}}" class="dropdown-item">
            
          <i class="fas fa-sign-out-alt"></i>Logout
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            
          </a>
          <div class="dropdown-divider"></div>
        </div> -->
      </li> 
    </ul>
  </nav>
