<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? '商品首頁' }} | GAME </title>
    <link rel="icon" type="image/x-icon" href="{{ asset(ADMIN_IMG) }}/favicon.ico" />
    <link href="{{ asset(ADMIN_CSS) }}/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset(ADMIN_JS) }}/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset(ADMIN_BOOTSTRAP) }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset(ADMIN_CSS) }}/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{ asset(ADMIN_PLUGINS) }}/table/datatable/datatables.css" rel="stylesheet" type="text/css">
    <link href="{{ asset(ADMIN_CSS) }}/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css">
    <link href="{{ ADMIN_PLUGINS }}/table/datatable/dt-global_style.css" rel="stylesheet" type="text/css">
    <link href="{{ ADMIN_PLUGINS }}/table/datatable/custom_dt_custom.css" rel="stylesheet" type="text/css">
    <link href="{{ asset(ADMIN_PLUGINS) }}/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ ADMIN_PLUGINS }}/dropify/dropify.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset(ADMIN_CSS) }}/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset(ADMIN_CSS) }}/apps/contacts.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset(ADMIN_PLUGINS) }}/select2/select2.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset(ADMIN_PLUGINS) }}/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>

<body class="alt-menu sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    @include('admin.layout.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>



        <!--  BEGIN SIDEBAR  -->
        @include('admin.layout.sidebar')
        <!--  END SIDEBAR  -->

        @yield('content')

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset(ADMIN_JS) }}/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset(ADMIN_BOOTSTRAP) }}/js/popper.min.js"></script>
    <script src="{{ asset(ADMIN_BOOTSTRAP) }}/js/bootstrap.min.js"></script>
    <script src="{{ asset(ADMIN_PLUGINS) }}/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset(ADMIN_JS) }}/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset(ADMIN_JS) }}/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ ADMIN_PLUGINS }}/dropify/dropify.min.js"></script>
    <!-- <script src="{{ ADMIN_PLUGINS }}/jquery.blockUI.min.js"></script> -->
    <script src="{{ ADMIN_PLUGINS }}/table/datatable/datatables.js"></script>
    <script src="{{ asset(ADMIN_JS) }}/apps/product.js"></script>
    <script src="{{ asset(ADMIN_PLUGINS) }}/select2/select2.min.js"></script>
    <script src="{{ asset(ADMIN_PLUGINS) }}/select2/custom-select2.js"></script>
    <script src="{{ asset(ADMIN_PLUGINS) }}/bootstrap-select/bootstrap-select.min.js"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
