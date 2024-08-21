<?php

namespace App\Http\Controllers;

use App\Models\ug_neet_ranks;
use Illuminate\Http\Request;

class UgNeetRanksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = ug_neet_ranks::take(25)->get();

        return view('backend.admin.ug_neet_ranks.index', compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.ug_neet_ranks.create');
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

        $ug_neet_ranks = new ug_neet_ranks;
        $ug_neet_ranks->round = $request->round;
        $ug_neet_ranks->all_india_rank = $request->all_india_rank;
        $ug_neet_ranks->state_rank = $request->state_rank;
        $ug_neet_ranks->state = $request->state;
        $ug_neet_ranks->neet_score = $request->neet_score;
        $ug_neet_ranks->institute = $request->institute;
        $ug_neet_ranks->course = $request->course;
        $ug_neet_ranks->quota = $request->quota;
        $ug_neet_ranks->category = $request->category;
        $ug_neet_ranks->seats = $request->seats;
        $ug_neet_ranks->beds = $request->beds;
        $ug_neet_ranks->fee = $request->fee;
        $ug_neet_ranks->session = $request->session;
        $ug_neet_ranks->cr_2023_1 = $request->cr_2023_1;
        $ug_neet_ranks->cr_2023_2 = $request->cr_2023_2;
        $ug_neet_ranks->cr_2023_3 = $request->cr_2023_3;
        $ug_neet_ranks->cr_2023_4 = $request->cr_2023_4;
        $ug_neet_ranks->cr_2023_5 = $request->cr_2023_5;
        $ug_neet_ranks->cr_2023_6 = $request->cr_2023_6;


        $ug_neet_ranks->save();

        return redirect()->route('ug_neet_ranks.index');

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
        $edit_data = ug_neet_ranks::find($id);
        return view('backend.admin.ug_neet_ranks.edit', compact('edit_data'));
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
        $ug_neet_ranks = ug_neet_ranks::where('id', $id)->first();
        $ug_neet_ranks->round = $request->round;
        $ug_neet_ranks->all_india_rank = $request->all_india_rank;
        $ug_neet_ranks->state_rank = $request->state_rank;
        $ug_neet_ranks->neet_score = $request->neet_score;
        $ug_neet_ranks->state = $request->state;
        $ug_neet_ranks->institute = $request->institute;
        $ug_neet_ranks->course = $request->course;
        $ug_neet_ranks->quota = $request->quota;
        $ug_neet_ranks->category = $request->category;
        $ug_neet_ranks->seats = $request->seats;
        $ug_neet_ranks->beds = $request->beds;
        $ug_neet_ranks->fee = $request->fee;
        $ug_neet_ranks->session = $request->session;
        $ug_neet_ranks->cr_2023_1 = $request->cr_2023_1;
        $ug_neet_ranks->cr_2023_2 = $request->cr_2023_2;
        $ug_neet_ranks->cr_2023_3 = $request->cr_2023_3;
        $ug_neet_ranks->cr_2023_4 = $request->cr_2023_4;
        $ug_neet_ranks->cr_2023_5 = $request->cr_2023_5;
        $ug_neet_ranks->cr_2023_6 = $request->cr_2023_6;
        $ug_neet_ranks->save();

        return redirect()->route('ug_neet_ranks.index');
    }

    public function destroy(Request $request, $id)
    {
        ug_neet_ranks::destroy($id);
        return redirect()->route('ug_neet_ranks.index')->with('success', 'UG Rank deleted successfully');
    }
}
