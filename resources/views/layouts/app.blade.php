<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- overlayScrollbars -->
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    @yield('styles')
    @include('layouts.datatablestyles')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed layout-navbar-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('img/user.png')}}"
                         class="user-image img-circle" alt="User Image" style="border: 1px solid #6633CC!important;">
                    <span class="d-none d-md-inline">{{ Auth::user()->email }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{asset('img/user.png')}}"
                             class="img-circle"
                             alt="User Image" style="border: 2px solid #6633CC!important;">
                        <p  class="text-dark">
                            {{ Auth::user()->email }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat border">Profile <i class="fa-solid fa-user-cog"></i></a>
                        <a href="#" class="btn btn-default btn-flat float-right border"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Se déconnecter <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
          <section class="content-header pl-4">
             @yield('content-header')
           </section>
          <!-- Main content -->
           <section class="content">
             @yield('content')
           </section>
    </div>
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.1
        </div>
        <strong>Copyright &copy; {{ date('Y')}} <a href="https://yousch.com">Yousch</a>.</strong> All rights
        reserved.
    </footer>
</div>

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>
<!--  jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
 @yield('scripts')
<!-- page script -->
@include('layouts.datatablescripts')
<script type="text/javascript">
$(document).ready( function () {
  $('#datatable').DataTable();
});
</script>
<script>
$(function(){
    @if(Session::has('success'))
        Swal.fire({
        icon: 'success',
        title: 'Succès!',
        text: '{{ Session::get("success") }}'
    })
    @endif
});
@if(Session::has('error'))
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ Session::get("error") }}'
    })
@endif
</script>
</body>
</html>
