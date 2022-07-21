<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys   =   Gallery::get();
        return view('backend.gallery.index',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery    =   new Gallery();
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename =  $file->getClientOriginalname();
            $file->move('upload/gallery', $filename);
            $gallery->image = $filename;
        }
        $gallery->name =$request->name;
        $gallery->save();
        return redirect()->back();
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
        $gallery    =   Gallery::findorfail($id);
        return view('backend.gallery.edit',compact('gallery'));
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
        $gallery    =   Gallery::findorfail($id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename =  $file->getClientOriginalname();
            $file->move('upload/gallery', $filename);
            $gallery->image = $filename;
        }
        $gallery->name =$request->name;
        $gallery->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery    =   Gallery::findorfail($id);
        $gallery->destroy($id);
        return redirect()->back();
    }
}
