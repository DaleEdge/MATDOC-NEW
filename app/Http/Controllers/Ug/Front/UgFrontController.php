<?php

namespace App\Http\Controllers\Ug\Front;


use DB;
use Auth;
use Hash;
use Session;
use App\Models\Rank;
use App\Models\User;
use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\StateDocument;
use Craftsys\Msg91\Facade\Msg91;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\west_bengal;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use PDF;
use App\Models\uttar_pradesh;
use App\Models\mark_vs_rank;
use App\Models\uttarakhand;


class UgFrontController extends Controller
{
    public function index(){
        return view('ug.frontend.pages.index');
    }
    public function home(){
        return view('ug.frontend.pages.home');
    }
    public function contact(){
        return view('ug.frontend.pages.contact');
    }
    
    public function subscription_plans(){
        return view('ug.frontend.pages.subscription-plans');
    }
    public function closing_rank(Request $request){
        $state='all_indias';
        $list = DB::table($state)->take(1)->get();
        if($request->ajax()){
            $state=$request->state;
            $list = DB::table('ug_'.str_replace(' ','_',strtolower($state)))->take(1)->get();
            return view('ug.frontend.pages.closing-rank_table',compact('state','list'));
        }
        return view('ug.frontend.pages.closing-rank',compact('state','list'));
    }
    public function closing_rank_details(Request $request){
       $state=$request->state;
       $counseling_type=$request->counseling_type;
        $list =  DB::table('ug_'.$state)->orderBy('id');
        $college= DB::table('ug_'.$state)->groupBy('college')->get();
        $category= DB::table('ug_'.$state)->groupBy('category')->get();

   


        if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes' || $state=='bihars' || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }

        $condition_college=[];
        $condition_category=[];

        $colleges=$request->college;
        $categories=$request->category;


        
        if(!empty($request->college))
        {
            foreach($colleges as $college)
            {
                array_push($condition_college,['college'=>$college]);
            }
        }

       
        if(!empty($request->category))
        {
            foreach($categories as $categ)
            {
                array_push($condition_category,['category'=>$categ]);
            }
        }
        

        $list= $list->where(function ($query) use ($condition_college){
            foreach ($condition_college as $key=>$value)
            {
                $query->orWhere($value);
            }
            })->where(function ($query) use ($condition_category){
                        foreach ($condition_category as $key=>$value)
                        {
                            $query->orWhere($value);
                        }
                        });


        $list= $list->paginate(100);
  if($request->ajax()){
     return view('ug.frontend.pages.closing-rank-details_table',compact('list','college','category','round'));
   }

        return view('ug.frontend.pages.closing-rank-details',compact('list','college','category','round'));
    }
    public function all_india_counselings(){
        return view('ug.frontend.pages.all-india-counselings');
    }
    public function state_wise_counselings(){
        return view('ug.frontend.pages.state-wise-counselings');
    }
    public function state_wise_counseling_details(){
        return view('ug.frontend.pages.state-wise-counseling-details');
    }
    public function about_us(){
        return view('ug.frontend.pages.about-us');
    }
    public function term_condition(){
        return view('ug.frontend.pages.term-and-condition');
    }
    public function privacy_policy(){
        return view('ug.frontend.pages.privacy-policy');
    }
    
    public function login(){
        if(Auth::check()){
            return redirect()->route('user_dashboard');
        }else{
            return view('ug.frontend.auth.login');
        }
    }
    public function register(){
        if(Auth::check()){
            return redirect()->route('user_dashboard');
        }else{
        return view('ug.frontend.auth.register');
        }
    }
    

    
    public function send_otp_sms($to, $name, $text){
       
        //  $response = Msg91::sms()->to(['91'.$to]) ->flow("61c566bb0840836b8241ca1d")->variable('USER', $name)->variable('OTP', $text)->send();
        }
    
    public function otp_send(Request $request){
            
         $mobileregex = "/^[6-9][0-9]{9}$/" ;
            if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
                $customer = User::where('phone', $request->phone)->count();
                if ($customer == 0) {
                  $mob_otp = rand(1000, 9999); ;
                        Session::forget('mob_otp');
                        Session::put('mob_otp', [$mob_otp]);
    
              $this->send_otp_sms($request->phone,'User', $mob_otp);
                 return response()->json(['status' => true,'otp'=>$mob_otp]);
                } else {
                    return response()->json(['status' => false]);
                }
              
          } else {
            return response()->json(['status' => 'Wrong']);
        }    
                  
        }

        public function otp_forgot_password(Request $request){
            
            $mobileregex = "/^[6-9][0-9]{9}$/" ;
               if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
                   $customer = User::where('phone', $request->phone)->count();
                   if ($customer == 1) {
                     $mob_otp = rand(1000, 9999); ;
                           Session::forget('mob_otp');
                           Session::put('mob_otp', [$mob_otp]);
       
                 $this->send_otp_sms($request->phone,'User', $mob_otp);
                    return response()->json(['status' => true,'otp'=>$mob_otp]);
                   } else {
                       return response()->json(['status' => false]);
                   }
                 
             } else {
               return response()->json(['status' => 'Wrong']);
           }    
                     
           }


        public function check_otp(Request $request){
        
            $otp= Session::get('mob_otp');
             if ($otp[0] == $request->otp) {
              return response()->json(['status' => true]);
             } else {
                 return response()->json(['status' => false]);
             }
           
       }    

    public function user_login(Request $request){
     
    
        $validator =  Validator::make($request->all(), [
            'phone' => 'required|exists:users'
        ]);
         
         if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        } else { 
        $user = User::where('phone', $request->phone)->first();
            if($user != null){
                if(Hash::check($request->password, $user->password)){
                    if($request->has('remember')){
                        auth()->login($user, true);
                    }
                    else{
                        auth()->login($user, false);
                    }
                    Session::flash('success', 'Login Successfully !');
                    return redirect()->route('home_user');
                }else{
                    $validator->getMessageBag()->add('password', 'Password Wrong');
                        return back()->withErrors($validator)->withInput();
                   
                }
            }else{
                $validator->getMessageBag()->add('email', 'Wrong Login Attempt!');
                    return back()->withErrors($validator)->withInput();
            }
        }


        $user = User::where('phone', $request->phone)->first();
            if($user != null){
                if(Hash::check($request->password, $user->password)){
                    if($request->has('remember')){
                        auth()->login($user, true);
                    }
                    else{
                        auth()->login($user, false);
                    }
                    return redirect()->route('home_user');
                }
            }else{

            }
      
    }

 public function register_user(Request $request){
    $validator =  Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'unique:users'],
        'password' => ['required'],
    ]);
     
     if($validator->fails()){
        return back()->withErrors($validator)->withInput();
    } else { 

        // $otp= Session::get('mob_otp');
       

    $user =new User;
    $user->user_type='customer';
    $user->name=$request->name;
    $user->phone=$request->phone;
    $user->password=Hash::make($request->password);;
    $user->save();

    $customer =new Customer;
    $customer->user_id=$user->id;
    $customer->neet_score=$request->neet_score;
    $customer->save();

    auth()->login($user, true);
    Session::flash('success', 'Register Successfully !');
    return redirect()->route('home_user');
        }

   
}


