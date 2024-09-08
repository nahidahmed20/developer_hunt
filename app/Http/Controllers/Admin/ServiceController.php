<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required|string|max:255',
            'image'             => 'required|image|max:10000',
            'short_description'  => 'required',
            'long_description' => 'required',
            'status'            => 'required',
        ]);

        Service::storeService($request);
        return redirect()->route('service')->with('success', 'Service all uploaded successfully.');
    }

    public function show()
    {
        $services = Service::all();
        return view('admin.service.show',compact('services'));
    }

    public function edit($slug)
    {
        $service = Service::where('slug',$slug)->first();
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request, $slug)
    {
        Service::updateService($request,$slug);
        return redirect()->route('service.show')->with('success', 'Service all uploaded successfully.');
    }

    public function destroy($slug)
    {
        Service::destroyService($slug);
        return redirect()->route('service.show')->with('success', 'Service all delete successfully.');
    }
}
