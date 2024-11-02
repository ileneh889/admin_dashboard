<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Member;

class AuthController extends Controller
{
    // 註冊頁面顯示
    public function index()
    {
        return view('admin.auth.register');
    }

    // 處理註冊請求
    public function register(Request $request)
    {
        // 驗證表單資料
        $validatedData = $request->validate([
            'admin_account' => 'required|string',
            'admin_password' => 'required|string',
            'admin_email' => 'required|string',
        ]);

        // 檢查資料庫中是否已存在相同的 admin_account
        $existingAdminAccount = Member::where('admin_account', $validatedData['admin_account'])->first();
        if ($existingAdminAccount) {
            // 如果存在相同的資料，返回帶有錯誤訊息的重導向響應
            return redirect()->back()->withInput()->withErrors([
                'admin_account' => '此帳號已被使用。',
            ]);
        }

        // 檢查資料庫中是否已存在相同的 admin_email
        $existingAdminEmail = Member::where('admin_email', $validatedData['admin_email'])->first();
        if ($existingAdminEmail) {
            // 如果存在相同的資料，返回帶有錯誤訊息的重導向響應
            return redirect()->back()->withInput()->withErrors([
                'admin_email' => '此Email已被使用。',
            ]);
        }

        $admin = Member::create([
            'admin_account' => $validatedData['admin_account'],
            'admin_password' => Hash::make($validatedData['admin_password']),
            'admin_name' => $validatedData['admin_account'],
            'admin_email' => $validatedData['admin_email'],
        ]);

        // 登入用戶
        Auth::login($admin);

        // 存入 Session 中
        $request->session()->put('admin_id', $admin->admin_id);
        $request->session()->put('admin_email', $admin->admin_email);
        $request->session()->put('admin_name', $admin->admin_name);

        // 註冊成功，重定向到目標頁面
        return redirect()->intended('/admin/member')->with('success', '註冊成功！歡迎使用。');
    }

    // 忘記密碼頁面
    public function pass_recovery_verify()
    {
        return view('admin.auth.pass_recovery_verify');
    }

    // 忘記密碼請求
    public function pass_recovery_quest(Request $request)
    {
        $email = $request->input('email');

        $user = Member::where('admin_email', $email)->first();

        if ($user) {
            // 如果找到了用戶，表示提交的電子郵件地址有效
            return view('admin.auth.pass_recovery')->with('user_id', $user->admin_id);
        } else {
            // 如果沒有找到用戶，則顯示錯誤消息
            return redirect()->back()->with('error', '該電子郵件地址不存在');
        }
    }

    // 修改密碼頁面
    public function pass_recovery()
    {
        return view('admin.auth.pass_recovery');
    }

    // 修改密碼請求
    public function alter_pass_quest(Request $request)
    {
        $userId = $request->input('user_id');
        $newPassword = $request->input('password');

        // 使用用戶ID在資料庫中找到相應的用戶
        $user = Member::find($userId);

        if ($user) {
            $user->admin_password = bcrypt($newPassword);
            $user->save();

            // 密碼修改成功，重定向到首頁並提供成功訊息
            return redirect('/admin/member')->with('success', '密碼修改成功');
        } else {
            // 如果沒有找到用戶，返回一個錯誤回應
            return redirect()->back()->with('error', '找不到用戶');
        }
    }

    // 管理員鎖定頁面顯示
    public function lockscreen()
    {
        return view('admin.auth.lockscreen');
    }

    // 管理員鎖定頁面顯示盒子
    public function lockscreen_boxed()
    {
        return view('admin.auth.lockscreen_boxed');
    }

    // 管理員忘記密碼盒子
    public function pass_recovery_boxed()
    {
        return view('admin.auth.pass_recovery_boxed');
    }

    // 管理員註冊頁面盒子
    public function register_boxed()
    {
        return view('admin.auth.register_boxed');
    }
}