public function password_forgot(Request $request){
    $otp= Session::get('mob_otp');
    if($request->check_otp== $otp[0]){
        $user = User::where('phone', $request->phone)->first();
        $user->password=Hash::make($request->password);;
        $user->save();
        }
        Session::flash('success', 'Password Reset Successfully !');
    return redirect()->route('user-login');
}


public function user_dashboard(){
        
    if(Auth::check()){
        return view('ug.frontend.user.profile');
    }
    return redirect()->route('user-login');
}

public function user_logout(Request $request){
        
    Auth::logout();
    $request->session()->flush();
    Session::flash('success', 'Logout Successfully !');
    return redirect()->route('user-login');
}

public function profile_update(Request $request){
  
    $user =User::find(Auth::user()->id);
    $user->name=$request->name;
    $user->email=$request->email;
    $user->save();
    $customer =Customer::where('user_id',$user->id)->first();
    $customer->dob=$request->dob;
    $customer->state=$request->state;
    $customer->neet_score=$request->neet_score;
    if(Auth::user()->id == 13)
    {
        $customer->rank=$request->rank;
    }
    else
    {
        if(!empty($request->rank) && ($customer->rank_count < 2)){
             $customer->rank=$request->rank;
             $customer->rank_count=$customer->rank_count + 1;
        } 
    }
   
    if($request->profile_image !== null){
        $file=$request->file('profile_image');
        $photo_image = date('YmdHi').$file->getClientOriginalName();
        $customer->profile_image = $photo_image;
        $file->move(public_path('/front_css/assets/images/'.$user->id), $photo_image);
    }
    $customer->save();
    Session::flash('success', 'Profile Updated Successfully');
   return 1;
}

function forgot_password(Request $request){
    if(Auth::check()){
        return redirect()->route('user_dashboard');
    }else{
    return view('ug.frontend.auth.forgot-password');
    }

}

