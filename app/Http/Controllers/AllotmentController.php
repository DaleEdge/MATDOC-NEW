<?php

namespace App\Http\Controllers;

use App\Models\allotment;
use Illuminate\Http\Request;

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
            'neet_score' => 'required',
            'state' => 'required',
            'institute' => 'required',
            'course' => 'required',
            'quota' => 'required',
            'category' => 'required',
            'beds' => 'required',
        ]);

        $allotment = new allotment;
        $allotment->round = $request->round;
        $allotment->all_india_rank = $request->all_india_rank;
        $allotment->state_rank = $request->state_rank;
        $allotment->state = $request->state;
        $allotment->neet_score = $request->neet_score;
        $allotment->institute = $request->institute;
        $allotment->course = $request->course;
        $allotment->quota = $request->quota;
        $allotment->category = $request->category;
        $allotment->beds = $request->beds;
        $allotment->fee = $request->fee;


        $allotment->save();

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
        $allotment->all_india_rank = $request->all_india_rank;
        $allotment->state_rank = $request->state_rank;
        $allotment->neet_score = $request->neet_score;
        $allotment->state = $request->state;
        $allotment->institute = $request->institute;
        $allotment->course = $request->course;
        $allotment->quota = $request->quota;
        $allotment->category = $request->category;
        $allotment->beds = $request->beds;
        $allotment->fee = $request->fee;
        $allotment->save();

        return redirect()->route('allotment.index');
    }

    public function destroy(Request $request, $id)
    {
        allotment::destroy($id);
        return redirect()->route('allotment.index')->with('success', 'Allotment deleted successfully');
    }
}
