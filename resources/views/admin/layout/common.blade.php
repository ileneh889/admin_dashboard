<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>MMORPG Admin - designed by group C </title>
  <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG.'/favicon.ico')}}" />
  <link href="{{asset(ADMIN_CSS.'/loader.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{asset(ADMIN_JS.'/loader.js')}}"></script>

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="{{asset(ADMIN_BOOTSTRAP.'/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS.'/plugins.css')}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  <link href="{{asset(ADMIN_CSS.'/plugins.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset(ADMIN_CSS.'/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="alt-menu sidebar-noneoverflow">
  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <!-- THE NAVBAR -->
  @include('admin.layout.navbar')


  @yield('content')

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset(ADMIN_JS.'/libs/jquery-3.1.1.min.js')}}">
  </script>
  <script src="{{asset(ADMIN_BOOTSTRAP.'/js/popper.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP.'/js/bootstrap.min.js')}}"></script>
  <script src="{{asset(ADMIN_PLUGINS.'/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset(ADMIN_JS.'/app.js')}}"></script>
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
  <script src="{{asset(ADMIN_JS.'/custom.js')}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="{{asset(ADMIN_PLUGINS.'/apex/apexcharts.min.js')}}"></script>
  <script src="{{asset(ADMIN_JS.'/dashboard/dash_1.js')}}"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>