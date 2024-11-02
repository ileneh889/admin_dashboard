<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PreList;
use App\Models\User;

class PreListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //把資料庫的資料傳給view
        $items = PreList::paginate(10);
        $pre_lists = PreList::all();
        return view('admin.table.pre_list', ['pre_lists' => $pre_lists, 'paginator' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'pre_name' => 'required|string|max:255',
            'quest_level' => 'required|string|max:255',
            'user_count' => 'required|integer',
            'ticket_price' => 'required|numeric',
            'available' => 'required|string|max:255',
            'time_start' => 'required',
            'time_end' => 'required',
            'note' => 'nullable|string',
        ]);
        PreList::create($data);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pre_name' => 'required|string|max:255',
            'quest_level' => 'required|string|max:255',
            'user_count' => 'required|integer',
            'ticket_price' => 'required|numeric',
            'available' => 'required|string|max:255',
            'time_start' => 'required',
            'time_end' => 'required',
            'note' => 'nullable|string',
        ]);
        $pre_list = PreList::findOrFail($id);
        $pre_list->update($data);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 查找
        $preList = PreList::findOrFail($id);

        $preList->delete();

        return response()->json(['message' => 'PreList deleted successfully']);
    }

    // 渲染表格內容
    public function fetchPreLists()
    {
        $preLists = PreList::all();
        return response()->json($preLists);
    }
}
