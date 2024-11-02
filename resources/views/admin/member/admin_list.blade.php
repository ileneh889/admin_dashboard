<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>DataTables Alternative pagination | CORK - Multipurpose Bootstrap Dashboard Template </title>
  <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG . '/favicon.ico')}}" />
  <link href="{{asset(ADMIN_CSS . '/loader.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{asset(ADMIN_JS . '/loader.js')}}"></script>

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="{{asset(ADMIN_BOOTSTRAP . '/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS . '/plugins.css')}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_PLUGINS . '/table/datatable/datatables.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_PLUGINS . '/table/datatable/dt-global_style.css')}}">
  <!-- END PAGE LEVEL CUSTOM STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  <link href="{{asset(ADMIN_PLUGINS . '/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS . '/apps/contacts.css')}}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
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

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container sidebar-closed sbar-open" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!-- THE SIDEBAR -->
    @include('admin.layout.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="page-header">
          <div class="page-title d-flex justify-content-between w-100">
            <h3>員工列表</h3>
            <!-- <button type="button" class="btn btn-primary mx-3" id="btn-add-contact" data-bs-toggle="modal" data-bs-target="#addContactModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-fill-add" viewBox="0 0 16 16">
                <path
                  d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path
                  d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
              </svg>
              新增成員</button> -->
          </div>
        </div>

        <div class="row" id="cancel-row">
          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
              <div class="table-responsive mb-4 mt-4 p-3">
                <table id="alter_pagination" class="table table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>會員編號</th>
                      <th>姓名</th>
                      <th>E-mail</th>
                      <th>最後登入時間</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($admins as $admin)
                      <tr>
                      <td>{{$admin->admin_id}}</td>
                      <td>{{$admin->admin_name}}</td>
                      <td>{{$admin->admin_email}}</td>
                      <td>{{$admin->last_login_time}}</td>
                      <td class="text-center">
                        <a href="javascript:void(0);" onclick="deleteMember( '{{$admin->admin_id}}' );" data-toggle="tooltip"
                        data-placement="top" title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2 text-danger">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                          </svg>
                        </a> 
                      </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <!-- <div class="searchable-container">
      <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
              <div class="add-contact-box">
                <div class="add-contact-content">
                  <form id="addContactModalTitle">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="contact-name">
                          <i class="flaticon-user-11"></i>
                          <input type="text" id="c-name" class="form-control" placeholder="姓名">
                          <span class="validation-text"></span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="contact-email">
                          <i class="flaticon-mail-26"></i>
                          <input type="text" id="c-email" class="form-control" placeholder="Email">
                          <span class="validation-text"></span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="contact-occupation">
                          <i class="flaticon-fill-area"></i>
                          <input type="text" id="c-occupation" class="form-control" placeholder="Occupation">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="contact-phone">
                          <i class="flaticon-telephone"></i>
                          <input type="text" id="c-phone" class="form-control" placeholder="Phone">
                          <span class="validation-text"></span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="contact-location">
                          <i class="flaticon-location-1"></i>
                          <input type="text" id="c-location" class="form-control" placeholder="Location">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button id="btn-edit" class="float-left btn">編輯</button>
              <button id="btn-add" class="btn">新增</button>
              <button class="btn" data-dismiss="modal" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> 取消</button>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!--  END CONTENT AREA  -->

  </div>
  <!-- END MAIN CONTAINER -->

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="{{asset(ADMIN_JS . '/libs/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/popper.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/bootstrap.min.js')}}"></script>
  <script src="{{asset(ADMIN_PLUGINS . '/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset(ADMIN_JS . '/app.js')}}"></script>
  <script>
    $(document).ready(function () {
      App.init();
    });
  </script>
  <script src="{{asset(ADMIN_JS . '/custom.js')}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
  <script src="{{asset(ADMIN_PLUGINS . '/table/datatable/datatables.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('#alter_pagination').DataTable({
        "pagingType": "full_numbers",
        "oLanguage": {
          "oPaginate": {
            "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
            "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
            "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
            "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
          },
          "sInfo": "Showing page _PAGE_ of _PAGES_",
          "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
          "sSearchPlaceholder": "Search...",
          "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
      });
    });
  </script>
  <script src="{{asset(ADMIN_PLUGINS . '/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset(ADMIN_JS . '/apps/contact.js')}}"></script>
  <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

  <script>
    function deleteMember(adminId) {
      if (confirm('確定要刪除此會員嗎？')) {
        window.location.href = '/admin/admin_list/delete?admin_id=' + adminId;
      }
    }
  </script>
</body>

</html>