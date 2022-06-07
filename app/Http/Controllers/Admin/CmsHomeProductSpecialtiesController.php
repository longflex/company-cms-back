<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeProductSpecialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsHomeProductSpecialtiesController extends Controller
{
    public function index()
    {
        $data = HomeProductSpecialty::all();
        return view('cms.home-product-specialty', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $file_name = time() . '.' . $request->image->getClientOriginalExtension();
                Storage::disk('icons')->put($file_name, File::get($request->image));
                $request->image->move(public_path('images/works'), $file_name);

                $data = $request->all();
                $data['image'] = $file_name;
                HomeProductSpecialty::create($data);

                return redirect()->route('admin.layout.home-product-specialty')
                    ->with('success', 'Added successfully');
            }
        }
        return redirect()->route('admin.layout.home-product-specialty')
            ->withErrors(['msg' => 'Invalid Image']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function get($id)
    {
        $data = HomeProductSpecialty::find($id);
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $item = HomeProductSpecialty::findOrFail($data['id']);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            File::delete(public_path('images/works') . DIRECTORY_SEPARATOR . $item->image);
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('icons')->put($file_name, File::get($request->image));
            $request->image->move(public_path('images/works'), $file_name);
            $data['image'] = $file_name;
        }
        $item->update($data);

        return redirect()->route('admin.layout.home-product-specialty')
            ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HomeProductSpecialty::findOrFail($id);
        File::delete(public_path('images/works') . DIRECTORY_SEPARATOR . $item->image);
        return HomeProductSpecialty::destroy($id);
    }
}
