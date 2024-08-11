<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolUpcomingEvent;
use App\Http\Controllers\Controller;

class SchoolUpcomingEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all_events(Request $request)
    {
        $search = null;
        $upcoming_events = SchoolUpcomingEvent::where('delete_status', 0);
        if($request->search != null){
            $search = $request->search;
            $upcoming_events = $upcoming_events->where('event_name', 'like', '%'.$search.'%');
        }
        $upcoming_events = $upcoming_events->paginate(20);
        return view('backend.admin.events.index', compact('upcoming_events', 'search'));
    }

    public function index(Request $request)
    {
        $search = null;
        $upcoming_events = SchoolUpcomingEvent::where('end_date', '>', time())->where('delete_status', 0);
        if($request->search != null){
            $search = $request->search;
            $upcoming_events = $upcoming_events->where('event_name', 'like', '%'.$search.'%');
        }
        $upcoming_events = $upcoming_events->paginate(20);
        return view('backend.admin.events.upcoming_events.index', compact('upcoming_events', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.events.upcoming_events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'upcoming_events' => 'required',
        ]);
        $upcoming_events = new SchoolUpcomingEvent;
        $upcoming_events->event_name = $request->event_name;
        $upcoming_events->slug = str_replace(" ","-",strtolower($request->event_name));
        $upcoming_events->start_date = strtotime($request->start_date);
        $upcoming_events->end_date = strtotime($request->end_date);
        $upcoming_events->upcoming_events = $request->upcoming_events;
        $upcoming_events->images = $request->image;
        $upcoming_events->save();
        return redirect()->route('upcoming_events.index')->with('success', 'Data Saved Successfully !!');
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
        $upcoming_events = SchoolUpcomingEvent::find($id);
        return view('backend.admin.events.upcoming_events.create', compact('upcoming_events'));
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
            'upcoming_events' => 'required',
        ]);
        $upcoming_events = SchoolUpcomingEvent::find($id);
        $upcoming_events->event_name = $request->event_name;
        $upcoming_events->slug = str_replace(" ","-",strtolower($request->event_name));
        $upcoming_events->start_date = strtotime($request->start_date);
        $upcoming_events->end_date = strtotime($request->end_date);
        $upcoming_events->upcoming_events = $request->upcoming_events;
        $upcoming_events->images = $request->image;
        $upcoming_events->save();
        return redirect()->route('upcoming_events.index')->with('success', 'Data Saved Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upcoming_events = SchoolUpcomingEvent::find($id);
        $upcoming_events->delete_status = 1;
        $upcoming_events->save();
        return redirect()->route('upcoming_events.index')->with('success', 'Data Delete Successfully !!');
    }
}
