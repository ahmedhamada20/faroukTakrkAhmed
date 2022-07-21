<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agencie;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'blogs' => Blog::with(['photo'])->Status()->inRandomOrder()->get(),
            'setting' => Setting::with(['photo'])->first(),
            'agencies' => Agencie::with(['photos', 'bdf'])->Status()->get(),
            'franchise' => Agencie::first(),
            'services' => Service::with(['photo'])->Status()->inRandomOrder()->take(8)->get(),
            'servics' => Service::with(['photo'])->Status()->inRandomOrder()->get(),
        ];
        return view('frontend.blog.index', $data);
    }

    public function show($id, Request $request)
    {
        $data = [
            'data' => Blog::where('slug',preg_replace('/-/', ' ', $id))->first(),
            'setting' => Setting::with(['photo'])->first(),
            'agencies' => Agencie::with(['photos', 'bdf'])->Status()->get(),
            'franchise' => Agencie::first(),
            'services' => Service::with(['photo'])->Status()->inRandomOrder()->take(8)->get(),
            'servics' => Service::with(['photo'])->Status()->inRandomOrder()->get()
        ];



        return view('frontend.blog.show', $data);
    }
}
