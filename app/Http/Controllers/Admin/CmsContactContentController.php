<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactContent;
use Illuminate\Http\Request;

class CmsContactContentController extends Controller
{

    public function index()
    {
        $data = ContactContent::first();
        return view('cms.contact-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = ContactContent::get()->first();

        $item->update($data);
        return redirect()->route('admin.layout.contact-content')
            ->with('success','Saved successfully');
    }
}
