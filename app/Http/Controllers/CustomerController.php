<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\StudentsExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list= User::where('user_type', 'customer')->where('id', '!=', Auth::user()->id)->orderBy('id','DESC');
        if(!empty($request->search)){
            $list = $list->where('phone','like','%'.$request->search); 
        }
        if(!empty($request->exam_type)){
            $exam_type=$request->exam_type;
            $list = $list->whereHas('customer', function($q) use ($exam_type){
                $q->where('exam_type', $exam_type);
            }); 
        }
        $list=$list->paginate(25);
        return view('backend.admin.student.index',compact('list'));
    }

   public function export(){
        return Excel::download(new StudentsExport, 'student.xlsx');
   }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
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
        $edit_data= User::find($id);
        return view('backend.admin.student.edit',compact('edit_data'));
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
        $user= User::find($id);
        $user->name = $request->name;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $customer = Customer::where('user_id', $user->id)->first();
        $customer->exam_type = $request->exam_type;
        $customer->score = $request->score;
        $customer->save();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
