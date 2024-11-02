<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;



class ForumController extends Controller
{
    //管理員登入頁面顯示
    public function index()
    {
        $forums = Forum::all();
        return view('admin.forum.index', ['forums' => $forums]);
        // return $forums;
    }
}
