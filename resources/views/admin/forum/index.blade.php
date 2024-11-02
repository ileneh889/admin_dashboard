<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>論壇管理</title>
  <link rel="icon" type="image/x-icon" href="{{ADMIN_IMG}}/favicon.ico" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="{{ADMIN_BOOTSTRAP}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ADMIN_CSS}}/plugins.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  <link rel="stylesheet" type="text/css" href="{{ADMIN_CSS}}/forms/theme-checkbox-radio.css">
  <link href="{{ADMIN_PLUGINS}}/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ADMIN_CSS}}/apps/contacts.css" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL STYLES -->
</head>

<body class="alt-menu sidebar-noneoverflow">

  <!--  BEGIN NAVBAR  -->
  @include ('admin.layout.navbar')
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container sidebar-closed sbar-open" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include ('admin.layout.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
          <div class="col-lg-12">
            <div class="widget-content searchable-container list">

              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                  <form class="form-inline my-2 my-lg-0">
                    <div class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                      </svg>
                      <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                    </div>
                  </form>
                </div>

                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                  <div class="d-flex justify-content-sm-end justify-content-center">
                    <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                      <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                      <circle cx="8.5" cy="7" r="4"></circle>
                      <line x1="20" y1="8" x2="20" y2="14"></line>
                      <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>

                    <div class="switch align-self-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3" y2="6"></line>
                        <line x1="3" y1="12" x2="3" y2="12"></line>
                        <line x1="3" y1="18" x2="3" y2="18"></line>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                      </svg>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
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
                                      <input type="text" id="c-name" class="form-control" placeholder="Name">
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
                          <button id="btn-edit" class="float-left btn">Save</button>

                          <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                          <button id="btn-add" class="btn">Add</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="searchable-items list">
                <div class="items items-header-section">
                  <div class="item-content">
                    <div class="">
                      <div class="n-chk align-self-center text-center">
                        <label class="new-control new-checkbox checkbox-primary">
                          <input type="checkbox" class="new-control-input" id="contact-check-all">
                          <span class="new-control-indicator"></span>
                        </label>
                      </div>

                    </div>
                    <div class="n-chk align-self-center text-center">
                      <h4 class="ml-0">ID</h4>
                    </div>
                    <div class="n-chk align-self-center text-center" style="width:66px">
                      <h4 class="ml-0">會員ID</h4>
                    </div>
                    <div class="n-chk align-self-center text-center" style="width:66px">
                      <h4 class="ml-0">會員權限</h4>
                    </div>
                    <div class="user-location text-center" style="width:110px">
                      <h4 class="ml-0">上傳時間</h4>
                    </div>
                    <div class="user-location text-center" style="width:110px">
                      <h4 class="ml-0">分區</h4>
                    </div>
                    <div class="user-location text-center" style="width:110px">
                      <h4 class="ml-0">分類</h4>
                    </div>
                    <div class="user-location text-center" style="width:70px">
                      <h4 class="ml-0">文章ID</h4>
                    </div>
                    <div class="user-location text-center" style="width:110px">
                      <h4 class="ml-0">文章標題</h4>
                    </div>
                    <div class="user-phone text-center" style="width:110px">
                      <h4 class="ml-0">內容描述</h4>
                    </div>
                    <div class="action-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                      </svg>
                    </div>
                  </div>
                </div>

                @foreach ($forums as $forum)

                <div class="items">
                  <div class="item-content">
                    <div class="user-profile">
                      <div class="n-chk align-self-center text-center">
                        <label class="new-control new-checkbox checkbox-primary">
                          <input type="checkbox" class="new-control-input contact-chkbox">
                          <span class="new-control-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="user-email">
                      <p class="user-name text-center">{{$forum->id}}</p>
                    </div>
                    <div class="user-email" style="width:80px">
                      <p class="usr-email-addr text-center">{{$forum->player_id}}</p>
                    </div>
                    <div class="user-email" style="width:80px">
                      <p class="usr-email-addr text-center">{{$forum->player_permissions}}</p>
                    </div>
                    <div class="user-email" style="width:120px">
                      <p class="usr-email-addr text-center">{{$forum->submit_time}}</p>
                    </div>
                    <div class="user-email text-center" style="width:110px">
                      <p class="usr-email-addr"></p>{{$forum->area}}</p>
                    </div>
                    <div class="user-email text-center" style="width:110px">
                      <p class="usr-email-addr"></p>{{$forum->category}}</p>
                    </div>
                    <div class="user-email" style="width:80px">
                      <p class="usr-email-addr text-center">{{$forum->article_id}}</p>
                    </div>
                    <div class="user-meta-info text-center" style="width:110px">
                      <p class="info-title"></p>{{$forum->article_title}}</p>
                    </div>
                    <div class="user-email text-center" style="width:110px">
                      <p class="usr-email-addr"></p>{{$forum->descriptions}}</p>
                    </div>
                    <div class="action-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                      </svg>
                    </div>
                  </div>

                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  END CONTENT AREA  -->
      </div>
      <!-- END MAIN CONTAINER -->

      <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
      <script src="{{ADMIN_JS}}/libs/jquery-3.1.1.min.js"></script>
      <script src="{{ADMIN_BOOTSTRAP}}/js/popper.min.js"></script>
      <script src="{{ADMIN_BOOTSTRAP}}/js/bootstrap.min.js"></script>
      <script src="{{ADMIN_PLUGINS}}/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="{{ADMIN_JS}}/app.js"></script>
      <script>
        $(document).ready(function() {
          App.init();
        });
      </script>
      <script src="{{ADMIN_JS}}/custom.js"></script>
      <!-- END GLOBAL MANDATORY SCRIPTS -->
      <script src="{{ADMIN_PLUGINS}}/jquery-ui/jquery-ui.min.js"></script>
      <script src="{{ADMIN_JS}}/apps/contact.js"></script>
</body>

</html>