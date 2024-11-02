<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class ShopController extends Controller
{
    // 商城頁面顯示
    public function index()
    {
        return view('admin.shop.index');
    }

    //訂單一覽顯示
    public function shop_payment()
    {
        return view('admin.shop.shop_payment');
    }
    //優惠券一覽顯示
    public function shop_coupon()
    {
        return view('admin.shop.shop_coupon');
    }
    //儲值記錄顯示
    public function recharge()
    {
        return view('admin.recharge.recharge');
    }



    // --------------------- 從頭來 ---------------------
    // 資料庫連線 商品一覽
    public function shop_data(Request $request)
    {
        $products = Product::all();
        // $products = Product::orderBy('id', 'desc')->get();
        return view('admin/shop/shop_product', ['products' => $products]);
    }

    //顯示新增表單頁面
    public function add_product()
    {
        return view('admin.shop.add_product');
    }
    // 資料庫連線 新增表單中的分類及狀態內容
    public function add_data()
    {
        $products = Product::all();
        return view('admin.shop.add_product', ['products' => $products]);
    }

    // Store 將新增資料儲存至資料庫
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'category' => 'string',
            'price' => 'numeric',
            'onshelf_status' => 'string',
            'product_desc' => 'max:255',
            'image' => '',
        ]);
        $show = Product::create($validatedData);
        return redirect('/admin/shop_product')->with('success', 'Product info is successfully saved');
    }

    // Show 顯示特定資料
    public function show($id)
    {
        //
    }

    // Edit 顯示資料修改表單
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.shop.edit', compact('products'));
    }

    // Update 修改表單內容回傳資料庫
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'category' => 'string',
            'price' => 'numeric',
            'onshelf_status' => 'string',
            'product_desc' => 'max:255',
            'image' => 'required',
        ]);

        // $dataToUpdate = $validatedData;
        // unset($dataToUpdate['image']); // 從要更新的資料中移除 image 欄位

        Product::whereId($id)->update($validatedData);
        return redirect('admin/shop_product')->with('success', 'Product Data is successfully updated');
    }

    // Destroy 刪除單筆資料
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('admin/shop_product')->with('success', 'Product Case Data is successfully deleted');
    }
}
