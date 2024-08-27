<?php


namespace App\Http\Controllers;

use App\Models\ug_allotments;
use Illuminate\Http\Request;

class UgAllotmentsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch distinct values for dropdowns
        $rounds = ug_allotments::select('round')->distinct()->get();
        $states = ug_allotments::select('state')->distinct()->get();
        $institutes = ug_allotments::select('institute')->distinct()->get();
        $categories = ug_allotments::select('category')->distinct()->get();

        // Uncomment to debug and check data
        // dd($rounds, $states, $institutes, $categories);

        // Create a query builder instance
        $query = ug_allotments::query();

        // Apply filters if they are present
        if ($request->filled('round')) {
            $query->where('round', $request->input('round'));
        }
        if ($request->filled('state')) {
            $query->where('state', $request->input('state'));
        }
        if ($request->filled('institute')) {
            $query->where('institute', $request->input('institute'));
        }
        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        // Get the filtered list with pagination
        $list = $query->paginate(10);

        dd($rounds, $states, $institutes, $categories, $list);

        // Pass all necessary variables to the view
        return view('ug.frontend.pages.home_table', compact('rounds', 'states', 'institutes', 'categories', 'list'));
    }

    // Other methods remain unchanged


    // Other methods remain unchanged


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
        $ug_allotments->course = $request->course;
        $ug_allotments->quota = $request->quota;
        $ug_allotments->category = $request->category;
        $ug_allotments->seats = $request->seats;
        $ug_allotments->beds = $request->beds;
        $ug_allotments->fee = $request->fee;
        $ug_allotments->session = $request->session;

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
        $ug_allotments->course = $request->course;
        $ug_allotments->quota = $request->quota;
        $ug_allotments->category = $request->category;
        $ug_allotments->seats = $request->seats;
        $ug_allotments->beds = $request->beds;
        $ug_allotments->fee = $request->fee;
        $ug_allotments->session = $request->session;
        $ug_allotments->save();

        return redirect()->route('ug_allotments.index');
    }

    public function destroy(Request $request, $id)
    {
        ug_allotments::destroy($id);
        return redirect()->route('ug_allotments.index')->with('success', 'UG Rank deleted successfully');
    }
}
