<?php

namespace App\Http\Controllers;

use App\Models\SchoolNotice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notices = SchoolNotice::where('delete_status', 0)->get();
        return view("backend.admin.notice.index", compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.admin.notice.create");
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
            'title' => 'required',
            'description' => 'required',
        ]);

        $notice = new SchoolNotice;
        $notice->title = $request->title;
        $notice->slug = str_replace(" ","-",strtolower($request->title));
        $notice->description = $request->description;
        $notice->save();
        return redirect()->route('notice.index')->with('success', 'Data Saved Successfully !!');
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
        $notice = SchoolNotice::find($id);
        return view("backend.admin.notice.create", compact('notice'));

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
        $notice = SchoolNotice::find($id);
        $notice->title = $request->title;
        $notice->slug = str_replace(" ","-",strtolower($request->title));
        $notice->description = $request->description;
        $notice->save();
        return redirect()->route('notice.index')->with('success', 'Data Update Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = SchoolNotice::find($id);
        $notice->delete_status = 1;
        $notice->save();
        return redirect()->route('notice.index')->with('success', 'Data Deleted Successfully !!');
    }
}
