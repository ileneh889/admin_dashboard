<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //artwork list
    public function index()
    {
        $artworks = Artwork::get();

        return view('admin.gallery.index', ['artworks' => $artworks]);
    }

    //create new artwork
    public function create()
    {
        return view('admin.gallery.artwork_create');
    }


    //////create artwork -> form's POST request handling
    //all input values store in $request
    public function store(Request $request)
    {
        //資料驗證：validating incoming POST request data from form
        $request->validate([
            // 'artwork_id' => 'required|unique:artworks|integer',
            'title' => 'required|max:100',
            'user_id' => 'required|integer',
            'submit_date' => 'required|string',
            'category_id' => 'required|integer',
            'description' => 'max:500',
            'price' => 'required|integer',
            'image_path' => 'required|max:500',
        ]);

        // table資料生成：create a new record in the artworks_table
        Artwork::create([
            // 'artwork_id' => 'required|unique:artworks|integer',
            'title' => $request->title,
            'user_id' => $request->user_id,
            'submit_date' => $request->submit_date,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $request->image_path,
        ]);


        //返回create頁面+顯示成功
        return redirect('/admin/gallery/index/create')->with('status', 'artwork created');
    }



    //編輯內頁
    public function edit(int $id)
    {
        // $artwork = Artwork::where('id', '=', $id)->get();  /////////////////////////////////
        $artwork = Artwork::findOrFail($id);
        return view('admin.gallery.artwork_edit', compact('artwork'));
        // return $artwork;
    }


    //編輯動作
    public function update(Request $request, int $id)
    {
        //資料驗證：validating incoming POST request data from form
        $request->validate([
            // 'artwork_id' => 'required|unique:artworks|integer',
            'title' => 'required|max:100',
            'user_id' => 'required|integer',
            'submit_date' => 'required|string',
            'category_id' => 'required|integer',
            'description' => 'max:500',
            'price' => 'required|integer',
            'image_path' => 'string|max:500',
        ]);

        // table資料編輯：create a new record in the artworks_table
        Artwork::findOrFail($id)->update([
            // 'artwork_id' => 'required|unique:artworks|integer',
            'title' => $request->title,
            'user_id' => $request->user_id,
            'submit_date' => $request->submit_date,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $request->image_path,
        ]);


        //返回create頁面+顯示成功
        return redirect()->back()->with('status', 'artwork update');
    }

    //資料刪除
    public function destroy(int $id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->delete();
        return redirect()->back()->with('status', 'artwork ID# ' . $id . ' deleted successfully.');
    }

    //資料查閱
    public function view(int $id)
    {
        $artwork = Artwork::findOrFail($id);
        return view('admin.gallery.view', ['artwork' => $artwork]);
    }

    //訂單頁面
    public function order()
    {
        return view('admin.gallery.order');
    }

    //評論頁面
    public function comment()
    {
        return view('admin.gallery.comment');
    }
}
