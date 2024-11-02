<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //管理員登入頁面顯示
    public function index()
    {
        return view('admin.home.index');
    }
    //管理員登入頁面 2 顯示
    public function index2()
    {
        return view('admin.home.index2');
    }
}
