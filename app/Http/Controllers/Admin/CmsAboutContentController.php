<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsAboutContentController extends Controller
{

    public function index()
    {
        $data = AboutContent::first();
        return view('cms.about-content', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $item = AboutContent::get()->first();

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            File::delete(public_path('images/me') . DIRECTORY_SEPARATOR . $item->img);
            $file_name = time() . '.' . $request->img->getClientOriginalExtension();
            Storage::disk('illustrations')->put($file_name, File::get($request->img));
            $request->img->move(public_path('images/me'), $file_name);
            
            $data['img'] = $file_name;
        }

        $item->update($data);
        return redirect()->route('admin.layout.about-content')
            ->with('success','Saved successfully');
    }
}
