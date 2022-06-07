<?php

namespace App\Http\Controllers\Api;

use App\Models\FooterContent;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class FootController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'footer_content' => FooterContent::get()->first(),
            'contact' => Contact::get()->first(),
        );
        return response()->json($data);
    }
    
}
