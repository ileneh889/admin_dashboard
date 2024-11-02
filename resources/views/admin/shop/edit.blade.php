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
                    <h3>商品編輯</h3>
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

                    <form action="{{ route('update', $products->id) }}" method="POST" id="editItemForm" class="bg-white"
                        style="border-radius: 23px;">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-4">
                                <div class="row general-info" style="background: transparent;">
                                    <div class="col-12 d-flex justify-content-center info">
                                        <div class="upload mt-4 pr-0 border-0 text-center">
                                            <input type="file" id="image" class="dropify"
                                                data-default-file="{{ asset(ADMIN_IMG) }}/shop/{{ $products->image }}"
                                                value="{{ asset(ADMIN_IMG) }}/shop/{{ $products->image }}"
                                                data-max-file-size="2M" name="image" />
                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 p-5 mr-3 d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>商品名稱</p>
                                        <input type="text" id="product_name" class="form-control"
                                            value="{{ $products->product_name }}" name="product_name">
                                    </div>

                                    <div class="col-md-6">
                                        <p>類別</p>
                                        <select class="form-control  basic select2-hidden-accessible" name="category"
                                            id="category">
                                            @foreach ($products->pluck('category')->unique() as $categories)
                                                <option {{ $categories == $products->category ? 'selected' : '' }}>
                                                    {{ $categories }}</option>
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
                                                aria-label="Amount (to the nearest dollar)" value="{{ $products->price }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p>狀態</p>
                                        <select class="selectpicker  form-control" name="onshelf_status"
                                            id="onshelf_status">
                                            <option value="上架中"
                                                {{ $products->onshelf_status == '上架中' ? 'selected' : '' }}>上架中</option>
                                            <option value="未上架"
                                                {{ $products->onshelf_status == '未上架' ? 'selected' : '' }}>未上架</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea type="text" id="product_desc" class="form-control" name="product_desc" rows="5">{{ $products->product_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end col-10 pb-5">
                            <button type="submit" class="btn btn-success px-5 pl-2 mr-3">修改</button>
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
