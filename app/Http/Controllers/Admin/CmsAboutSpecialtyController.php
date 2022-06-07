<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSpecialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CmsAboutSpecialtyController extends Controller
{

    public function index()
    {
        $data = AboutSpecialty::all();
        return view('cms.about-specialty', [
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
        if ($request->hasFile('img')) {
            if ($request->file('img')->isValid()) {
                $file_name = time() . '.' . $request->img->getClientOriginalExtension();
                Storage::disk('illustrations')->put($file_name, File::get($request->img));
                $request->img->move(public_path('images/works'), $file_name);

                $data = $request->all();
                $data['img'] = $file_name;
                AboutSpecialty::create($data);

                return redirect()->route('admin.layout.about-specialty')
                    ->with('success', 'Added successfully');
            }
        }
        return redirect()->route('admin.layout.about-specialty')
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
        $specialty = AboutSpecialty::find($id);
        return response()->json([
            'data' => $specialty
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
        $specialty = AboutSpecialty::findOrFail($data['id']);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            File::delete(public_path('images/works') . DIRECTORY_SEPARATOR . $specialty->img);
            $file_name = time() . '.' . $request->img->getClientOriginalExtension();
            Storage::disk('illustrations')->put($file_name, File::get($request->img));
            $request->img->move(public_path('images/works'), $file_name);
            $data['img'] = $file_name;
        }

        $specialty->update($data);
        return redirect()->route('admin.layout.about-specialty')
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
        return AboutSpecialty::destroy($id);
    }
}
