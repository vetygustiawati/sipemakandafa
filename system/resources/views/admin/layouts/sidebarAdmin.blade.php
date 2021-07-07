 @php
    function checkRouteActive($route) {
      if(Route::current() -> uri == $route) return 'active';
    }
 @endphp
 <aside class="main-sidebar sidebar-light-primary elevation-4" style="background: white; color: white; !important">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" >
      <img src="{{url('public')}}/dist/img/ponpes.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPEMAKAN</span>
    </a>

    <!-- Sidebar -->
    <div class  ="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/aku.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('admin/profile')}}" class="d-block">
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
            <a href="{{url('admin/dashboard')}}" class="nav-link {{checkRouteActive('admin/dashboard')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
  
          <li class="nav-item">
            <a href="#" class="nav-link {{checkRouteActive('admin/santri/putra')}}{{checkRouteActive('admin/santri/putra')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-user-graduate"></i>
              <i class="right fas fa-angle-left"></i>
              <p>
                Santri
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/santri/putra')}}" class="nav-link {{checkrouteactive('admin/santri/putra')}}"style="background: #EDC7B7; color: black; !important">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Putra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/santri/putri')}}" class="nav-link {{checkrouteactive('admin/santri/putri')}}"style="background: #EDC7B7; color: black; !important">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Putri</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="{{url('admin/presensi')}}" class="nav-link {{checkRouteActive('admin/presensi')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Presensi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/uangmakan')}}" class="nav-link {{checkRouteActive('admin/uangmakan')}}" style="background: #EDC7B7; color: black; !important">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Uang Makan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}" style="background: #EDC7B7; color: black; !important">
            <i class="nav-icon fas fa-user"></i>
              <p>
                User
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/laporan')}}" class="nav-link {{checkRouteActive('admin/laporan')}}" style="background: #EDC7B7; color: black; !important">
            <i class="nav-icon fas fa-layer-group"></i>
              <p>
              Laporan Presensi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/mws')}}" class="nav-link {{checkRouteActive('admin/mws')}}" style="background: #EDC7B7; color: black; !important">
            <i class="nav-icon fas fa-clock"></i>
              <p>
              MWS
              </p>
            </a>
          </li>
          
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>