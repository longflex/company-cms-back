<?php

namespace App\Http\Controllers\Api;

use App\Models\ContactContent;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'content' => ContactContent::get()->first(),
        );
        return response()->json($data);
    }
    
}
