<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    protected $data = [
        'folder' => 'backend.',
        'Models' => 'App\Models\Blog',
        'route' => 'admin/blog',
        'folderBlade' => 'blog',
        'folderImage' => 'blog',
        'fileName' => 'test'
    ];

    public function index()
    {

        $data = [
            'data' => $this->data['Models']::with(['photo'])
                ->when(\request()->keyword != null, function ($query) {
                    $query->search(\request()->keyword);
                })
                ->when(\request()->status != null, function ($query) {
                    $query->whereStatus(\request()->status);
                })
                ->paginate(\request()->paginate ?? 10),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->data['folder'] . $this->data['folderBlade'] . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->data['Models']::create([
            'name' => ['ar' => $request->name , 'en' => $request->name_en],
            'slug' =>  $request->slug,
            'notes' =>['ar' => $request->notes , 'en' => $request->notes_en],
            'status' => "$request->status",
         
        ]);


        
        if ($file = $request->file('cover')) {
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;

            if ($file->move('admin/pictures/' . $this->data['folderBlade'] . '/' . $data->id, $file_to_store)) {
                Photo::create([
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }

        return redirect($this->data['route']);
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
        $data = [
            'data' => $this->data['Models']::findorfail($id),
        ];
        return view($this->data['folder'] . $this->data['folderBlade'] . '.edit',$data);
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

        $data = $this->data['Models']::findorfail($request->id);
        $data->update([
            'name' => ['ar' => $request->name , 'en' => $request->name_en],
            'notes' =>['ar' => $request->notes , 'en' => $request->notes_en],
            'status' => $request->status,
            'slug' =>  $request->slug,
         

        ]);
          // Inset One Photo

          if ($file = $request->file('cover')) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            $file_name = $file->getClientOriginalName();
            $file_name_Extension = $request->file('cover')->getClientOriginalExtension();
            $file_to_store = time() . '_' . explode('.', $file_name)[0] . '_.' . $file_name_Extension;
            if ($file->move('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id, $file_to_store)) {
                Photo::updateOrCreate([
                    'photoable_id' => $request->id,
                    'photoable_type' => $this->data['Models'],
                ], [
                    'Filename' => $file_to_store,
                    'photoable_id' => $data->id,
                    'photoable_type' => $this->data['Models'],
                ]);
            }
        }

     


        toastr()->success('Done Updated Successfully');
        return redirect($this->data['route']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request, $id)
    {
        $this->data['Models']::destroy($request->id);
        if ($request->oldfile) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->id . '/' . $request->oldfile));
            Photo::where('photoable_id', $request->id)->where('photoable_type', $this->data['Models'])->delete();
        }
        toastr()->success('Done Deleted Successfully');
        return redirect($this->data['route']);
    }

    public function blog_remove_image(Request $request)
    {
        $photo = Photo::findorfail($request->photo_id);
        if (File::exists('admin/pictures/blog/' . $request->data_id . '/' . $photo->Filename)) {
            File::delete(public_path('admin/pictures/' . $this->data['folderBlade'] . '/' . $request->data_id . '/' . $photo->Filename));
            Photo::where('photoable_id', $request->data_id)->where('photoable_type', $this->data['Models'])->delete();
        };
        return true;
    }
}
