@php
    $title = '商品一覽';
@endphp

@extends('admin.layout.shop')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <div class="page-title">
                    <h3>商品一覽</h3>
                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            @if (session()->get('success'))
                                <div class="row mt-3 ml-2">
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div><br />
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <button type="button" class="add-btn btn btn-primary mt-4 ml-4"
                                        onclick="location.href='add_product'">新增商品</button>
                                    <button type="button" class="btn btn-danger mt-4 ml-4" data-toggle="" data-target="#">
                                        大量刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area ">
                            <div class="table-responsive mb-4">
                                <table id="style-2" class="table style-3  table-hover">
                                    <colgroup>
                                        <col>
                                        <col style="width: 2%;">
                                        <col>
                                        <col>
                                        <col style="width: 25%;">
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column"> </th>
                                            <th class="text-center"> # </th>
                                            <th class="text-center">相片</th>
                                            <th class="text-center">品名</th>
                                            <th class="text-center">特色</th>
                                            <th class="text-center">類別</th>
                                            <th class="text-center">價格</th>
                                            <th class="text-center">狀態</th>
                                            <th class="text-center">剩餘數量</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr id="product-{{ $product->id }}" class="items">
                                                <td class="checkbox-column"> </td>
                                                <td class="text-center"> {{ $product->id }} </td>
                                                <td class="text-center product-pic">
                                                    <a class="profile-img" href="javascript: void(0);">
                                                        <img src="{{ asset(ADMIN_IMG) }}/shop/{{ $product->image }}"
                                                            alt="product" width="90">
                                                    </a>
                                                </td>
                                                <td class="text-center product-name"
                                                    data-name="{{ $product->product_name }}">{{ $product->product_name }}
                                                </td>
                                                <td class="product-desc" data-desc="{{ $product->product_desc }}">
                                                    {{ $product->product_desc }}</td>
                                                <td class="text-center product-type" data-type="{{ $product->category }}">
                                                    {{ $product->category }}</td>
                                                <td class="text-center product-price" data-price="${{ $product->price }}">
                                                    ${{ $product->price }}</td>
                                                <td class="text-center product-status"
                                                    data-status="{{ $product->onshelf_status }}"><span
                                                        class="shadow-none badge badge-{{ $product->onshelf_status === '上架中' ? 'primary' : 'warning' }}">{{ $product->onshelf_status }}</span>
                                                </td>
                                                <td class="text-center product-sold" data-sold="100">{{ $inventory_purchased ?? '0' }}</td>
                                                <td class="text-center action-btn">
                                                    <ul class="table-controls mb-0">
                                                        <li>
                                                            <a href="{{ route('edit', $product->id) }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-edit-2 p-1 br-6 mb-1">
                                                                    <path
                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('destroy', $product->id) }}" class="delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash p-1 br-6 mb-1">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
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
    </div>
    <!--  END CONTENT AREA  -->
@endsection