public function bond_details(Request $request){
    $state=$request->state;
  //  $counseling_type=$request->counseling_type;
     $list =  DB::table($state)->orderBy('id');
     $college= DB::table($state)->groupBy('college')->get();
     $course= DB::table($state)->groupBy('course')->get();
     $quota= DB::table($state)->groupBy('quota')->get();
     $category= DB::table($state)->groupBy('category')->get();

     if( $state=='bihars' || $state=='jammu_and_kashmirs' || $state=='rajasthans' || $state=='tamil_nadus'){
         $list=$list->where('rank','!=',"[null]");
         $round=1;
       }
      if( $state=='uttar_pradeshes' || $state=='andhra_pradeshes' || $state=='himachal_pradeshes' || $state=='karnatakas' || $state=='manipurs' || $state=='meghalayas' || $state=='odishas' || $state=='tripuras'){
         $list=$list->where('rank','!=',"[null,null]");
         $round=2;
       }
       if( $state=='chandigarhs'  || $state=='haryanas' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='pondicherries' || $state=='uttarakhands' || $state=='west_bengals'){
         $list=$list->where('rank','!=',"[null,null,null]");
         $round=3;
       }
       if( $state=='chhattisgarhs'  || $state=='jharkhands' || $state=='punjabs' ){
         $list=$list->where('rank','!=',"[null,null,null,null]");
         $round=4;
       }
       if( $state=='assams'){
         $list=$list->where('rank','!=','["-","-","-"]');
         $round=3;
       }
       if( $state=='gujarats'){
         $list=$list->where('rank','!=','["-","-","-","-"]');
         $round=4;
       }
       if( $state=='andhra_pradeshes'  || $state=='telanganas'){
         $list=$list->where('rank','!=',"[null,null,null,null,null]");
         $round=5;
       }
       if( $state=='all_indias' || $state=='maharashtras'){
         $list=$list->where('rank','!=',"[null,null,null,null,null,null]");
         $round=6;
       }



     $condition_college=[];
     $condition_course=[];
     $condition_quota=[];
     $condition_category=[];

     $colleges=$request->college;
     $courses=$request->course;
     $quotas=$request->quota;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

     if(!empty($request->course))
     {
         foreach($courses as $course)
         {
             array_push($condition_course,['course'=>$course]);
         }
     }
     if(!empty($request->quota))
     {
         foreach($quotas as $quota)
         {
             array_push($condition_quota,['quota'=>$quota]);
         }
     }
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_course){
             foreach ($condition_course as $key=>$value)
             {
                 $query->orWhere($value);
             }
             })->where(function ($query) use ($condition_quota){
                 foreach ($condition_quota as $key=>$value)
                 {
                     $query->orWhere($value);
                 }
                 })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.bond-details_table',compact('list','college','course','quota','category','round'));
}

     return view('ug.frontend.pages.bond-details',compact('list','college','course','quota','category','round'));
 }

 public function stipend_details(Request $request){
    $state=$request->state;
  //  $counseling_type=$request->counseling_type;
     $list =  DB::table($state)->orderBy('id');
     $college= DB::table($state)->groupBy('college')->get();
     $course= DB::table($state)->groupBy('course')->get();
     $quota= DB::table($state)->groupBy('quota')->get();
     $category= DB::table($state)->groupBy('category')->get();

     if( $state=='bihars' || $state=='jammu_and_kashmirs' || $state=='rajasthans' || $state=='tamil_nadus'){
         $list=$list->where('rank','!=',"[null]");
         $round=1;
       }
      if( $state=='uttar_pradeshes' || $state=='andhra_pradeshes' || $state=='himachal_pradeshes' || $state=='karnatakas' || $state=='manipurs' || $state=='meghalayas' || $state=='odishas' || $state=='tripuras'){
         $list=$list->where('rank','!=',"[null,null]");
         $round=2;
       }
       if( $state=='chandigarhs'  || $state=='haryanas' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='pondicherries' || $state=='uttarakhands' || $state=='west_bengals'){
         $list=$list->where('rank','!=',"[null,null,null]");
         $round=3;
       }
       if( $state=='chhattisgarhs'  || $state=='jharkhands' || $state=='punjabs' ){
         $list=$list->where('rank','!=',"[null,null,null,null]");
         $round=4;
       }
       if( $state=='assams'){
         $list=$list->where('rank','!=','["-","-","-"]');
         $round=3;
       }
       if( $state=='gujarats'){
         $list=$list->where('rank','!=','["-","-","-","-"]');
         $round=4;
       }
       if( $state=='andhra_pradeshes'  || $state=='telanganas'){
         $list=$list->where('rank','!=',"[null,null,null,null,null]");
         $round=5;
       }
       if( $state=='all_indias' || $state=='maharashtras'){
         $list=$list->where('rank','!=',"[null,null,null,null,null,null]");
         $round=6;
       }



     $condition_college=[];
     $condition_course=[];
     $condition_quota=[];
     $condition_category=[];

     $colleges=$request->college;
     $courses=$request->course;
     $quotas=$request->quota;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

     if(!empty($request->course))
     {
         foreach($courses as $course)
         {
             array_push($condition_course,['course'=>$course]);
         }
     }
     if(!empty($request->quota))
     {
         foreach($quotas as $quota)
         {
             array_push($condition_quota,['quota'=>$quota]);
         }
     }
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_course){
             foreach ($condition_course as $key=>$value)
             {
                 $query->orWhere($value);
             }
             })->where(function ($query) use ($condition_quota){
                 foreach ($condition_quota as $key=>$value)
                 {
                     $query->orWhere($value);
                 }
                 })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.stipend-details_table',compact('list','college','course','quota','category','round'));
}

     return view('ug.frontend.pages.stipend-details',compact('list','college','course','quota','category','round'));
 }

 
public function state_document(Request $request){
   $data=StateDocument::where('state_name',$request->state)->first();
   return $data->state_desc;
}

public function fee_details(Request $request){
    $state=$request->state;
  //  $counseling_type=$request->counseling_type;
     $list =  DB::table($state)->orderBy('id');
     $college= DB::table($state)->groupBy('college')->get();
     $category= DB::table($state)->groupBy('category')->get();

      if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='bihars' || $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }



     $condition_college=[];
     $condition_category=[];

     $colleges=$request->college;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

    
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.fee-details_table',compact('list','college','category','round'));
}

     return view('ug.frontend.pages.fee-details',compact('list','college','category','round'));
 }

 public function all_india_stipend_details(Request $request){
    $state=$request->state;
    
  //  $counseling_type=$request->counseling_type;
  if($request->type=='all'){

     $list =  DB::table($state)->whereIn('quota',['AIQ','AMU','BHU','CIQ','DU','IP'])->groupBy('college')->orderBy('id');
  }
  if($request->type=='deemed'){
    $list =  DB::table($state)->whereIn('quota',['MNG','NRI','JM','MM'])->groupBy('college')->orderBy('id');
 }
 if($request->type=='dnb'){
    $list =  DB::table($state)->whereIn('quota',['NBE Diploma','DNB Post MBBS'])->groupBy('college')->orderBy('id');
 }
     $college= DB::table($state)->groupBy('college')->get();
     $course= DB::table($state)->groupBy('course')->get();
     $quota= DB::table($state)->groupBy('quota')->get();
     $category= DB::table($state)->groupBy('category')->get();

     if( $state=='bihars' || $state=='jammu_and_kashmirs' || $state=='rajasthans' || $state=='tamil_nadus'){
         $list=$list->where('rank','!=',"[null]");
         $round=1;
       }
      if( $state=='uttar_pradeshes' || $state=='andhra_pradeshes' || $state=='himachal_pradeshes' || $state=='karnatakas' || $state=='manipurs' || $state=='meghalayas' || $state=='odishas' || $state=='tripuras'){
         $list=$list->where('rank','!=',"[null,null]");
         $round=2;
       }
       if( $state=='chandigarhs'  || $state=='haryanas' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='pondicherries' || $state=='uttarakhands' || $state=='west_bengals'){
         $list=$list->where('rank','!=',"[null,null,null]");
         $round=3;
       }
       if( $state=='chhattisgarhs'  || $state=='jharkhands' || $state=='punjabs' ){
         $list=$list->where('rank','!=',"[null,null,null,null]");
         $round=4;
       }
       if( $state=='assams'){
         $list=$list->where('rank','!=','["-","-","-"]');
         $round=3;
       }
       if( $state=='gujarats'){
         $list=$list->where('rank','!=','["-","-","-","-"]');
         $round=4;
       }
       if( $state=='andhra_pradeshes'  || $state=='telanganas'){
         $list=$list->where('rank','!=',"[null,null,null,null,null]");
         $round=5;
       }
       if( $state=='all_indias' || $state=='maharashtras'){
         $list=$list->where('rank','!=',"[null,null,null,null,null,null]");
         $round=6;
       }



     $condition_college=[];
     $condition_course=[];
     $condition_quota=[];
     $condition_category=[];

     $colleges=$request->college;
     $courses=$request->course;
     $quotas=$request->quota;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

     if(!empty($request->course))
     {
         foreach($courses as $course)
         {
             array_push($condition_course,['course'=>$course]);
         }
     }
     if(!empty($request->quota))
     {
         foreach($quotas as $quota)
         {
             array_push($condition_quota,['quota'=>$quota]);
         }
     }
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_course){
             foreach ($condition_course as $key=>$value)
             {
                 $query->orWhere($value);
             }
             })->where(function ($query) use ($condition_quota){
                 foreach ($condition_quota as $key=>$value)
                 {
                     $query->orWhere($value);
                 }
                 })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.all-stipend-details_table',compact('list','college','course','quota','category','round'));
}

     return view('ug.frontend.pages.all-stipend-details',compact('list','college','course','quota','category','round'));
 }

 public function all_india_fee_details(Request $request){
    $state=$request->state;
  //  $counseling_type=$request->counseling_type;
  if($request->type=='all'){

    $list =  DB::table($state)->orderBy('id');
 }
 if($request->type=='deemed'){
   $list =  DB::table($state)->orderBy('id');
}

     $college= DB::table($state)->groupBy('college')->get();
     $category= DB::table($state)->groupBy('category')->get();

     if( $state=='rajasthans' || $state=='tamil_nadus' ){
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }



     $condition_college=[];
     $condition_category=[];

     $colleges=$request->college;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

   
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.all-fee-details_table',compact('list','college','category'));
}

     return view('ug.frontend.pages.all-fee-details',compact('list','college','category'));
 }

 public function all_india_closing_rank_details(Request $request){
    $state=$request->state;
    if($request->type=='all'){

        $list =  DB::table($state)->orderBy('id');
        $college= DB::table($state)->orderBy('id')->groupBy('college')->get();
        $category= DB::table($state)->orderBy('id')->groupBy('category')->get();
     }
     if($request->type=='deemed'){
       $list =  DB::table($state)->orderBy('id');
       $college= DB::table($state)->groupBy('college')->get();
       $category= DB::table($state)->groupBy('category')->get();
    }
   
     

     if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }



     $condition_college=[];
     $condition_category=[];

     $colleges=$request->college;
     $categories=$request->category;


     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
     }

    
     if(!empty($request->category))
     {
         foreach($categories as $categ)
         {
             array_push($condition_category,['category'=>$categ]);
         }
     }
     

     $list= $list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         })->where(function ($query) use ($condition_category){
                     foreach ($condition_category as $key=>$value)
                     {
                         $query->orWhere($value);
                     }
                     });


     $list= $list->paginate(100);
