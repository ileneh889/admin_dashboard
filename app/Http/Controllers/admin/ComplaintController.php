<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    //管理員登入頁面顯示
    public function index()
    {
        return view('admin.complaint.index');
    }
}
