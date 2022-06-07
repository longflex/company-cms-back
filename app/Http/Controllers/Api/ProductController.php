<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductContent;
use App\Models\ProductProduct;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'content' => ProductContent::get()->first(),
            'products' => ProductProduct::orderBy('order')->get(),
        );
        return response()->json($data);
    }
    
}
