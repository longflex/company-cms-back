<?php

namespace App\Http\Controllers\Api;

use App\Models\HomeContent;
use App\Models\HomeKeyProductSpecialty;
use App\Models\HomeProduct;
use App\Models\AboutSkill;
use App\Models\AboutContent;
use App\Models\AboutSpecialty;
use App\Models\HomeProductSpecialty;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'main_data' => HomeContent::get()->first(),
            'about_skill' => AboutSkill::orderBy('order')->get(),
            'about_content' => AboutContent::get()->first(),
            'about_specialty' => AboutSpecialty::orderBy('order')->get(),
            'key_specialty' => HomeKeyProductSpecialty::orderBy('order')->get(),
            'products' => HomeProduct::orderBy('order')->get(),
            'product_specialty' => HomeProductSpecialty::orderBy('order')->get(),
        );
        return response()->json($data);
    }
    
}