if($request->ajax()){
  return view('ug.frontend.pages.all-india-closing-rank-details_table',compact('list','college','category','round'));
}

     return view('ug.frontend.pages.all-india-closing-rank-details',compact('list','college','category','round'));
 }

public function student_report(Request $request){

  return view('ug.frontend.pages.student-report');


}





public function get_category(Request $request){
    $state=$request->state;

    $condition_course=$request->course;
   
    $category= DB::table('all_indias')->where(function ($query) use ($condition_course){
        foreach ($condition_course as $key=>$value)
        {
            $query->orWhere('course','like','%'.$value.'%' );
        }
        })->groupBy('course')->get('course');

    return $category;
}

public function student_report_details(Request $request){

//return $request->all();
$counselling_preference=$request->counselling_preference;
$input=$request->all();
return view('ug.frontend.pages.student-report_table',compact('counselling_preference','input'));
  
}

public function student_report_closing_rank_details(Request $request){
 
    $state=$request->state;
    $budget=request('budget');
    $rank=request('rank');
    $type=request('type');
    $cour=$request->course;

    if($request->type=='all'){
        $list =  DB::table('ug_'.$state)->where('tuition_fees','<',$request->budget)->orderBy('id');
        $category= DB::table('ug_'.$state)->groupBy('category')->get();
        $college= DB::table('ug_'.$state)->groupBy('college')->get();

       }
       if($request->type=='deemed'){
        $list =  DB::table('ug_'.$state)->where('tuition_fees','<',$request->budget)->where(function($query) use ($request) {
                            $query->where('category','MNG');
                })->orderBy('id');
        $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MNG');
                })->get();
        $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MNG');
                })->groupBy('college')->get();

       }
       if($request->type=='state_home'){
           
        $list =  DB::table('ug_'.$state)->orderBy('id');
        $category= DB::table('ug_'.$state)->groupBy('category')->get();
        $college= DB::table('ug_'.$state)->groupBy('college')->get();
        
        
        
         if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=2;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }

      $condition_category=[];
      $condition_college=[];


      $categories=$request->category;
    
       
         $colleges=$request->college;
       

      if(!empty($request->category))
      {
          foreach($categories as $categ)
          {
              array_push($condition_category,['category'=>$categ]);
          }
          $list=$list->where(function ($query) use ($condition_category){
                        foreach ($condition_category as $key=>$value)
                        {
                            $query->orWhere($value);
                        }
                        });
      }

   
     
     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
        $list=$list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         });
     } 
     


$new_array=[];
      $list=$list->get();
      foreach($list as $data){
          if(!empty($data->rank)){
           $rank = json_decode($data->rank);
              foreach($rank as $rk){
                  if($rk > $request->rank){
                      array_push($new_array,$data);
                      break;
                  }
              }
            }
          
      }
    

