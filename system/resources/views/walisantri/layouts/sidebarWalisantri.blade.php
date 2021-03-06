 @php
    function checkRouteActive($route) {
      if(Route::current() -> uri == $route) return 'active';
    }
 @endphp
 <aside class="main-sidebar sidebar-light-primary elevation-4" style="background: white; color: white; !important">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/ponpes.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPEMAKAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
            {{request()->user()->username}}
            @else
            Silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          </li>
          <li class="nav-item">
            <a href="{{url('walisantri/dashboard')}}" class="nav-link {{checkRouteActive('walisantri/dashboard')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{url('walisantri/santri')}}" class="nav-link {{checkRouteActive('walisantri/santri')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Santri
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('walisantri/presensi')}}" class="nav-link {{checkRouteActive('walisantri/presensi')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Presensi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('walisantri/uangmakan')}}" class="nav-link {{checkRouteActive('walisantri/uangmakan')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-hand-holding-usd"></i>

              <p>
                Uang Makan
                
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('walisantri/user')}}" class="nav-link {{checkRouteActive('walisantri/user')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>
          
          
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>