<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>扭蛋機統計</title>
    <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG.'/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Gacha Information </title>
        <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG.'/favicon.ico')}}"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="{{asset(ADMIN_BOOTSTRAP.'/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset(ADMIN_CSS.'/plugins.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_PLUGINS.'/table/datatable/datatables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_CSS.'/forms/theme-checkbox-radio.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_PLUGINS.'/table/datatable/dt-global_style.css')}}">
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
                            <h3>扭蛋機統計管理</h3>
                        </div>
                    </div>
                    <div class="row" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="table-responsive mt-4 mb-4">
    
                                    {{-- ADD BTN --}}
                                    <button class="btn btn-success glyphicon glyphicon-plus add-modal" data-toggle="modal" data-target="#addDiv">新增扭蛋機的資料
                                    </button>
                                    {{-- ADD END --}}
    
                                    {{-- MODAL ADD BEGIN--}}
                                    <div class="modal fade" id="addDiv">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                      <span class="glyphicon glyphicon-remove"></span>
                                                    </button>
                                                    <h4 class="card-title"></h4>
                                                  </div>
                                                   <form name="form1" method="POST"> 
                                                    @csrf
                                                    <div class="mb-3">
                                                      <label for="login" class="form-label">帳號</label>
                                                      <input type="text" class="form-control" id="login" name="login">
                                                      <div class="form-text"></div>
                                                    </div>
                                              
                                                    <div class="mb-3">
                                                      <label for="gacha_item_id" class="form-label">獲得扭蛋ID</label>
                                                      <input type="text" class="form-control" id="gacha_item_id" name="gacha_item_id">
                                                      <div class="form-text"></div>
                                                    </div>
                                              
                                                    <div class="mb-3">
                                                      <label for="total_spent" class="form-label">總消費金額 </label>
                                                      <input type="text" class="form-control" id="total_spent" name="total_spent">
                                                      <div class="form-text"></div>
                                                    </div>
    
                                                    <div class="mb-3">
                                                      <label for="last_spent_date" class="form-label">最後消費時間 </label>
                                                      <input type="text" class="form-control" id="last_spent_date" name="last_spent_date">
                                                      <div class="form-text"></div>
                                                    </div>
    
                                                    <div class="mb-3">
                                                      <label for="prob_adj" class="form-label">機率調整 </label>
                                                      <input type="text" class="form-control" id="prob_adj" name="prob_adj">
                                                      <div class="form-text"></div>
                                                    </div>
    
                                                    <div class="mb-3">
                                                      <label for="note" class="form-label">備註 </label>
                                                      <input type="text" class="form-control" id="note" name="note">
                                                      <div class="form-text"></div>
                                                    </div>
    
                                                    <button type="submit" class="btn btn-primary">新增</button>
                                                    </form>
                                                </div>
                                                
                                              </div>
                                        </div>
                                      </div>
                                    {{-- MODAL ADD END--}}
                                    
                                    {{-- MODAL EDIT BEGIN --}}
                                <div class="modal fade" id="editDiv">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span>
                                                    </button>
                                                    <h4 class="card-title"></h4>
                                                </div>
                                                <form name="form2" action="" method="PUT" id="editForm">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" id="preIdInput" name="pre_id">
                                                    <!-- 傳送 pre_id -->
                                                    <div class="mb-3">
                                                        <label for="login" class="form-label">帳號</label>
                                                        <input type="text" class="form-control" id="login" name="login">
                                                        <div class="form-text"></div>
                                                      </div>
                                                
                                                      <div class="mb-3">
                                                        <label for="gacha_item_id" class="form-label">獲得扭蛋ID</label>
                                                        <input type="text" class="form-control" id="gacha_item_id" name="gacha_item_id">
                                                        <div class="form-text"></div>
                                                      </div>
                                                
                                                      <div class="mb-3">
                                                        <label for="total_spent" class="form-label">總消費金額 </label>
                                                        <input type="text" class="form-control" id="total_spent" name="total_spent">
                                                        <div class="form-text"></div>
                                                      </div>
      
                                                      <div class="mb-3">
                                                        <label for="last_spent_date" class="form-label">最後消費時間 </label>
                                                        <input type="text" class="form-control" id="last_spent_date" name="last_spent_date">
                                                        <div class="form-text"></div>
                                                      </div>
      
                                                      <div class="mb-3">
                                                        <label for="prob_adj" class="form-label">機率調整 </label>
                                                        <input type="text" class="form-control" id="prob_adj" name="prob_adj">
                                                        <div class="form-text"></div>
                                                      </div>
      
                                                      <div class="mb-3">
                                                        <label for="note" class="form-label">備註 </label>
                                                        <input type="text" class="form-control" id="note" name="note">
                                                        <div class="form-text"></div>
                                                      </div>
                                                    
                                                    
                                                    <button type="submit" class="btn btn-primary" id="editButton">更新</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- MODAL EDIT END --}}

                                {{-- TABLE BEGIN --}}
                                <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>帳號</th>
                                            <th>獲得扭蛋ID</th>
                                            <th>總消費金額</th>
                                            <th>最後消費時間</th>
                                            <th>機率調整</th>
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
       <script src="{{asset(ADMIN_JS.'/libs/jquery-3.1.1.min.js')}}"></script>
       <script src="{{asset(ADMIN_BOOTSTRAP.'/js/popper.min.js')}}"></script>
       <script src="{{asset(ADMIN_BOOTSTRAP.'/js/bootstrap.min.js')}}"></script>
       <script src="{{asset(ADMIN_PLUGINS.'/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
       <script src="{{asset(ADMIN_JS.'/app.js')}}"></script>
       <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
       <script>
        // BEGIN FETCH
        function fetchPreLists() {
                axios.get('/admin/fetch_pre_lists') // 修改路由为新的路由
                    .then(function(response) {
                        const preLists = response.data; // 将变量名改为 preLists
                        // console.log(preLists);
                        const tableBody = document.querySelector('#preListTable');
                        if (tableBody) {
                            tableBody.innerHTML = ''; // Clear existing rows
                            preLists.forEach(function(preList) {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                            <td>${preList.pre_id}</td>
                            <td>${preList.pre_name}</td>
                            <td>${preList.quest_level}</td>
                            <td>${preList.user_count}</td>
                            <td>${preList.ticket_price}</td>
                            <td>${preList.available}</td>
                            <td>${preList.time_start}</td>
                            <td>${preList.time_end}</td>
                            <td>${preList.note}</td>
                            <td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <li>
                                        <a  data-toggle="modal" href="javascript:void(0);"
                                            data-placement="top" title="Edit"
                                            data-target="#editDiv"
                                            data-id="${preList.pre_id}"
                                            data-name="${preList.pre_name}"
                                            data-level="${preList.quest_level}"
                                            data-count="${preList.user_count}"
                                            data-price="${preList.ticket_price}"
                                            data-available="${preList.available}"
                                            data-start="${preList.time_start}"
                                            data-end="${preList.time_end}"
                                            data-note="${preList.note}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 text-success">
                                                <path
                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="tooltip"
                                            data-placement="top" title="Delete"
                                            onclick="delButton(${preList.pre_id})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11"
                                                    x2="10" y2="17"></line>
                                                <line x1="14" y1="11"
                                                    x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>`;
                            
                        
                                tableBody.appendChild(row);
                            });
                        }
                    })
                    .catch(function(error) {
                        console.error('Error fetching pre-lists:', error);
                    });
            }
            // END FETCH
    
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
                    })
                    .catch(function(error) {
                        console.log(error);
                        // 錯誤回應
                    });
            });
            // END ADD BUTTON
      
            // Initialize the edit modal event
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
                fetchPreLists(); // 渲染
                
                // 隱藏 editDiv modal
                editDiv.style.display = 'none';
                document.body.classList.remove('modal-open');
                document.querySelector('.modal-backdrop').remove();
            })
            .catch(function(error) {
                console.log(error);
            });
                });
            // DEL BUTTON
            function delButton(preListId) { 
                if (confirm('確定要刪除事前預約活動嗎？')) {
                    axios.delete(`/admin/pre_list/${preListId}`, {
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            }
                        })
                        .then(function(response) {
                            console.log(response);
                            fetchPreLists();
                        })
                        .catch(function(error) {
                            console.error(error);
                        });
                }
            } 
     
    
       </script>

       <script>
           $(document).ready(function() {
               App.init();
           });
       </script>
       <script src="{{asset(ADMIN_JS.'/custom.js')}}"></script>
       <!-- END GLOBAL MANDATORY SCRIPTS -->
    
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="{{asset(ADMIN_PLUGINS.'/table/datatable/datatables.js')}}"></script>
       {{-- <script>
           $('#multi-column-ordering').DataTable({
               "oLanguage": {
                   "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                   "sInfo": "Showing page _PAGE_ of _PAGES_",
                   "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                   "sSearchPlaceholder": "Search...",
                  "sLengthMenu": "Results :  _MENU_",
               },
               "stripeClasses": [],
               "lengthMenu": [7, 10, 20, 50],
               "pageLength": 7,
             columnDefs: [ {
                 targets: [ 0 ],
                 orderData: [ 0, 1 ]
             }, {
                 targets: [ 1 ],
                 orderData: [ 1, 0 ]
             }, {
                 targets: [ 4 ],
                 orderData: [ 4, 0 ]
             } ]
         });
       </script> --}}
       <!-- END PAGE LEVEL SCRIPTS -->
    
    
    </body>
    </html>