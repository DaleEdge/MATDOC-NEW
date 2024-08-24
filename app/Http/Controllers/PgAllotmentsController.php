<?php

namespace App\Http\Controllers;

use App\Models\pg_allotments;
use Illuminate\Http\Request;

class PgAllotmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = pg_allotments::take(25)->get();

        return view('backend.admin.pg_allotments.index', compact('list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.pg_allotments.create');
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
            'course_type' => 'required',
            'quota' => 'required',
            'category' => 'required',
            'degree' => 'required',
            'beds' => 'required',
        ]);

        $pg_allotments = new pg_allotments;
        $pg_allotments->round = $request->round;
        $pg_allotments->all_india_rank = $request->all_india_rank;
        $pg_allotments->state_rank = $request->state_rank;
        $pg_allotments->state = $request->state;
        $pg_allotments->neet_score = $request->neet_score;
        $pg_allotments->institute = $request->institute;
        $pg_allotments->institute_type = $request->institute_type;
        $pg_allotments->course = $request->course;
        $pg_allotments->course_type = $request->course_type;
        $pg_allotments->quota = $request->quota;
        $pg_allotments->category = $request->category;
        $pg_allotments->degree = $request->degree;
        $pg_allotments->seats = $request->seats;
        $pg_allotments->beds = $request->beds;
        $pg_allotments->fee = $request->fee;
        $pg_allotments->stipend_1_year = $request->stipend_1_year;
        $pg_allotments->bonus_years = $request->bonus_years;
        $pg_allotments->bonus_penality = $request->bonus_penality;
        $pg_allotments->session = $request->session;
        $pg_allotments->cr_2023_1 = $request->cr_2023_1;
        $pg_allotments->cr_2023_2 = $request->cr_2023_2;
        $pg_allotments->cr_2023_3 = $request->cr_2023_3;
        $pg_allotments->cr_2023_4 = $request->cr_2023_4;
        $pg_allotments->cr_2023_5 = $request->cr_2023_5;
        $pg_allotments->cr_2023_6 = $request->cr_2023_6;


        $pg_allotments->save();

        return redirect()->route('pg_allotments.index');

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
        $edit_data = pg_allotments::find($id);
        return view('backend.admin.pg_allotments.edit', compact('edit_data'));
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
        $pg_allotments = pg_allotments::where('id', $id)->first();
        $pg_allotments->round = $request->round;
        $pg_allotments->all_india_rank = $request->all_india_rank;
        $pg_allotments->state_rank = $request->state_rank;
        $pg_allotments->neet_score = $request->neet_score;
        $pg_allotments->state = $request->state;
        $pg_allotments->institute_type = $request->institute_type;
        $pg_allotments->course = $request->course;
        $pg_allotments->course_type = $request->course_type;
        $pg_allotments->quota = $request->quota;
        $pg_allotments->category = $request->category;
        $pg_allotments->degree = $request->degree;
        $pg_allotments->seats = $request->seats;
        $pg_allotments->beds = $request->beds;
        $pg_allotments->fee = $request->fee;
        $pg_allotments->stipend_1_year = $request->stipend_1_year;
        $pg_allotments->bonus_years = $request->bonus_years;
        $pg_allotments->bonus_penality = $request->bonus_penality;
        $pg_allotments->session = $request->session;
        $pg_allotments->cr_2023_1 = $request->cr_2023_1;
        $pg_allotments->cr_2023_2 = $request->cr_2023_2;
        $pg_allotments->cr_2023_3 = $request->cr_2023_3;
        $pg_allotments->cr_2023_4 = $request->cr_2023_4;
        $pg_allotments->cr_2023_5 = $request->cr_2023_5;
        $pg_allotments->cr_2023_6 = $request->cr_2023_6;
        $pg_allotments->save();

        return redirect()->route('pg_allotments.index');
    }

    public function destroy(Request $request, $id)
    {
        pg_allotments::destroy($id);
        return redirect()->route('pg_allotments.index')->with('success', 'PG Rank deleted successfully');
    }
}