if(!empty($request->submit)){
      $pdf = PDF::loadView('ug.frontend.pages.student-report-closing-rank-details_download',compact('list','category','round','state','type','rank','budget','college'));
        return $pdf->download('sdfsf.pdf');
}
       $list=$this->paginate($new_array);
   if($request->ajax()){
    return view('ug.frontend.pages.student-report-closing-rank-details_table',compact('list','category','round','state','type','rank','budget','college'));
    }
      return view('ug.frontend.pages.student-report-closing-rank-details',compact('list','category','round','state','type','rank','budget','college'));
        

       }
       
       if($request->type=='state_other'){
        $list =  DB::table('ug_'.$state)->orderBy('id');
       
        
         if($state=='andhra_pradeshes'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','MGT');
                });
          }
         if($state=='chhattisgarhs'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT')->orwhere('category','MGT OBC FEM')->orwhere('category','MGT OBC NC')->orwhere('category','MGT SC FEM')->orwhere('category','MGT SC NC')->orwhere('category','MGT ST FEM')->orwhere('category','MGT ST NC')->orwhere('category','MGT UR FEM')->orwhere('category','MGT UR NC');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                             $query->where('category','MGT')->orwhere('category','MGT OBC FEM')->orwhere('category','MGT OBC NC')->orwhere('category','MGT SC FEM')->orwhere('category','MGT SC NC')->orwhere('category','MGT ST FEM')->orwhere('category','MGT ST NC')->orwhere('category','MGT UR FEM')->orwhere('category','MGT UR NC');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','MGT')->orwhere('category','MGT OBC FEM')->orwhere('category','MGT OBC NC')->orwhere('category','MGT SC FEM')->orwhere('category','MGT SC NC')->orwhere('category','MGT ST FEM')->orwhere('category','MGT ST NC')->orwhere('category','MGT UR FEM')->orwhere('category','MGT UR NC');
                });
          }
          
         if($state=='haryanas'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','MGT');
                });
          } 
           if($state=='himachal_pradeshes'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','UR');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','UR');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','UR');
                });
          } 
          
           if($state=='karnatakas'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','OPEN')->orwhere('category','OTHERS');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','OPEN')->orwhere('category','OTHERS');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','OPEN')->orwhere('category','OTHERS');
                });
          } 
          
          if($state=='keralas'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','SM');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','SM');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','SM');
                });
          } 
           if($state=='madhya_pradeshes'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','UR');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','UR');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                            $query->where('category','NRI')->orwhere('category','UR');
                });
          } 
          if($state=='pondicherries'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                             $query->where('category','MGT');
                });
          } 
          if($state=='telanganas'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT')->orwhere('category','MGT_MSM');
                })->groupBy('category')->get();
              $college= DB::table($state)->where(function($query) use ($request) {
                            $query->where('category','MGT')->orwhere('category','MGT_MSM');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                             $query->where('category','MGT')->orwhere('category','MGT_MSM');
                });
          } 
            if($state=='uttar_pradeshes'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','UROP');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','UROP');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                             $query->where('category','UROP');
                });
          } 
              if($state=='uttarkhands'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                             $query->where('category','MGT');
                });
          }
          if($state=='west_bengals'){
              $category= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('category')->get();
              $college= DB::table('ug_'.$state)->where(function($query) use ($request) {
                            $query->where('category','MGT');
                })->groupBy('college')->get();
            $list=$list->where(function($query) use ($request) {
                             $query->where('category','MGT');
                });
          } 
       
          
        
        if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
           if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }
       }
       
        if($request->type=='aiims'){
        $list =  DB::table('ug_'.$state)->orderBy('id');
        $category= DB::table('ug_'.$state)->groupBy('category')->get();
        $college= DB::table('ug_'.$state)->groupBy('college')->get();
        
        if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
           if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }
       }
       
       

     if( $state=='rajasthans' || $state=='tamil_nadus' ){
          
            $round=1;
          }
          
          if( $state=='assams' ||  $state=='chhattisgarhs' || $state=='himachal_pradeshes'|| $state=='karnatakas'  || $state=='pondicherries' || $state=='punjabs' || $state=='tripuras' || $state=='uttar_pradeshes'){
           
            $round=2;
          }
          
          if( $state=='andhra_pradeshes'  || $state=='gujarats' || $state=='haryanas' || $state=='jammu_and_kashmirs' || $state=='jharkhands' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='maharashtras' || $state=='telanganas' || $state=="uttarakhands" || $state=='west_bengals' || $state=="deemeds" ){
            $round=3;
           
          }
      
       if($state=="all_indias" || $state== "aiims" ){
        $round=5;
        }

      $condition_category=[];
       $condition_college=[];


      $categories=$request->category;
    
       $colleges=$request->college;
       

      if(!empty($request->category))
      {
          foreach($categories as $categ)
          {
              array_push($condition_category,['category'=>$categ]);
          }
          $list=$list->where(function ($query) use ($condition_category){
                        foreach ($condition_category as $key=>$value)
                        {
                            $query->orWhere($value);
                        }
                        });
      }
   

     if(!empty($request->college))
     {
         foreach($colleges as $college)
         {
             array_push($condition_college,['college'=>$college]);
         }
      $list=$list->where(function ($query) use ($condition_college){
         foreach ($condition_college as $key=>$value)
         {
             $query->orWhere($value);
         }
         });
     }

    
       
    $new_array=[];
      $list=$list->get();
      foreach($list as $data){
          if(!empty($data->rank)){
           $rank = json_decode($data->rank);
              foreach($rank as $rk){
                  if($rk > $request->rank){
                      array_push($new_array,$data);
                      break;
                  }
              }
            }
          
      }
    
   
    

  if(!empty($request->submit)){
      $pdf = PDF::loadView('ug.frontend.pages.student-report-closing-rank-details_download',compact('list','category','round','state','type','rank','budget','college'));
        return $pdf->download('sdfsf.pdf');
   }
      $list=$this->paginate($new_array);
   if($request->ajax()){
      
    return view('ug.frontend.pages.student-report-closing-rank-details_table',compact('list','category','round','state','type','rank','budget','college'));
    }
   
      return view('ug.frontend.pages.student-report-closing-rank-details',compact('list','category','round','state','type','rank','budget','college'));
       
      
    }


