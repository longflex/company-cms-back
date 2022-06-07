<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsHomeContentController extends Controller
{

    public function index()
    {
        $data = HomeContent::first();
        return view('cms.home-content', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $data = $request->all();
        $item = HomeContent::get()->first();

        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            File::delete(public_path('images/me') . DIRECTORY_SEPARATOR . $item->main_image);
            $file_name = time() . '.' . $request->main_image->getClientOriginalExtension();
            Storage::disk('placeholders')->put($file_name, File::get($request->main_image));
            $request->main_image->move(public_path('images/me'), $file_name);
            
            $data['main_image'] = $file_name;
        }

        if ($request->hasFile('key_product_image') && $request->file('key_product_image')->isValid()) {
            File::delete(public_path('images/me') . DIRECTORY_SEPARATOR . $item->key_product_image);
            $file_name = time() . '.' . $request->key_product_image->getClientOriginalExtension();
            Storage::disk('placeholders')->put($file_name, File::get($request->key_product_image));
            $request->key_product_image->move(public_path('images/me'), $file_name);
            
            $data['key_product_image'] = $file_name;
        }

        $item->update($data);
        return redirect()->route('admin.layout.home-content')
            ->with('success','Saved successfully');
    }
}
