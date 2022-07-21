<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Agencie;
use App\Models\Member;
use App\Models\OurClient;
use App\Models\OutFeatures;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Silder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'sliders' => Silder::with(['photo'])->Status()->get(),
            'aboutUs' => AboutUs::with(['photo'])->first(),
            'services' => Service::with(['photo'])->Status()->inRandomOrder()->take(8)->get(),
            'servics' => Service::with(['photo'])->Status()->inRandomOrder()->get(),
            'Features' => OutFeatures::with(['photo'])->first(),
            'quote' => Quote::first(),
            'members' => Member::with(['photo'])->Status()->inRandomOrder()->take(4)->get(),
            'qurClients' => OurClient::with(['photo'])->Status()->inRandomOrder()->take(8)->get(),
            'setting' => Setting::with(['photo'])->first(),
            'agencies' => Agencie::with(['photos', 'bdf'])->Status()->get(),
            'franchise'=>   Agencie::first(),
        ];
        return view('frontend.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
