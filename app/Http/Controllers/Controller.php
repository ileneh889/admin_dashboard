<?php

namespace App\Http\Controllers;

abstract class Controller
{
  //管理員登入頁面顯示
  public function index()
  {
      return view('admin.home.index');
  }
}
