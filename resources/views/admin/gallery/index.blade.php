@extends('admin.layout.gallery')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            {{-- page header --}}
            <div class="page-header">
                <div class="page-title">
                    <h3>ARTWORK LIST</h3>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            {{-- add --}}
            <a href="{{ url('admin/gallery/index/create') }}" type="button" class="btn btn-secondary mb-2">+ add
                artwork</a>
            {{-- end add --}}
            <div class="row" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            {{-- table --}}
                            <table id="multi-column-ordering" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>user_id</th>
                                        <th>description</th>
                                        <th>view</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($artworks as $artwork)
                                        <tr>
                                            <td>{{ $artwork->id }}</td>
                                            <td>{{ $artwork->title }}</td>
                                            <td>{{ $artwork->user_id }}</td>
                                            <td>{{ $artwork->description }}</td>
                                            {{-- view --}}
                                            <td>
                                                <a href="{{ url('admin/gallery/index/' . $artwork->id . '/view') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </a>
                                            </td>
                                            {{-- edit --}}
                                            <td>
                                                <a href="{{ url('admin/gallery/index/' . $artwork->id . '/edit') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit-3">
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                            {{-- delete --}}
                                            <td>
                                                <a href="{{ url('admin/gallery/index/' . $artwork->id . '/delete') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17">
                                                        </line>
                                                        <line x1="14" y1="11" x2="14" y2="17">
                                                        </line>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- end table --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
    </div>


    <!-- END MAIN CONTAINER -->
@endsection
