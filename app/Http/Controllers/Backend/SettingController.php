<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    protected $data = [
        'folder' => 'backend.',
        'Models' => 'App\Models\Setting',
        'route' => 'admin/setting',
        'folderBlade' => 'setting',
        'folderImage' => 'setting',
        'fileName' => 'test'
    ];
    public function index()
    {
        $data = Setting::first();
        return view('backend.setting.setting', compact('data'));
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
        $setting = Setting::findorfail($request->id);

        $setting->name = ['ar' => $request->name, 'en' => $request->name_en];
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->notes = ['ar' => $request->notes, 'en' => $request->notes_en];
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->YouTube = $request->YouTube;
        $setting->url = $request->url;
        $setting->Fax = $request->Fax;
        $setting->save();

        // Update One Photo
        if ($file = $request->file('filename')) {
            File::delete(public_path('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('filename')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/pictures/' . $this->data['folderImage'] . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => $this->data['Models'],
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $setting->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }


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
