<?php

namespace App\Http\Controllers\Api;

use App\Models\ManageContent;
use App\Models\ManageMember;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'content' => ManageContent::get()->first(),
            'members' => ManageMember::orderBy('order')->get(),
        );
        return response()->json($data);
    }
    
}
