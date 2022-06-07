<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsArticleContentController extends Controller
{

    public function index()
    {
        $data = ArticleContent::first();
        return view('cms.article-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = ArticleContent::get()->first();

        $item->update($data);
        return redirect()->route('admin.layout.article-content')
            ->with('success','Saved successfully');
    }
}
