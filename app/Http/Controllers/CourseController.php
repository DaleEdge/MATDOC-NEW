<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list= Course::orderBy('id','DESC');
       
        $list=$list->paginate(25);
        return view('backend.admin.course.index',compact('list'));
    }

   
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.course.create');
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
            'name' => 'required|unique:courses,name',
            'course_level'=>'required',
            'mode_of_study'=>'required',
            'course_type'=>'required',
            'language'=>'required',
            'year'=>'required',
            'semeter'=>'required',
        ]);

        $course = new Course;
        $course->name=$request->name;
        $course->course_level=$request->course_level;
        $course->mode_of_study=$request->mode_of_study;
        $course->course_type=$request->course_type;
        $course->language=$request->language;
        $course->year=$request->year;
        $course->semeter=$request->semeter;
        $course->course_details=$request->course_details;
        $course->save();

        return redirect()->route('course.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_data= Course::find($id);
        return view('backend.admin.course.edit',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|unique:courses,name,'.$id,
            'course_level'=>'required',
            'mode_of_study'=>'required',
            'course_type'=>'required',
            'language'=>'required',
            'year'=>'required',
            'semeter'=>'required',
        ]);

        $course = Course::find($id);
        $course->name=$request->name;
        $course->course_level=$request->course_level;
        $course->mode_of_study=$request->mode_of_study;
        $course->course_type=$request->course_type;
        $course->language=$request->language;
        $course->year=$request->year;
        $course->semeter=$request->semeter;
        $course->course_details=$request->course_details;
        $course->save();

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
