<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_type=Auth::user()->user_type;
        if($user_type=='admin'){
            
            return view('backend.admin.dashboard');
            
        }else{
            
            return view('backend.branch.dashboard');
        }
    }

    public function customer()
    {
      
        $list = User::where('user_type','customer')->where('id', '!=', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('backend.admin.customer.index',compact('list'));


    }
}
