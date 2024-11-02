<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AppsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\ForumController;
use App\Http\Controllers\Admin\PreListController;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/fetch_pre_lists', [PreListController::class, 'fetchPreLists']);
    Route::resource('/pre_list', PreListController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/fetch_pre_lists', [PreListController::class, 'fetchPreLists']);
    Route::resource('/pre_list', PreListController::class);
    //////////////////藝術走廊/////////////////////
    // 作品列表頁面
    // Route::get('/gallery/index', [GalleryController::class, 'index']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    // 資料輸入頁面
    Route::get('/gallery/index/create', [GalleryController::class, 'create']);
    // 輸入驗證與生成
    Route::post('/gallery/index/create', [GalleryController::class, 'store']);
    // 作品內頁編輯
    Route::get('/gallery/index/{id}/edit', [GalleryController::class, 'edit']);
    // 資料編輯後的驗證與生成
    Route::put('/gallery/index/{id}/edit', [GalleryController::class, 'update']);
    // 資料刪除
    Route::get('/gallery/index/{id}/delete', [GalleryController::class, 'destroy']);
    // 詳細資料查閱
    Route::get('/gallery/index/{id}/view', [GalleryController::class, 'view']);
    Route::get('/forum', [ForumController::class, 'index']);
    /////////////////藝術走廊結束////////////////////
    // 管理員登入頁面
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    // 管理員登入行為
    Route::post('/login', [LoginController::class, 'login']);

    // 管理員登出行為
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // 管理員註冊頁面
    Route::get('/register', [AuthController::class, 'index'])->name('register');

    // 管理員註冊行為
    Route::post('/register', [AuthController::class, 'register']);

    // 後台首頁
    Route::get('/home', [HomeController::class, 'index']);
    // 必須登入才能通過的頁面
    // Route::group(['middleware' => 'auth:admin'], function () {
    //     // 後台首頁
    //     Route::post('/home', [HomeController::class, 'index']);
    // });

    // 後台首頁
    Route::get('/index2', [HomeController::class, 'index2'])->name('index2');

    // 會員系統首頁
    // Route::get('/member', [MemberController::class, 'index']);

    // 員工列表
    Route::get('/member', [MemberController::class, 'admin_list'])->name('admin_list');

    // 刪除員工資料行為
    Route::get('/admin_list/delete', [MemberController::class, 'deleteMember']);

    // 管理員鎖定頁面顯示
    Route::get('/lockscreen', [AuthController::class, 'lockscreen'])->name('lockscreen');

    // 管理員鎖定頁面盒子
    Route::get('/lockscreen_boxed', [AuthController::class, 'lockscreen_boxed'])->name('lockscreen_boxed');

    // 管理員登入頁面盒子
    Route::get('/login_boxed', [LoginController::class, 'login_boxed'])->name('login_boxed');

    // 管理員忘記密碼頁面
    Route::get('/pass_recovery_verify', [AuthController::class, 'pass_recovery_verify'])->name('pass_recovery_verify');

    // 忘記密碼請求
    Route::post('/pass_recovery_quest', [AuthController::class, 'pass_recovery_quest'])->name('pass_recovery_quest');

    // 修改密碼請求
    Route::post('/alter_pass_quest', [AuthController::class, 'alter_pass_quest'])->name('alter_pass_quest');

    // 管理員忘記密碼盒子
    Route::get('/pass_recovery_boxed', [AuthController::class, 'pass_recovery_boxed'])->name('pass_recovery_boxed');

    // 管理員註冊頁面盒子
    Route::get('/register_boxed', [AuthController::class, 'register_boxed'])->name('register_boxed');

    // 商城後台首頁
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    // 訂單資訊一覽
    Route::get('/shop_payment', [ShopController::class, 'shop_payment'])->name('shop_payment');

    // 優惠券管理頁面
    Route::get('/shop_coupon', [ShopController::class, 'shop_coupon'])->name('shop_coupon');

    Route::get('/recharge', [ShopController::class, 'recharge'])->name('recharge');

    //shop_product 資料清單
    Route::get('/shop_product', [ShopController::class, 'shop_data'])->name('shop_data');

    // Create 新增資料
    Route::get('/add_product', [ShopController::class, 'add_data']);

    // Store 將新增資料儲存至資料庫
    Route::post('/store', [ShopController::class, 'store'])->name('store');
    Route::get('/store', [ShopController::class, 'store']);

    // Show 顯示特定資料
    Route::get('/show', [ShopController::class, 'show']);

    // Edit 顯示資料修改表單
    Route::get('/edit/{id}', [ShopController::class, 'edit'])->name('edit');

    // Update 修改表單內容回傳資料庫
    Route::patch('/update{id}', [ShopController::class, 'update'])->name('update');

    // Destroy 刪除單筆資料
    Route::get('destroy/{id}', [ShopController::class, 'destroy'])->name('destroy');
    // Route::delete('destroy/{id}', 'ShopController@destroy')->name('destroy');

    // edit 下層
    Route::redirect('/admin/edit/shop_product', '/admin/shop_product');
    Route::get('/admin/edit/shop_product', function () {
        Route::get('/admin/edit/shop_product', function () {
            return redirect('/admin/shop_product');
        });
        Route::get('/forum', [ForumController::class, 'index']);
    });
});
