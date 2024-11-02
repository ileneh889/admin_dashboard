@php
    $title = '新增商品';
@endphp

@extends('admin.layout.shop')
@section('content')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>商品新增</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger mt-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif

                    <form action="{{ route('store') }}" method="POST" id="addItemForm" class="bg-white"
                        style="border-radius: 23px;">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="row general-info" style="background: transparent;">
                                    <div class="col-12 d-flex justify-content-center info">
                                        <div class="upload mt-4 pr-0 border-0 text-center">
                                            <input type="file" id="image" class="dropify"
                                                data-default-file="{{ asset(ADMIN_IMG) }}/300x300.jpg" value=""
                                                data-max-file-size="2M" name="image" />
                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 p-5 mr-3 d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>商品名稱</p>
                                        <input type="text" id="product_name" class="form-control" value=""
                                            name="product_name">
                                    </div>

                                    <div class="col-md-6">
                                        <p>類別</p>
                                        <select class="form-control  basic select2-hidden-accessible" name="category"
                                            id="category">
                                            <option value="">類別</option>
                                            @foreach ($products->unique('category') as $product)
                                                <option>{{ $product->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p>售價</p>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input id="price" name="price" type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" value="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p>狀態</p>
                                        <select class="selectpicker  form-control" name="onshelf_status"
                                            id="onshelf_status">
                                            <option>狀態</option>
                                            <option>上架中</option>
                                            <option>未上架</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea type="text" id="product_desc" class="form-control" name="product_desc" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end col-10 pb-5">
                            <button type="submit" class="btn btn-primary px-5 pl-2 mr-3">新增</button>
                            <button type="button" class="btn px-5 pl-2"
                                onclick="window.location.href='{{ route('shop_data')}}';">取消</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->

@endsection
