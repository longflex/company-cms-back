<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ManageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsManageContentController extends Controller
{

    public function index()
    {
        $data = ManageContent::first();
        return view('cms.manage-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = ManageContent::get()->first();

        $item->update($data);
        return redirect()->route('admin.layout.manage-content')
            ->with('success','Saved successfully');
    }
}
