<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agencie;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'services' => Service::with(['photo'])->Status()->inRandomOrder()->take(8)->get(),
            'servics' => Service::with(['photo'])->Status()->inRandomOrder()->get(),
            'setting' => Setting::with(['photo'])->first(),
            'agencies' => Agencie::with(['photos', 'bdf'])->Status()->get(),
            'franchise' =>   Agencie::first(),
        ];
        return view('frontend.contact.contact', $data);
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

        if ($request->contact_request == 2) {
            $contact    =   new Contact();
            $contact->name  = $request->name;
            $contact->email  = $request->email;
            $contact->phone  = $request->phone;
            $contact->service_id  = $request->service_id;
            $contact->notes  = $request->notes;
            $contact->status  = 1;
            $contact->save();
        } else {
            $contact    =   new Contact();
            $contact->name  = $request->name;
            $contact->email  = $request->email;
            $contact->phone  = $request->phone;
            $contact->service_id  = $request->service_id;
            $contact->notes  = $request->notes;
            $contact->status  = 0;
            $contact->save();
        }

        return redirect()->back()->withMessage('Successfully Send in Order', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
