<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeKeyProductSpecialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CmsHomeKeyProductSpecialtiesController extends Controller
{
    public function index()
    {
        $data = HomeKeyProductSpecialty::all();
        return view('cms.home-keyproduct-specialty', [
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
        HomeKeyProductSpecialty::create($request->all());
        return redirect()->route('admin.layout.home-keyproduct-specialty')
            ->with('success', 'Added successfully');
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
        $data = HomeKeyProductSpecialty::find($id);
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
        $item = HomeKeyProductSpecialty::findOrFail($data['id']);
        $item->update($data);
        return redirect()->route('admin.layout.home-keyproduct-specialty')
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
        $item = HomeKeyProductSpecialty::findOrFail($id);
        File::delete(public_path('images/works') . DIRECTORY_SEPARATOR . $item->image);
        return HomeKeyProductSpecialty::destroy($id);
    }
}
