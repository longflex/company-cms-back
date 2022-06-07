<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSkill;
use Illuminate\Http\Request;

class CmsAboutSkillController extends Controller
{

    public function index()
    {
        $data = AboutSkill::all();
        return view('cms.about-skill', [
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
        AboutSkill::create($request->all());
        return redirect()->route('admin.layout.about-skill')
            ->with('success','Added successfully');
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
        $skill = AboutSkill::find($id);
        return response()->json([
            'data' => $skill
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
        $skill = AboutSkill::findOrFail($data['id']);
        $skill->update($data);
        return redirect()->route('admin.layout.about-skill')
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
        return AboutSkill::destroy($id);
    }
}
