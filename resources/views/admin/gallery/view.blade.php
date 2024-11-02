@extends('admin.layout.gallery')
@section('content')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed sbar-open" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>


    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            {{-- page header --}}
            <div class="page-header">
                <div class="page-title d-flex justify-content-between w-100">
                    <h3> artwork ID# {{ $artwork->id }} </h3>
                    {{-- add --}}
                    <a href="{{ url('/admin/gallery') }}" type="button" class="btn btn-secondary">back
                    </a>
                </div>
            </div>
            {{-- end add --}}

            <div class="row" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing ">
                    <div class="row widget-content widget-content-area br-6 px-5">
                        <div class="col-12 col-md-8 text-bold d-flex gap-3">
                            <p class="mr-3 text-uppercase fw-bold text-primary">title:</p>
                            <p>{{ $artwork->title }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">user_id:</p>
                            <p>{{ $artwork->user_id }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">submit_date:</p>
                            <p>{{ $artwork->submit_date }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">category_id:</p>
                            <p>{{ $artwork->category_id }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">description:</p>
                            <p>{{ $artwork->description }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">price:</p>
                            <p>${{ $artwork->price }}</p>
                        </div>
                        <div class="col-12 col-md-8 text-bold d-flex">
                            <p class="mr-3 text-uppercase fw-bold text-primary">image_path:</p>
                            <p>{{ $artwork->image_path }}</p>
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