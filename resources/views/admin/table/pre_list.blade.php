<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>事前預約活動</title>
    <link rel="icon" type="image/x-icon" href="{{ asset(ADMIN_IMG . '/favicon.ico') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset(ADMIN_BOOTSTRAP . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset(ADMIN_CSS . '/plugins.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_PLUGINS . '/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_CSS . '/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset(ADMIN_PLUGINS . '/table/datatable/dt-global_style.css') }}">
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

                <div class="page-header">
                    <div class="page-title">
                        <h3>事前預約活動管理</h3>
                    </div>
                </div>
                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mt-4 mb-4 pb-3">

                                {{-- ADD BTN --}}
                                <button class="btn btn-success btn-lg glyphicon glyphicon-plus add-modal mb-1 mt-1" data-toggle="modal"
                                    data-target="#addDiv">新增
                                </button>
                                {{-- ADD END --}}

                                {{-- MODAL ADD BEGIN --}}
                                <div class="modal fade" id="addDiv">
                                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Centered modal and increased width -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                                <h4 class="modal-title">新增事前預約</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form name="form1" id="addForm" action="" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="pre_name">事前預約名稱</label>
                                                        <input type="text" class="form-control" id="pre_name" name="pre_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quest_level">限制等級</label>
                                                        <input type="text" class="form-control" id="quest_level" name="quest_level">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_count">限制人數</label>
                                                        <input type="text" class="form-control" id="user_count" name="user_count">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ticket_price">參加費用</label>
                                                        <input type="text" class="form-control" id="ticket_price" name="ticket_price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="available">是否開放</label>
                                                        <input type="text" class="form-control" id="available" name="available">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="time_start">開始時間</label>
                                                        <input type="time" class="form-control" id="time_start" name="time_start">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="time_end">結束時間</label>
                                                        <input type="time" class="form-control" id="time_end" name="time_end">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">備註</label>
                                                        <input type="text" class="form-control" id="note" name="note">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" id="addButton">新增</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- MODAL ADD END --}}
                                

                                {{-- MODAL DEL BEGIN --}}
                                <div  class="modal fade show" style="display: none;" id="delDiv" aria-modal="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="icon-box text-center">
                                                    <i class="material-icons"></i>
                                                </div>
                                                <h4 class="modal-title text-center mb-4">確定要刪除事前預約活動嗎？</h4>
                                                <p class="text-center">請再次確定是否刪除？刪除後不可復原！</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                                <button type="button" class="btn btn-danger" id="confirmDeleteButton">確定刪除</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- MODAL DEL END --}}
                                
                                {{-- MODAL EDIT BEGIN --}}
                                <div class="modal fade" id="editDiv">
                                    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Changed modal size to large -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span> <!-- Using X symbol for close button -->
                                                </button>
                                                <h4 class="modal-title">編輯事前預約</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form name="form2" action="" method="PUT" id="editForm">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" id="preIdInput" name="pre_id">
                                                    <!-- 傳送 pre_id -->
                                                    <div class="form-group">
                                                        <label for="pre_name">事前預約名稱</label>
                                                        <input type="text" class="form-control" id="pre_name" name="pre_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quest_level">限制等級</label>
                                                        <input type="text" class="form-control" id="quest_level" name="quest_level">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_count">限制人數</label>
                                                        <input type="text" class="form-control" id="user_count" name="user_count">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ticket_price">參加費用</label>
                                                        <input type="text" class="form-control" id="ticket_price" name="ticket_price">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="available">是否開放</label>
                                                        <input type="text" class="form-control" id="available" name="available">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="time_start">開始時間</label>
                                                        <input type="time" class="form-control" id="time_start" name="time_start">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="time_end">結束時間</label>
                                                        <input type="time" class="form-control" id="time_end" name="time_end">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">備註</label>
                                                        <input type="text" class="form-control" id="note" name="note">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" id="editButton">更新</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- MODAL EDIT END --}}


                                {{-- TABLE BEGIN --}}
                                <table id="preListTable" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>事前預約名稱</th>
                                            <th>限制等級</th>
                                            <th>限制人數</th>
                                            <th>參加費用</th>
                                            <th>是否開放</th>
                                            <th>開始時間</th>
                                            <th>結束時間</th>
                                            <th>備註</th>
                                            <th>功能</th>
                                        </tr>
                                    </thead>
                                    <tbody id="preListTable">
                                        {{--  --}}
                                    </tbody>
                                </table>
                                {{-- TABLE END --}}
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
    <script src="{{ asset(ADMIN_JS . '/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset(ADMIN_BOOTSTRAP . '/js/popper.min.js') }}"></script>
    <script src="{{ asset(ADMIN_BOOTSTRAP . '/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset(ADMIN_PLUGINS . '/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset(ADMIN_JS . '/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset(ADMIN_PLUGINS . '/table/datatable/datatables.js') }}"></script>
    <script src = "{{ asset(ADMIN_JS . '/custom.js') }}"></script>
    <script>

        //  BEGIN PAGE LEVEL SCRIPTS
        $(document).ready(function () {
                //  使用 DataTables 初始化表格
            $('#preListTable').DataTable({
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
            //  END PAGE LEVEL SCRIPTS
            fetchPreLists();
        });
        

        // BEGIN AXIOS RENDER
        function fetchPreLists() {
                axios.get('/admin/fetch_pre_lists') // 建一個獲取表單數據的路由
                    .then(function (response) {
                        const preLists = response.data;
                        const table = $('#preListTable').DataTable();
                        table.clear().draw(); // 重置數據
                        preLists.forEach(function (preList) {
                            table.row.add([
                                preList.pre_id,
                                preList.pre_name,
                                preList.quest_level,
                                preList.user_count,
                                preList.ticket_price,
                                preList.available,
                                preList.time_start,
                                preList.time_end,
                                preList.note,
                                `<a href="javascript:void(0);" data-toggle="modal" class="p-1" data-placement="top" title="Edit" data-target="#editDiv" data-id="${preList.pre_id}" data-name="${preList.pre_name}" data-level="${preList.quest_level}" data-count="${preList.user_count}" data-price="${preList.ticket_price}" data-available="${preList.available}" data-start="${preList.time_start}" data-end="${preList.time_end}" data-note="${preList.note}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather mb-1 feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>`+
                                `<a href="javascript:void(0);" class="m-1" data-toggle="tooltip" onclick="delButton(${preList.pre_id})" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>`
                            ]).draw(false);
                        });
                    })
                    .catch(function (error) {
                        console.error('Error fetching pre-lists:', error);
                    });
            }
        // END AXIOS RENDER

        // BEGIN ADD BUTTON
        document.getElementById('addButton').addEventListener('click', function(e) { 
            const form = document.getElementById('addForm');
            const formData = new FormData(form);
            e.preventDefault();
            axios.post('/admin/pre_list', formData)
                .then(function(response) {
                    console.log(response);
                    // 成功回應
                    fetchPreLists();

                    // 隱藏 addDiv modal
                    addDiv.style.display = 'none';
                    document.body.classList.remove('modal-open');
                    document.querySelector('.modal-backdrop').remove();
                })
                .catch(function(error) {
                    console.log(error);
                    // 錯誤回應
                });
        });
        // END ADD BUTTON
  
        // BEGIN SHOW EDIT INFO BUTTON
        $('#editDiv').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var level = button.data('level');
            var count = button.data('count');
            var price = button.data('price');
            var available = button.data('available');
            var start = button.data('start');
            var end = button.data('end');
            var note = button.data('note');

            var modal = $(this);
            modal.find('#preIdInput').val(id);
            modal.find('#pre_name').val(name);
            modal.find('#quest_level').val(level);
            modal.find('#user_count').val(count);
            modal.find('#ticket_price').val(price);
            modal.find('#available').val(available);
            modal.find('#time_start').val(start);
            modal.find('#time_end').val(end);
            modal.find('#note').val(note);
        });
        // END SHOW EDIT INFO BUTTON

        // BEGIN EDIT BUTTON
        document.getElementById('editButton').addEventListener('click', function(e) {
            // 阻止默認提交
            e.preventDefault();
            
            // 獲取表單和表單數據
            const form = document.getElementById('editForm');
            const formData = new FormData(form);
            const preId = document.getElementById('preIdInput').value;
            const editDiv = document.getElementById('editDiv'); 

            // POST // update要用put但是在這裡先用post 在頁面在改put
            axios.post('/admin/pre_list/' + preId, formData)
                .then(function(response) {
                    console.log(response);
                    fetchPreLists(); 
                    
                    // 隱藏 editDiv modal
                    editDiv.style.display = 'none';
                    document.body.classList.remove('modal-open');
                    document.querySelector('.modal-backdrop').remove();
                })
                .catch(function(error) {
                    console.log(error);
                });
        });
        // END EDIT BUTTON

        // BEGIN DEL BUTTON
function delButton(preListId) { 
    // 设置全局变量，以便在确认删除时使用
    currentPreListId = preListId;

    // 打开删除模态框
    $('#delDiv').modal('show');
}

// 确认删除按钮的点击事件
document.getElementById('confirmDeleteButton').addEventListener('click', function() {
    // 获取要删除的事前预约项目的ID
    var preListId = currentPreListId;

    // 发送删除请求
    axios.delete(`/admin/pre_list/${preListId}`, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(function(response) {
            console.log(response);
            fetchPreLists();
        })
        .catch(function(error) {
            console.error(error);
        });

    // 关闭删除模态框
    $('#delDiv').modal('hide');
});
// END DEL BUTTON
    </script>
    <script>
        $(document).ready(function () {
            
            App.init();
        });
    </script>
</body>
</html>
