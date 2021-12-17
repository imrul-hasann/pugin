<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\RjList;
use App\Slider;
use Illuminate\Http\Request;
use Image;

class RjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Rj List',
        ];

        return view('admin.rj.index', $data);
    }

    public function getRjAjax(Request $request)
    {
        $rj = RjList::orderBy('id', 'ASC')->get();
        return view('admin.rj.rj-item', compact('rj'));
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

        $data = new RjList();
        $data->name = $request->name;
        if ($request->file('photo')){
            $data->photo = image_upload($request->file('photo'),'uploads/rj_list/',null);
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
        $data = RjList::find($id);
        $image = $data->photo;

        try {
            if (file_exists(public_path('uploads/rj_list/'.$image)) && $image) {
                unlink(public_path('uploads/rj_list/'.$image));
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
