<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title','GESTION ECOLE')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
    @yield('css','')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:admin/partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/admin/dashbord')}}">{{trans('commun.titleproject')}}</a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/admin/dashbord')}}">GU</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block" style="visibility: hidden">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">{{auth()->user()->name}}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              {{--<a class="dropdown-item" href="{{asset('/admin/profil')}}">
                <i class="mdi mdi-account-outline  mr-2 text-success"></i>
                Profil
              </a>--}}
              <div class="dropdown-divider"></div>
              {{--<a class="dropdown-item" href="{{asset('/admin/setting')}}">
                <i class="mdi mdi-settings mr-2 text-success"></i>
                Paramettre
              </a>--}}
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{asset('/logout')}}">
                <i class="mdi mdi-logout mr-2 text-success"></i>
                {{trans('commun.logout')}}
              </a>

            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-"></i>

                    @php
                        $icono_idioma = [
                       'en'       => 'us'
                       ,'fr'       => 'fr'
                           ];
                           $img =[

                           'fr'=>"<img style='width:20px;height:20px' src='".url('admin/images/fr.jpg')."'>" ,
                           'en'=>"<img style='width:16px;height:16px' src='".url('admin/images/en.jpg')."'>"

                           ];
                           $lang = session('locale') ? session('locale') : Config::get('app.locale') ;

                     echo  $img[$lang] . $icono_idioma[$lang];
                    @endphp
                </a>
                <div class="dropdown-menu dropdown-menu-right scale-up" >

                    <a class="dropdown-item" href="{{ route('language') }}" onclick="event.preventDefault(); document.getElementById('id_locale').value = 'fr' ; document.getElementById('language-form').submit();" ><i class="flag-icon flag-icon-es"></i><img style='width:20px;height:20px' src='{{asset('admin/images/fr.jpg')}}'> fr</a>
                    <a class="dropdown-item" href="{{ route('language') }}" onclick="event.preventDefault(); document.getElementById('id_locale').value = 'en' ; document.getElementById('language-form').submit();" ><i class="flag-icon flag-icon-us"></i><img style='width:16px;height:16px' src='{{asset('admin/images/en.jpg')}}'>  us</a>

                    <form id="language-form" action="{{ route('language') }}" method="POST" style="display: none;">
                        <input type="hidden" name="locale" value="{{ session('locale') }}"  id="id_locale">
                        {{ csrf_field()  }}
                    </form>

                </div>
            </li>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:admin/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{asset('admin/images/faces/face1.jpg')}}" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
                <span class="text-secondary text-small">ADMIN</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
              <span class="menu-title">{{trans('commun.home')}}</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/etudiants/list')}}">
              <span class="menu-title">{{trans('commun.etudiant')}}</span>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/niveau/list')}}">
              <span class="menu-title">Niveaux</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user/list')}}">
              <span class="menu-title">Utilisateur</span>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">
              <span class="menu-title">A-propos</span>
              <i class="mdi mdi-ear-hearing menu-icon"></i>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content','')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:admin/partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">{{trans('commun.copyright')}}<a href="#" target="_blank">Pape samba ndour</a>. A.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

  @yield('js','')
</body>

</html>
