<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use PHPUnit\Metadata\Uses;

class MemberController extends Controller
{
    // 管理員登入頁面顯示
    public function index()
    {
        // 檢查 Session 中是否已經有資料
        if (!$this->checkSession()) {
            return redirect('/admin/login');
        }

        return view('admin.member.index');
    }
    // 員工列表頁面顯示
    public function admin_list()
    {
        // 檢查 Session 中是否已經有資料
        if (!$this->checkSession()) {
            return redirect('/admin/login');
        }

        $admins = Member::select('admin_id', 'admin_name', 'admin_email', 'last_login_time')->get();
        return view('admin.member.admin_list')->with('admins', $admins);
    }

    public function deleteMember(Request $request)
    {
        $adminId = $request->query('admin_id');

        // 確認是否找到對應的會員
        $admin = Member::find($adminId);

        if (!$admin) {
            return redirect()->back()->with('error', '無法找到該會員');
        }

        // 執行刪除操作
        $admin->delete();

        return redirect()->back()->with('success', '成功刪除會員資料');
    }

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
