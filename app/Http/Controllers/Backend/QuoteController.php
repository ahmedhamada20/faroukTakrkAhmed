<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QuoteController extends Controller
{
    protected $data = [
        'folder' => 'backend.',
        'Models' => 'App\Models\Quote',
        'route' => 'admin/quote',
        'folderBlade' => 'quote',
        'folderImage' => 'quote',
        'fileName' => 'test'
    ];
    public function index()
    {
        $data = Quote::first();
        return view('backend.quote.index', compact('data'));
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
        $Quote = Quote::findorfail($request->id);

        $Quote->name = ['ar' => $request->name, 'en' => $request->name_en];
        $Quote->notes = ['ar' => $request->notes, 'en' => $request->notes_en];
        $Quote->title_1 = ['ar' => $request->title_1, 'en' => $request->title_1_en];
        $Quote->icon_1 =  $request->icon_1;
        $Quote->number =  $request->number;
        $Quote->save();



        toastr()->success('Done Updated Successfully');
        return redirect()->back();

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
