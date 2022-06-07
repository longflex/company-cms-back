<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class LayoutContactsController extends Controller
{

    public function index()
    {
        $data = Contact::first();
        return view('admin.layout-contacts', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        Contact::first()->update($request->all());

        return redirect()->route('admin.layout.contact')
            ->with('success','Saved successfully');
    }

}
