<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Carbon\Carbon;

class LoginController extends Controller
{
    // 登入頁面顯示
    public function index()
    {
        // 檢查 Session 中是否已經有資料
        if ($this->checkSession()) {
            return redirect('/admin/member');       // Session有資料代表有登入過
        }

        return view('admin.login.index');
    }

    // 登入行為
    public function login(Request $request)
    {
        // 檢查是否已經登入
        if (Auth::check()) {
            return redirect('/admin/member');
        }

        // 接收post資料
        $credentials = $request->only('admin_account', 'admin_password');

        $admin = Member::where('admin_account', $credentials['admin_account'])->first();

        if ($admin && Hash::check($credentials['admin_password'], $admin->admin_password)) {
            // 通過驗證，更新最後登入時間
            $admin->last_login_time = Carbon::now()->setTimezone('Asia/Taipei');
            $admin->save();

            // 通過驗證，進行登入操作
            Auth::login($admin);

            // 存入 Session 中
            $request->session()->put('admin_id', $admin->admin_id);
            $request->session()->put('admin_email', $admin->admin_email);
            $request->session()->put('admin_name', $admin->admin_name);

            // 成功登入跳轉到member首頁
            return redirect()->intended('/admin/member');
        } else {
            // 驗證失敗，返回登入頁面並提供錯誤消息
            return redirect()->route('login')->with('error', '帳號或密碼錯誤');
        }
    }

    // 登出行為
    public function logout(Request $request)
    {
        auth()->logout(); // 登出用戶
        $request->session()->flush(); // 清除所有 Session 資料
        return redirect('/admin/login');
    }

    // 管理員登入頁面盒子
    // public function login_boxed()
    // {
    //     return view('admin.login.login_boxed');
    // }

    public function checkSession()
    {
        // 檢查 Session 中是否已經有資料
        if (session()->has('admin_id') && session()->has('admin_email') && session()->has('admin_name')) {
            return true;
        } else {
            return false;
        }
    }
}
