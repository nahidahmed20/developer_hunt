<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Admin\Service;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        $services = Service::paginate(6);
        return view('website.home.index',compact('services'));
    }

    public function about()
    {
        return view('website.home.about');
    }

    public function services()
    {
        return view('website.home.service');
    }

    public function blog()
    {
        return view('website.home.blog');
    }

    public function contact()
    {
        return view('website.home.contact');
    }
}
