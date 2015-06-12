<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Administrator')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ Module::asset('core:components/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ Module::asset('core:components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ Module::asset('core:components/adminlte/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ Module::asset('core:components/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ Module::asset('core:components/adminlte/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ Module::asset('core:components/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ Module::asset('core:components/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular-resource.js"></script>
    <script type="text/javascript" src="{{ Module::asset('core:AngularBooter/angularBooter.js') }}"></script>
    <script>
      BASE_URL = '{{ url() }}/';
      
      window.Cms = new AngularBooter('Cms'); // <-- Pass in what you want to call your ng-app.
    </script>
  </head>
  <body ng-app="Cms" class="skin-blue">
    <div class="wrapper">
      @include('core::layouts.partials.header')
      @include('core::layouts.partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ View::yieldContent('title', 'Dashboard') }}
            <small>{{ View::yieldContent('subtitle') }}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          @yield('content')
        </section>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
           Admin theme using AdminLTE from <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div>
        <strong>Copyright &copy; {{ date('Y') }} <a href="#">Pingpong Labs</a>.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ Module::asset('core:components/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ Module::asset('core:components/adminlte/dist/js/app.min.js') }}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ Module::asset('core:components/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ Module::asset('core:components/adminlte/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>

    @yield('script')
    <script type="text/javascript">
      window.Cms.boot();
    </script>
  </body>
</html>
