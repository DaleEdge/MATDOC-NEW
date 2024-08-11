<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Collage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CollageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list= Collage::orderBy('id','DESC');
       
        $list=$list->paginate(25);
        return view('backend.admin.collage.index',compact('list'));
    }

   
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.collage.create');
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
            'name' => 'required',
        ]);

        $course = new Collage;
        $course->name=$request->name;
        $course->course_id=$request->course;
        $course->category=$request->category;
        $course->type=$request->type;
        $course->stream=$request->stream;
        $course->pincode=$request->pincode;
        $course->state=$request->state;
        $course->city=$request->city;
        $course->address=$request->address;


        if (!empty($request->cover_image)) {
            $file = $request->file('cover_image');
            $image = time() . "-" . rand(1, 100) . "." . $file->getClientOriginalExtension();
            $file->move(public_path('backend/collage/'), $image);
            $course->cover_image=$image;
        }


        if (!empty($request->thumbnail)) {
            $file = $request->file('thumbnail');
            $image = time() . "-" . rand(1, 100) . "." . $file->getClientOriginalExtension();
            $file->move(public_path('backend/collage/'), $image);
            $course->thumbnail=$image;
        }

        $course->collage_description=$request->collage_description;
        $course->course_fees=$request->course_fees;
        $course->cut_off=$request->cut_off;
        $course->placement=$request->placement;
        $course->reviews=$request->reviews;
        $course->facilities=$request->facilities;
        $course->question_answer=$request->question_answer;
        $course->notable_alumni=$request->notable_alumni;
        $course->collage_department=$request->collage_department;
        $course->admission=$request->admission;

        $course->meta_title=$request->meta_title;
        $course->meta_description=$request->meta_description;
        $course->save();

        return redirect()->route('collage.index');

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
        $edit_data= Collage::find($id);
        return view('backend.admin.collage.edit',compact('edit_data'));
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
            'name' => 'required',
        ]);

        $course = Collage::find($id);
        $course->name=$request->name;
        $course->course_id=$request->course;
        $course->category=$request->category;
        $course->type=$request->type;
        $course->stream=$request->stream;
        $course->pincode=$request->pincode;
        $course->state=$request->state;
        $course->city=$request->city;
        $course->address=$request->address;

        if (!empty($request->cover_image)) {
            $file = $request->file('cover_image');
            $image = time() . "-" . rand(1, 100) . "." . $file->getClientOriginalExtension();
            $file->move(public_path('backend/collage/'), $image);
            $course->cover_image=$image;
        }

        if (!empty($request->thumbnail)) {
            $file = $request->file('thumbnail');
            $image = time() . "-" . rand(1, 100) . "." . $file->getClientOriginalExtension();
            $file->move(public_path('backend/collage/'), $image);
            $course->thumbnail=$image;
        }

        $course->collage_description=$request->collage_description;
        $course->course_fees=$request->course_fees;
        $course->cut_off=$request->cut_off;
        $course->placement=$request->placement;
        $course->reviews=$request->reviews;
        $course->facilities=$request->facilities;
        $course->question_answer=$request->question_answer;
        $course->notable_alumni=$request->notable_alumni;
        $course->collage_department=$request->collage_department;
        $course->admission=$request->admission;


        $course->meta_title=$request->meta_title;
        $course->meta_description=$request->meta_description;
        $course->save();

        return redirect()->route('collage.index');
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
