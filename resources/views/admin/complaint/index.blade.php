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

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        <div class="page-header">
          <div class="page-title">
            <h3>客訴處理進度管理</h3>
          </div>
        </div>

        <div class="row" id="cancel-row">
          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
              <div class="table-responsive mb-4 mt-4">
                <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th></th>
                      <th>id</th>
                      <th>user id</th>
                      <th>admin id</th>
                      <th>submit date</th>
                      <th>start date</th>
                      <th>question description</th>
                      <th>state</th>
                      <th>finish date</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @for ($i = 1; $i < 50; $i++) <tr>
                      <td>
                        <input type="checkbox" name="select">
                      </td>
                      {{-- id --}}
                      <td>{{ $i }}</td>
                      {{-- user id --}}
                      <td>Yvonne{{ $i }} </td>
                      {{-- admin id --}}
                      <td>Lee{{ $i }} </td>
                      {{-- submit date --}}
                      <td>submit date</td>
                      {{-- start date --}}
                      <td>start date</td>
                      {{-- question description --}}
                      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                        laborum pariatur. Eius?</td>
                      {{-- state --}}
                      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                        laborum pariatur. Eius?</td>
                      {{-- finish date --}}
                      <td>finish date</td>
                      {{-- delete --}}
                      <td class="d-flex justify-content-center">
                        <a href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                          </svg>
                        </a>
                      </td>
                      </tr>
                      @endfor
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--  END CONTENT AREA  -->
  </div>


  <!-- END MAIN CONTAINER -->

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