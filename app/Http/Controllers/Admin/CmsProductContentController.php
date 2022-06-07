<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsProductContentController extends Controller
{

    public function index()
    {
        $data = ProductContent::first();
        return view('cms.product-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = ProductContent::get()->first();

        $item->update($data);
        return redirect()->route('admin.layout.product-content')
            ->with('success','Saved successfully');
    }
}
