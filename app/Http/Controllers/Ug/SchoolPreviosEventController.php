<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolPreviousEvent;
use App\Models\SchoolUpcomingEvent;
use App\Http\Controllers\Controller;

class SchoolPreviosEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = null;
        $previous_events = SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0);
        if($request->search != null){
            $search = $request->search;
            $previous_events = $previous_events->where('event_name', 'like', '%'.$search.'%');
        }
        $previous_events = $previous_events->paginate(20);
        return view('backend.admin.events.previous_events.index', compact('previous_events', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.events.previous_events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return date('d-m-Y', strtotime($request->start_date));

        $request->validate([
            'event_name' => 'required',
            'previous_events' => 'required',
        ]);
        $previous_events = new SchoolPreviousEvent;
        $previous_events->event_name = $request->event_name;
        $previous_events->start_date = strtotime($request->start_date);
        $previous_events->end_date = strtotime($request->end_date);
        $previous_events->previos_events = $request->previous_events;
        $previous_events->images = $request->image;
        $previous_events->save();
        return redirect()->route('school_previous_events.index')->with('success', 'Data Saved Successfully !!');
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
        $previous_events = SchoolPreviousEvent::find($id);
        return view('backend.admin.events.previous_events.create', compact('previous_events'));
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
        $request->validate([
            'previous_events' => 'required',
        ]);
        $previous_events = SchoolPreviousEvent::find($id);
        $previous_events->event_name = $request->event_name;
        $previous_events->start_date = strtotime($request->start_date);
        $previous_events->end_date = strtotime($request->end_date);
        $previous_events->previos_events = $request->previous_events;
        $previous_events->images = $request->image;
        $previous_events->save();
        return redirect()->route('school_previous_events.index')->with('success', 'Data Update Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $previous_events = SchoolPreviousEvent::find($id);
        $previous_events->delete_status = 1;
        $previous_events->save();
        return redirect()->route('school_previous_events.index')->with('success', 'Data Delete Successfully !!');
    }
}
