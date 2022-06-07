<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterContent;
use Illuminate\Http\Request;

class CmsFooterContentController extends Controller
{

    public function index()
    {
        $data = FooterContent::first();
        return view('cms.footer-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = FooterContent::get()->first();

        $item->update($data);
        return redirect()->route('admin.layout.footer-content')
            ->with('success','Saved successfully');
    }
}
