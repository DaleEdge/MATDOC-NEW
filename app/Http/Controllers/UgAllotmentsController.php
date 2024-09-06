<?php

namespace App\Http\Controllers;

use App\Models\ug_allotments;
use Illuminate\Http\Request;

class UgAllotmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = ug_allotments::take(10)->get();

        // Apply filters
        if ($request->has('round')) {
            $list->where('round', $request->input('round'));
        }
        if ($request->has('state')) {
            $list->where('state', 'like', '%' . $request->input('state') . '%');
        }
        if ($request->has('institute')) {
            $list->where('institute', 'like', '%' . $request->input('institute') . '%');
        }
        if ($request->has('institute_type')) {
            $list->where('institute_type', 'like', '%' . $request->input('institute_type') . '%');
        }
        if ($request->has('category')) {
            $list->where('category', $request->input('category'));
        }
        // Add more filters as needed...

        // // Pagination
        // $ug_allotments = $query->paginate(10); // 10 records per page

        return view('backend.admin.ug_allotments.index', compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.ug_allotments.create');
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
            'institute_type' => 'required',
            'course' => 'required',
            'quota' => 'required',
            'category' => 'required',
            'beds' => 'required',
        ]);

        $ug_allotments = new ug_allotments;
        $ug_allotments->round = $request->round;
        $ug_allotments->all_india_rank = $request->all_india_rank;
        $ug_allotments->state_rank = $request->state_rank;
        $ug_allotments->state = $request->state;
        $ug_allotments->neet_score = $request->neet_score;
        $ug_allotments->institute = $request->institute;
        $ug_allotments->institute_type = $request->institute_type;
        $ug_allotments->course = $request->course;
        $ug_allotments->quota = $request->quota;
        $ug_allotments->category = $request->category;
        $ug_allotments->seats = $request->seats;
        $ug_allotments->beds = $request->beds;
        $ug_allotments->fee = $request->fee;
        $ug_allotments->session = $request->session;
        $ug_allotments->cr_2023_1 = $request->cr_2023_1;
        $ug_allotments->cr_2023_2 = $request->cr_2023_2;
        $ug_allotments->cr_2023_3 = $request->cr_2023_3;
        $ug_allotments->cr_2023_4 = $request->cr_2023_4;
        $ug_allotments->cr_2023_5 = $request->cr_2023_5;
        $ug_allotments->cr_2023_6 = $request->cr_2023_6;


        $ug_allotments->save();

        return redirect()->route('ug_allotments.index');

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
        $edit_data = ug_allotments::find($id);
        return view('backend.admin.ug_allotments.edit', compact('edit_data'));
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
        $ug_allotments = ug_allotments::where('id', $id)->first();
        $ug_allotments->round = $request->round;
        $ug_allotments->all_india_rank = $request->all_india_rank;
        $ug_allotments->state_rank = $request->state_rank;
        $ug_allotments->neet_score = $request->neet_score;
        $ug_allotments->state = $request->state;
        $ug_allotments->institute = $request->institute;
        $ug_allotments->institute_type = $request->institute_type;
        $ug_allotments->course = $request->course;
        $ug_allotments->quota = $request->quota;
        $ug_allotments->category = $request->category;
        $ug_allotments->seats = $request->seats;
        $ug_allotments->beds = $request->beds;
        $ug_allotments->fee = $request->fee;
        $ug_allotments->session = $request->session;
        $ug_allotments->cr_2023_1 = $request->cr_2023_1;
        $ug_allotments->cr_2023_2 = $request->cr_2023_2;
        $ug_allotments->cr_2023_3 = $request->cr_2023_3;
        $ug_allotments->cr_2023_4 = $request->cr_2023_4;
        $ug_allotments->cr_2023_5 = $request->cr_2023_5;
        $ug_allotments->cr_2023_6 = $request->cr_2023_6;
        $ug_allotments->save();

        return redirect()->route('ug_allotments.index');
    }

    public function destroy(Request $request, $id)
    {
        ug_allotments::destroy($id);
        return redirect()->route('ug_allotments.index')->with('success', 'UG Rank deleted successfully');
    }
}
