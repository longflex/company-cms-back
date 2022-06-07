<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return redirect()->route('admin.layout.home');
        $data = GeneralInfo::get()->first();
        return view('admin.layout-general')
            ->with([
                'data' => $data
            ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $item = GeneralInfo::get()->first();

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            File::delete(public_path('images/logo') . DIRECTORY_SEPARATOR . $item->logo);
            $file_name = time() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('images/logo'), $file_name);
            $data['logo'] = $file_name;
        }

        if ($request->hasFile('home_bg') && $request->file('home_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->home_bg);
            $file_name = 'home_bg_' . time() . '.' . $request->home_bg->getClientOriginalExtension();
            $request->home_bg->move(public_path('images/bg'), $file_name);
            $data['home_bg'] = $file_name;
        }

        if ($request->hasFile('review_bg') && $request->file('review_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->review_bg);
            $file_name = 'review_bg_' . time() . '.' . $request->review_bg->getClientOriginalExtension();
            $request->review_bg->move(public_path('images/bg'), $file_name);
            $data['review_bg'] = $file_name;
        }
        
        if ($request->hasFile('client_bg') && $request->file('client_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->client_bg);
            $file_name = 'client_bg_' . time() . '.' . $request->client_bg->getClientOriginalExtension();
            $request->client_bg->move(public_path('images/bg'), $file_name);
            $data['client_bg'] = $file_name;
        }

        if ($request->hasFile('work_bg') && $request->file('work_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->work_bg);
            $file_name = 'work_bg_' . time() . '.' . $request->work_bg->getClientOriginalExtension();
            $request->work_bg->move(public_path('images/bg'), $file_name);
            $data['work_bg'] = $file_name;
        }

        if ($request->hasFile('about_bg') && $request->file('about_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->about_bg);
            $file_name = 'about_bg_' . time() . '.' . $request->about_bg->getClientOriginalExtension();
            $request->about_bg->move(public_path('images/bg'), $file_name);
            $data['about_bg'] = $file_name;
        }

        if ($request->hasFile('contact_bg') && $request->file('contact_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->contact_bg);
            $file_name = 'contact_bg_' . time() . '.' . $request->contact_bg->getClientOriginalExtension();
            $request->contact_bg->move(public_path('images/bg'), $file_name);
            $data['contact_bg'] = $file_name;
        }

        if ($request->hasFile('service_bg') && $request->file('service_bg')->isValid()) {
            File::delete(public_path('images/bg') . DIRECTORY_SEPARATOR . $item->service_bg);
            $file_name = 'service_bg_' . time() . '.' . $request->service_bg->getClientOriginalExtension();
            $request->service_bg->move(public_path('images/bg'), $file_name);
            $data['service_bg'] = $file_name;
        }

        $item->update($data);

        return redirect()->route('admin.home')
            ->with('success','Saved successfully');
    }
}
