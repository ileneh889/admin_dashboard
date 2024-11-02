<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Forum | Backend system</title>
    <link rel="icon" type="image/x-icon" href="{{ asset(ADMIN_IMG) }}/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset(ADMIN_BOOTSTRAP) }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset(ADMIN_CSS) }}/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_PLUGINS) }}/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_CSS) }}/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_PLUGINS) }}/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->
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

                {{-- page header --}}
                <div class="page-header">
                    <div class="page-title d-flex justify-content-between w-100">
                        <h3>forum mangament</h3>
                        {{-- add --}}
                        <a href="{{ url('admin/forum/index') }}" type="button" class="btn btn-secondary">back
                        </a>
                    </div>
                </div>
                {{-- end add --}}

                {{-- status show --}}
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                {{-- end status --}}

                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                {{-- form --}}
                                <form action="" method="post" class="w-50 m-auto">
                                    @csrf
                                    {{-- forum_id --}}
                                    {{-- <label for="forum_id">id</label>
                                    <input type="text" class="form-control" name="forum_id"
                                        value="{{ old('forum_id') }}" id="id"><br>
                                    @error('forum_id')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror --}}


                                    {{-- id --}}
                                    <label for="id">id</label>
                                    <input type="text" class="form-control" name="id" value="{{ old('id') }}" id="id"><br>
                                    @error('id')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror

                                    {{-- user_id --}}
                                    <label for="user_id">user_id</label>
                                    <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" id="user_id"><br>
                                    @error('user_id')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror

                                    {{-- area --}}
                                    <label for="area">area</label>
                                    <input type="text" class="form-control" name="area" value="{{ old('area') }}" id="area"><br>
                                    @error('area')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror

                                    {{-- category --}}
                                    <label for="category">category</label>
                                    <input type="text" class="form-control" name="category" value="{{ old('category') }}" id="category"><br>
                                    @error('category')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror

                                    {{-- article title --}}
                                    <label for="article title">article title</label>
                                    <input type="text" class="form-control" name="article title" value="{{ old('article title') }}" id="article title"><br>
                                    @error('article title')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror


                                    {{-- submit_date --}}
                                    <label for="submit_date">submit_date</label>
                                    <input type="date" class="form-control" name="submit_date" value="{{ old('submit_date') }}" id="submit_date"><br>
                                    @error('submit_date')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror


                                    {{-- description --}}
                                    <label for="description">description</label>
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" id="description"><br>
                                    @error('description')
                                    <span class='text-danger'>{{ $message }}</span><br>
                                    @enderror

                                    {{-- submit --}}
                                    <input href="" type="submit" class="btn btn-secondary mb-2" value="sumbit"></a>
                                </form>
                                {{-- end form --}}
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
    <script src="{{ asset(ADMIN_PLUGINS) }}/table/datatable/datatables.js"></script>
    <script>
        $('#multi-column-ordering').DataTable({
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
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [4],
                orderData: [4, 0]
            }]
        });
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>