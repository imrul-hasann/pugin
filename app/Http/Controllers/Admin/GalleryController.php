<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\RjList;
use App\Slider;
use Illuminate\Http\Request;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Gallery',
        ];

        return view('admin.gallery.index', $data);
    }

    public function getGalleryAjax(Request $request)
    {
        $gallery = Gallery::orderBy('id', 'ASC')->get();
        return view('admin.gallery.gallery-item', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $data = new Gallery();
        $data->name = $request->name;
        if ($request->file('url')){
            $data->url = image_upload($request->file('url'),'uploads/gallery/',null);
        }
        $data->save();
        return response()->json([
            'success' => true,
            'message' => 'Created successfully Done!'
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $image = $data->url;

        try {
            if (file_exists(public_path('uploads/gallery/'.$image)) && $image) {
                unlink(public_path('uploads/gallery/'.$image));
            }
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Deleted successfully!'
            ], 200);

        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to delete this Image!'
            ], 200);
        }
    }
}
