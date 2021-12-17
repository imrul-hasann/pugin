<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Slides',
        ];

        return view('admin.slides.index', $data);
    }

    public function getSlidesAjax(Request $request)
    {
        $slides = Slider::orderBy('id', 'ASC')->get();
        return view('admin.slides.slides-item', compact('slides'));
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
            'text' => 'required',
        ]);

        $data = new Slider();
        $data->text = $request->text;
        $data->url = $request->url;
        if ($request->file('photo_url')){
            $data->photo_url = image_upload($request->file('photo_url'),'uploads/slides/',null);
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
        $data = Slider::find($id);
        $image = $data->photo_url;

        try {
            if (file_exists(public_path('uploads/slides/'.$image)) && $image) {
                unlink(public_path('uploads/slides/'.$image));
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