public function mark_vs_rank(Request $request){
     
     $data=[];
     if(!empty($request->mark)){
      $data=mark_vs_rank::where('mark_start','>=',$request->mark)->orderBy('id','desc')->first();
     }
      return view('ug.frontend.pages.mark_vs_rank',compact('data'));
     
    }


public function paginate($items, $perPage = 100, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

// public function studen_report_download(Request $request){
   
//      $state=$request->state;
//     $budget=request('budget');
//     $rank=Auth::user()->customer->rank;
//     $type=request('type');
//     $cour=$request->course;

//     if($request->type=='all'){
//         $list =  DB::table($state)->where('course_fee','<',$request->budget)->where(function($query) use ($request) {
//                             $query->where('quota','AIQ')->orwhere('quota','AMU')->orwhere('quota','BHU')->orwhere('quota','CIQ')->orwhere('quota','DU')->orwhere('quota','IP')->orwhere('quota','DNB Post MBBS')->orwhere('quota','NBE Diploma');
//                         })->where('course_fee','!=','0')->orderBy('id');
//         $category= DB::table($state)->groupBy('category')->get();
//         $quota= DB::table($state)->orderBy('id')->groupBy('quota')->get();
//         $college= DB::table($state)->where(function($query) use ($request) {
//                             $query->where('quota','AIQ')->orwhere('quota','AMU')->orwhere('quota','BHU')->orwhere('quota','CIQ')->orwhere('quota','DU')->orwhere('quota','IP')->orwhere('quota','DNB Post MBBS')->orwhere('quota','NBE Diploma');
//                         })->groupBy('college')->get();

//       }
//       if($request->type=='deemed'){
//         $list =  DB::table($state)->where('course_fee','<',$request->budget)->where(function($query) use ($request) {
//                             $query->where('quota','MNG')->orwhere('quota','NRI');
//                         })->where('course_fee','!=','0')->orderBy('id');
//         $category= DB::table($state)->where(function($query) use ($request) {
//                             $query->where('quota','MNG')->orwhere('quota','NRI');
//                         })->where('course_fee','!=','0')->groupBy('category')->get();
//         $quota= DB::table($state)->orderBy('id')->where(function($query) use ($request) {
//                             $query->where('quota','MNG')->orwhere('quota','NRI');
//                         })->groupBy('quota')->get();
//         $college= DB::table($state)->where(function($query) use ($request) {
//                             $query->where('quota','MNG')->orwhere('quota','NRI');
//                         })->where('course_fee','!=','0')->groupBy('college')->get();

//       }
//       if($request->type=='state_home'){
           
//         $list =  DB::table($state)->where(function($query) use ($request) {
//                             $query->where('course_fee','<',$request->budget)->orwhere('private_mgmt_fee','<',$request->budget)->orwhere('nri_fee','<',$request->budget);
//                         })->orderBy('id');
//         $category= DB::table($state)->groupBy('category')->get();
//         $quota= DB::table($state)->orderBy('id')->groupBy('quota')->get();
//         $college= DB::table($state)->groupBy('college')->get();
        
        
        
//          if( $state=='bihars' || $state=='jammu_and_kashmirs' || $state=='rajasthans' ){
//         $list=$list->where('rank','!=',"[null]");
//         $round=1;
//       }
//      if( $state=='uttar_pradeshes' || $state=='andhra_pradeshes' || $state=='himachal_pradeshes' || $state=='karnatakas' || $state=='manipurs' || $state=='meghalayas' || $state=='odishas' || $state=='tripuras'){
//         $list=$list->where('rank','!=',"[null,null]");
//         $round=2;
//       }
//       if( $state=='chandigarhs'  || $state=='haryanas' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='pondicherries' || $state=='uttarakhands' || $state=='west_bengals'){
//         $list=$list->where('rank','!=',"[null,null,null]");
//         $round=3;
//       }
//       if( $state=='chhattisgarhs'  || $state=='jharkhands' || $state=='punjabs' ){
//         $list=$list->where('rank','!=',"[null,null,null,null]");
//         $round=4;
//       }
//       if( $state=='assams'){
//         $list=$list->where('rank','!=','["-","-","-"]');
//         $round=3;
//       }
//       if( $state=='gujarats'){
//         $list=$list->where('rank','!=','["-","-","-","-"]');
//         $round=4;
//       }
//       if( $state=='andhra_pradeshes'  || $state=='telanganas'){
//         $list=$list->where('rank','!=',"[null,null,null,null,null]");
//         $round=5;
//       }
//       if( $state=='all_indias' || $state=='maharashtras' || $state=='tamil_nadus'){
//         $list=$list->where('rank','!=',"[null,null,null,null,null,null]");
//         $round=6;
//       }

//       $condition_category=[];
//       $condition_course=[];
//       $condition_quota=[];
//       $condition_college=[];


//       $categories=$request->category;
      
    
//       $courses=json_decode($request->course);
      
      
//       $quotas=$request->quota;
       
//          $colleges=$request->college;
       

//       if(!empty($request->category))
//       {
//           foreach($categories as $categ)
//           {
//               array_push($condition_category,['category'=>$categ]);
//           }
//           $list=$list->where(function ($query) use ($condition_category){
//                         foreach ($condition_category as $key=>$value)
//                         {
//                             $query->orWhere($value);
//                         }
//                         });
//       }

//       if(!empty($request->course))
//       {
//           foreach($courses as $course)
//           {
//               array_push($condition_course,['course'=>$course]);
//           }
//           $list=$list->where(function ($query) use ($condition_course){
//                             foreach ($condition_course as $key=>$value)
//                             {
//                                 $query->orWhere($value);
//                             }
//                         });
//       }

//     if(!empty($request->quota))
//      {
//          foreach($quotas as $quota)
//          {
//              array_push($condition_quota,['quota'=>$quota]);
//          }
//          $list=$list->where(function ($query) use ($condition_quota){
//                     foreach ($condition_quota as $key=>$value)
//                      {
//                       $query->orWhere($value);
//                      }
//                     });
//      }
     
//      if(!empty($request->college))
//      {
//          foreach($colleges as $college)
//          {
//              array_push($condition_college,['college'=>$college]);
//          }
//         $list=$list->where(function ($query) use ($condition_college){
//          foreach ($condition_college as $key=>$value)
//          {
//              $query->orWhere($value);
//          }
//          });
//      } 
     


//   $new_array=[];
//       $list=$list->get();
//       foreach($list as $data){
//           if(!empty($data->rank))
//           $rank = json_decode($data->rank);
//               foreach($rank as $rk){
//                   if($rk > $request->rank){
//                       array_push($new_array,$data);
//                       break;
//                   }
//               }
          
//       }
    


//       $list=$this->paginate($new_array);
//   if($request->ajax()){
//     return view('ug.frontend.pages.student-report-closing-rank-details_table',compact('list','category','quota','round','state','type','rank','budget','cour','college'));
//     }
//       return view('ug.frontend.pages.student-report-closing-rank-details',compact('list','category','quota','round','state','type','rank','budget','cour','college'));
        

//       }
//       if($request->type=='state_other'){
//         $list =  DB::table($state)->where(function($query) use ($request) {
//                             $query->where('course_fee','<',$request->budget)->orwhere('nri_fee','<',$request->budget);
//                         })->orderBy('id');
//         $category= DB::table($state)->groupBy('category')->get();
//         $quota= DB::table($state)->orderBy('id')->groupBy('quota')->get();
//         $college= DB::table($state)->groupBy('college')->get();
        
//         if($state=='bihars'){
//             $list=$list->where('category','ur')->where(function($query) use ($request) {
//                             $query->where('quota','Bihar Priv-Open')->orWhere('quota','Bihar Priv-Minority');
//                 });
//           }
//           if($state=='chhattisgarhs'){
//             $list=$list->where('quota','CHTSGRH-Private')->where(function($query) use ($request) {
//                             $query->where('category','nri_ur')->orWhere('category','nri_ur_female')->orWhere('category','ur')->orWhere('category','ur_female');
//                 });
//           }
        
//      if($state=='haryanas'){
//             $list=$list->where('category','MNG')->where(function($query) use ($request) {
//                             $query->where('quota','HAR Priv-Mgmt')->orwhere('quota','Haryana Priv NRI');
//                 });
//           }
//          if($state=='karnatakas'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('category','mng')->orwhere('category','nri')->orwhere('category','opn');
//                 })->where(function($query) use ($request) {
//                             $query->where('quota','KAR NRI Quota')->orwhere('quota','KAR Others (Inst.Q)')->orwhere('quota','KAR Priv Seats-Open');
//                 });
//           }
//           if($state=='madhya_pradeshes'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('category','ur_non_domicile')->orwhere('category','ur_nri_non_domicile');
//                 })->where(function($query) use ($request) {
//                             $query->where('quota','MP Priv-NRI')->orwhere('quota','MP Priv-Open');
//                 });
//           }
//           if($state=='pondicherries'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','PY Mgmt-Chris.Min')->orwhere('quota','PY Mgmt-Open')->orwhere('quota','PY Mgmt-TeluguMin');
//                 });
//           }
//           if($state=='rajasthans'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','RAJ Priv-Mgmt Quota')->orwhere('quota','RAJ Priv-NRI')->orwhere('quota','RAJ Priv-All India');
//                 });
//           }
//           if($state=='tamil_nadus'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','TN Mgmt Quota')->orwhere('quota','TN NRI Quota');
//                 });
//           }
//           if($state=='telanganas'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','TELMgmt-MQ1-CatB-All')->orwhere('quota','TELMgmt-MQ2-CatC-NRI')->orwhere('quota','TELMgmt-MQ3-CatC-Inst');
//                 });
//           }
//           if($state=='uttarakhands'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','UK Priv-AllIndia/Mgmt')->orwhere('quota','UK Priv-AllIndia/Mgmt');
//                 });
//           }
//           if($state=='uttar_pradeshes'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','UP Priv-Min. Quota')->orwhere('quota','UP Priv-Open Quota');
//                 });
//           }
//           if($state=='west_bengals'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','WB Mgmt Quota')->orwhere('quota','WB NRI Quota');
//                 });
//           }
//           if($state=='andhra_pradeshes'){
//             $list=$list->where(function($query) use ($request) {
//                             $query->where('quota','APMgmt-S1-CatB-All')->orwhere('quota','APMgmt-S2-CatC-NRI')->orwhere('quota','APMgmt-S3-CatC-Inst');
//                 });
//           }
//       }
       

//     if( $state=='bihars' || $state=='jammu_and_kashmirs' || $state=='rajasthans' || $state=='tamil_nadus'){
//         $list=$list->where('rank','!=',"[null]");
//         $round=1;
//       }
//      if( $state=='uttar_pradeshes' || $state=='andhra_pradeshes' || $state=='himachal_pradeshes' || $state=='karnatakas' || $state=='manipurs' || $state=='meghalayas' || $state=='odishas' || $state=='tripuras'){
//         $list=$list->where('rank','!=',"[null,null]");
//         $round=2;
//       }
//       if( $state=='chandigarhs'  || $state=='haryanas' || $state=='keralas' || $state=='madhya_pradeshes' || $state=='pondicherries' || $state=='uttarakhands' || $state=='west_bengals'){
//         $list=$list->where('rank','!=',"[null,null,null]");
//         $round=3;
//       }
//       if( $state=='chhattisgarhs'  || $state=='jharkhands' || $state=='punjabs' ){
//         $list=$list->where('rank','!=',"[null,null,null,null]");
//         $round=4;
//       }
//       if( $state=='assams'){
//         $list=$list->where('rank','!=','["-","-","-"]');
//         $round=3;
//       }
//       if( $state=='gujarats'){
//         $list=$list->where('rank','!=','["-","-","-","-"]');
//         $round=4;
//       }
//       if( $state=='andhra_pradeshes'  || $state=='telanganas'){
//         $list=$list->where('rank','!=',"[null,null,null,null,null]");
//         $round=5;
//       }
//       if( $state=='all_indias' || $state=='maharashtras' || $state=='tamil_nadus'){
//         $list=$list->where('rank','!=',"[null,null,null,null,null,null]");
//         $round=6;
//       }

//       $condition_category=[];
//       $condition_course=[];
//       $condition_quota=[];
//       $condition_college=[];


//       $categories=$request->category;
      

//       $courses=json_decode($request->course);
      
      
//       $quotas=$request->quota;
       
//       $colleges=$request->college;
       

//       if(!empty($request->category))
//       {
//           foreach($categories as $categ)
//           {
//               array_push($condition_category,['category'=>$categ]);
//           }
//           $list=$list->where(function ($query) use ($condition_category){
//                         foreach ($condition_category as $key=>$value)
//                         {
//                             $query->orWhere($value);
//                         }
//                         });
//       }

//       if(!empty($request->course))
//       {
//           foreach($courses as $course)
//           {
//               array_push($condition_course,['course'=>$course]);
//           }
//           $list=$list->where(function ($query) use ($condition_course){
//                             foreach ($condition_course as $key=>$value)
//                             {
//                                 $query->orWhere($value);
//                             }
//                         });
//       }

//     if(!empty($request->quota))
//      {
//          foreach($quotas as $quota)
//          {
//              array_push($condition_quota,['quota'=>$quota]);
//          }
//          $list=$list->where(function ($query) use ($condition_quota){
//                     foreach ($condition_quota as $key=>$value)
//                      {
//                       $query->orWhere($value);
//                      }
//                     });
//      }

//  if(!empty($request->college))
//      {
//          foreach($colleges as $college)
//          {
//              array_push($condition_college,['college'=>$college]);
//          }
//       $list=$list->where(function ($query) use ($condition_college){
//          foreach ($condition_college as $key=>$value)
//          {
//              $query->orWhere($value);
//          }
//          });
//      }



//   $new_array=[];
//       $list=$list->get();
//       foreach($list as $data){
//           if(!empty($data->rank))
//           $rank = json_decode($data->rank);
//               foreach($rank as $rk){
//                   if($rk > $request->rank){
//                       array_push($new_array,$data);
//                       break;
//                   }
//               }
          
//       }
    


    
//         $pdf = PDF::loadView('ug.frontend.pages.student-report-closing-rank-details_download',compact('list','category','quota','round','state','type','rank','budget','cour','college'));
//         return $pdf->download('sdfsf.pdf');
      
       
// }



    // public function user_signup(){
    //     if(Auth::check()){
    //         return redirect()->route('user_dashboard');
    //     }
    //     return view('ug.frontend.auth.signup');
    // }

    // public function user_login(){
    //     if(Auth::check()){
    //         return redirect()->route('user_dashboard');
    //     }
    //     return view('ug.frontend.auth.login');
    // }

   

   

    


//    public function user_account(){
//         $user = User::where('id',Auth::user()->id)->first();
//         return view('ug.frontend.user.accountReview',compact('user'));
//     }


public function payment(Request $request)
{
    $input = $request->all();
    $api = new Api('rzp_live_RCHAyxmAi8eVcY', 'Yc8Ec0jxW94PlkEXb8PGuA2B');
    
    $payment = $api->payment->fetch($request->razorpay_payment_id);

    if(count($input)  && !empty($request->razorpay_payment_id)) {
        $payment_detalis = null;
        try {
            $response = $api->payment->fetch($request->razorpay_payment_id)->capture(array('amount'=>$payment['amount']));

            if($response['amount']/100 == 1800)
            {
                $plan_name='Plan of 1800';
            }
            else
            {
                $plan_name='Plan of 21999';
            }

            // Payment::create([
            //     'user_id'=>Auth::user()->id,
            //     'payment_id'=>$response['id'],
            //     'payment_amount'=>$response['amount']/100,
            //     'method'=>$response['method'],
            //     'currency'=>$response['currency'],
            //     'plan_name'=>$plan_name,
            //     'plan_status'=>'success',
            // ]);
            
              Payment::create([
        'user_id'=>Auth::user()->id,
        'payment_id'=>$response['id'],
        'payment_amount'=>$response['amount']/100,
        'method'=>$response['method'],
        'currency'=>$response['currency'],
        'plan_name'=>'Plan of '.$response['amount']/100,
        'plan_status'=>'success',
    ]);
            

            $payment_detalis = json_encode(array('id' => $response['id'],'method' => $response['method'],'amount' => $response['amount'],'currency' => $response['currency']));
        } catch (\Exception $e) {
            return  $e->getMessage();
            \Session::put('error',$e->getMessage());
            return redirect()->back();
        }
    }

    return $payment_detalis;
}

function update_status_subscription(Request $request){
if($request->stat=='enable'){
    Payment::create([
        'user_id'=>$request->user_id,
        'payment_id'=>rand(11111,99999),
        'payment_amount'=>$request->packages,
        'method'=>'upi',
        'currency'=>'INR',
        'plan_name'=>'Plan of '.$request->packages,
        'plan_status'=>'success',
    ]);
    return 1;
}else{
    Payment::where('user_id',$request->user_id)->delete();
    return 0;
}



}

 public function update_sql(Request $request){
    $list = uttar_pradesh::get();
    foreach($list as $data){
     $data->tuition_fees = (int) filter_var($data->tuition_fees, FILTER_SANITIZE_NUMBER_INT);
         $data->save();
     
    }
 }

 public function get_college_hospital(Request $request){
    
    return view('ug.frontend.pages.college-hospital');
     
    }
    
    public function deemed_hospital_details(Request $request){
    
    return view('ug.frontend.pages.deemed-college-hospital');
     
    }
    
    
    public function get_college_hospital_detail(Request $request){
        
        $course=$request->course;
     $list =  DB::table($course)->orderBy('id')->get();
    return view('ug.frontend.pages.college-hospital-detail',compact('list'));
     
    }



}
