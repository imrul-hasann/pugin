<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Slider::all();
        $data = [
            'event' => $event,
            'title' => 'Events',
        ];

        return view('admin.event.index', $data);
    }

    public function getEventAjax(Request $request)
    {
        $events = Event::orderBy('id', 'ASC')->get();
        return view('admin.event.event-item', compact('events'));
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
            'title' => 'required',
        ]);

        $data = new Event();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date_time = $request->date_time;

        if ($request->file('cover')){
            $data->cover = image_upload($request->file('cover'),'uploads/events/',null);
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
        $data = Event::find($id);
        $image = $data->cover;

        try {
            if (file_exists(public_path('uploads/events/'.$image)) && $image) {
                unlink(public_path('uploads/events/'.$image));
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
