<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agencie;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    
        $franchise =   Agencie::where('slug',preg_replace('/-/', ' ', $id))->first();
        $services = Service::with(['photo'])->Status()->inRandomOrder()->take(8)->get();
        $servics = Service::with(['photo'])->Status()->inRandomOrder()->get();
        $setting = Setting::with(['photo'])->first();
        $agencies = Agencie::with(['photos', 'bdf'])->Status()->get();
        return view('frontend.franchise.franchise', compact('franchise', 'setting', 'services', 'servics', 'agencies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
