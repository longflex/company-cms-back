<?php

namespace App\Http\Controllers\Api;

use App\Models\ReviewContent;
use App\Models\ReviewCustomer;
use App\Models\ReviewReview;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(
            'content' => ReviewContent::get()->first(),
            'customers' => ReviewCustomer::orderBy('order')->get(),
            'reviews' => ReviewReview::orderBy('order')->get(),
        );
        return response()->json($data);
    }
    
}
