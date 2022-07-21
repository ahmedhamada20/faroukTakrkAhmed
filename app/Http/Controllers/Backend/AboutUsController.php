<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Photo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    protected $data = [
        'folder' => 'backend.',
        'Models' => 'App\Models\AboutUs',
        'route' => 'admin/aboutUs',
        'folderBlade' => 'aboutUs',
        'folderImage' => 'aboutUs',
        'fileName' => 'test'
    ];
    public function index()
    {
        $data = AboutUs::first();
        return view('backend.aboutUs.index', compact('data'));
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
        $AboutUs = AboutUs::findorfail($request->id);

        $AboutUs->name = ['ar' => $request->name, 'en' => $request->name_en];
        $AboutUs->notes = ['ar' => $request->notes, 'en' => $request->notes_en];
        $AboutUs->title_1 = ['ar' => $request->title_1, 'en' => $request->title_1_en];
        $AboutUs->notes_1 = ['ar' => $request->notes_1, 'en' => $request->notes_1_en];
        $AboutUs->title_2 = ['ar' => $request->title_2, 'en' => $request->title_2_en];
        $AboutUs->notes_2 = ['ar' => $request->notes_2, 'en' => $request->notes_2_en];
        $AboutUs->icon_1 =  $request->icon_1;
        $AboutUs->icon_2 =  $request->icon_2;
        $AboutUs->save();

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
                    'photoable_id' => $AboutUs->id,
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
