<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>訂單資訊 | GAME </title>
  <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG)}}/favicon.ico" />
  <link href="{{asset(ADMIN_CSS)}}/loader.css" rel="stylesheet" type="text/css" />
  <script src="{{asset(ADMIN_JS)}}/loader.js"></script>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="{{asset(ADMIN_BOOTSTRAP)}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS)}}/plugins.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_PLUGINS)}}/table/datatable/datatables.css">
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_CSS)}}/forms/theme-checkbox-radio.css">
  <link rel="stylesheet" type="text/css" href="{{ADMIN_PLUGINS}}/table/datatable/dt-global_style.css">
  <link rel="stylesheet" type="text/css" href="{{ADMIN_PLUGINS}}/table/datatable/custom_dt_custom.css">
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

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        <div class="page-header">
          <div class="page-title">
            <h3>Custom</h3>
          </div>
        </div>

        <div class="row layout-spacing">
          <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Style 1</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                  <table id="style-2" class="table style-2  table-hover">
                    <thead>
                      <tr>
                        <th class="checkbox-column"> Record Id </th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="checkbox-column"> 1 </td>
                        <td>Jane</td>
                        <td>Lamb</td>
                        <td>johndoe@yahoo.com</td>
                        <td>555-555-5555</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 2 </td>
                        <td>Linda</td>
                        <td>Nelson</td>
                        <td>linda@gmail.com</td>
                        <td>555-555-6666</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 3 </td>
                        <td>Kelly</td>
                        <td>Young</td>
                        <td>kelly@live.com</td>
                        <td>777-555-5555</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 4 </td>
                        <td>Vincent</td>
                        <td>Carpenter</td>
                        <td>vinnyc@outlook.com</td>
                        <td>555-666-5555</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 5 </td>
                        <td>Lila</td>
                        <td>Perry</td>
                        <td>lila@adobe.com</td>
                        <td>444-444-4444</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 6 </td>
                        <td>Traci</td>
                        <td>Lopez</td>
                        <td>traci@gmail.com</td>
                        <td>111-111-1111</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 7 </td>
                        <td>Nia</td>
                        <td>Hillyer</td>
                        <td>niaHill@yahoo.com</td>
                        <td>111-666-1111</td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                        </td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel">
                              <circle cx="12" cy="12" r="10"></circle>
                              <line x1="15" y1="9" x2="9" y2="15"></line>
                              <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row layout-spacing">
          <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Style 2</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4 style-1">
                  <table id="style-1" class="table style-1 table-hover non-hover">
                    <thead>
                      <tr>
                        <th class="checkbox-column"> Record no. </th>
                        <th>Name</th>
                        <th>Customers</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th class="">Status</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="checkbox-column"> 1 </td>
                        <td class="user-name">Sean Freeman</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>seanfreeman@admin.com</td>
                        <td>555-555-5555</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                            <span class="label label-success">Approved</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 2 </td>
                        <td class="user-name">Donna Rogers</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>donnarogers@user.com</td>
                        <td>555-555-6666</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                            <span class="label label-warning">Suspended</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 3 </td>
                        <td class="user-name">Irene Collins</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>irene@superadmin.com</td>
                        <td>777-555-5555</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                            <span class="label label-danger">Closed</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 4 </td>
                        <td class="user-name">Vincent Carpenter</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>vincentC@admin.com</td>
                        <td>555-666-5555</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                            <span class="label label-success">Approved</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 5 </td>
                        <td class="user-name">Susan Phillips</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>susan@yahoo.com</td>
                        <td>444-444-4444</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                            <span class="label label-warning">Suspended</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 6 </td>
                        <td class="user-name">Alexander Gray</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>alexander@gmail.com</td>
                        <td>111-111-1111</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                            <span class="label label-danger">Closed</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column"> 7 </td>
                        <td class="user-name">Judy Holmes</td>
                        <td class="">
                          <a class="profile-img" href="javascript: void(0);">
                            <img src="{{asset(ADMIN_IMG)}}/90x90.jpg" alt="product">
                          </a>
                        </td>
                        <td>judy@customer.com</td>
                        <td>111-666-1111</td>
                        <td>
                          <div class="d-flex">
                            <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                            <span class="label label-success">Approved</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <div class="dropdown custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                              </svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                              <a class="dropdown-item" href="javascript:void(0);">View</a>
                              <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row layout-spacing">
          <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Style 3</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                  <table id="style-3" class="table style-3  table-hover">
                    <thead>
                      <tr>
                        <th class="checkbox-column text-center"> Record Id </th>
                        <th class="text-center">Image</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="checkbox-column text-center"> 1 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Donna</td>
                        <td>Rogers</td>
                        <td>donna@yahoo.com</td>
                        <td>555-555-5555</td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 2 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Andy</td>
                        <td>King</td>
                        <td>andyking@gmail.com</td>
                        <td>555-555-6666</td>
                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 3 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Alma</td>
                        <td>Clarke</td>
                        <td>Alma@live.com</td>
                        <td>777-555-5555</td>
                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 4 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Vincent</td>
                        <td>Carpenter</td>
                        <td>vinnyc@outlook.com</td>
                        <td>555-666-5555</td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 5 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Kristen</td>
                        <td>Beck</td>
                        <td>kristen@adobe.com</td>
                        <td>444-444-4444</td>
                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 6 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Oscar</td>
                        <td>Garner</td>
                        <td>oscar@gmail.com</td>
                        <td>111-111-1111</td>
                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td class="checkbox-column text-center"> 7 </td>
                        <td class="text-center">
                          <span><img src="{{asset(ADMIN_IMG)}}/90x90.jpg" class="profile-img" alt="avatar"></span>
                        </td>
                        <td>Nia</td>
                        <td>Hillyer</td>
                        <td>niaHill@yahoo.com</td>
                        <td>111-666-1111</td>
                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                        <td class="text-center">
                          <ul class="table-controls">
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                  <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg></a></li>
                            <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg></a></li>
                          </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
    <script src="{{asset(ADMIN_JS)}}/libs/jquery-3.1.1.min.js">
    </script>
    <script src="{{asset(ADMIN_BOOTSTRAP)}}/js/popper.min.js"></script>
    <script src="{{asset(ADMIN_BOOTSTRAP)}}/js/bootstrap.min.js"></script>
    <script src="{{asset(ADMIN_PLUGINS)}}/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset(ADMIN_JS)}}/app.js"></script>
    <script>
      $(document).ready(function() {
        App.init();
      });
    </script>
    <script src="{{asset(ADMIN_JS)}}/custom.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="{{ADMIN_PLUGINS}}/table/datatable/datatables.js"></script>
  <script>
    // var e;
    c1 = $('#style-1').DataTable({
      headerCallback: function(e, a, t, n, s) {
        e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
      },
      columnDefs: [{
        targets: 0,
        width: "30px",
        className: "",
        orderable: !1,
        render: function(e, a, t, n) {
          return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        }
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      "lengthMenu": [5, 10, 20, 50],
      "pageLength": 5
    });

    multiCheck(c1);

    c2 = $('#style-2').DataTable({
      headerCallback: function(e, a, t, n, s) {
        e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
      },
      columnDefs: [{
        targets: 0,
        width: "30px",
        className: "",
        orderable: !1,
        render: function(e, a, t, n) {
          return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        }
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      "lengthMenu": [5, 10, 20, 50],
      "pageLength": 5
    });

    multiCheck(c2);

    c3 = $('#style-3').DataTable({
      "oLanguage": {
        "oPaginate": {
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      "stripeClasses": [],
      "lengthMenu": [5, 10, 20, 50],
      "pageLength": 5
    });

    multiCheck(c3);
  </script>
  <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>