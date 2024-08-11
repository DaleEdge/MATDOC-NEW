<?php

namespace App\Http\Controllers;

use App\Models\StateDocument;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StateDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state_docs = StateDocument::where('delete_status', 0)->get();
        return view("backend.admin.state_document.index", compact('state_docs',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.admin.state_document.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state_document = new StateDocument;
        $state_document->state_name = $request->state_name;
        $state_document->state_desc = $request->state_desc;
        $state_document->save();
        return redirect()->route('state_document.index')->with('success', 'Data Saved Successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StateDocument  $stateDocument
     * @return \Illuminate\Http\Response
     */
    public function show(StateDocument $stateDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StateDocument  $stateDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(StateDocument $stateDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StateDocument  $stateDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StateDocument $stateDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StateDocument  $stateDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state_document = StateDocument::find($id);
        $state_document->delete_status = 1;
        $state_document->save();
        return redirect()->route('state_document.index')->with('success', 'Data Deleted Successfully !!');
    }
}
