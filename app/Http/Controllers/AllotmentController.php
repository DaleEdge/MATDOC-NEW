<?php

namespace App\Http\Controllers;

use App\Models\allotment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Facades\Excel;

class AllotmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = allotment::take(25)->get();

        return view('backend.admin.allotment.index', compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.allotment.create');
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
            'round' => 'required',
            'state_rank' => 'required',
            'state' => 'required',
            'institute' => 'required',
            'course' => 'required',
            'quota' => 'required',
        ]);

        $course = new allotment;
        $course->round = $request->round;
        $course->state_rank = $request->state_rank;
        $course->state = $request->state;
        $course->institute = $request->institute;
        $course->course = $request->course;
        $course->quota = $request->quota;


        $course->save();

        return redirect()->route('allotment.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_data = allotment::find($id);
        return view('backend.admin.allotment.edit', compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $allotment = allotment::where('id', $id)->first();
        $allotment->round = $request->round;
        $allotment->state_rank = $request->state_rank;
        $allotment->state = $request->state;
        $allotment->institute = $request->institute;
        $allotment->course = $request->course;
        $allotment->quota = $request->quota;
        $allotment->save();

        return redirect()->route('allotment.index');
    }

    public function destroy(Request $request, $id)
    {
        allotment::destroy($id);
        return redirect()->route('allotment.index')->with('success', 'Allotment deleted successfully');
    }
}
