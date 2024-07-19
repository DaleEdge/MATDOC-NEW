<?php

namespace App\Http\Controllers\Front;


use DB;
use PDF;
use Auth;
use Hash;
use Session;
use App\Models\Rank;
use App\Models\User;
use Razorpay\Api\Api;
use App\Models\Course;
use App\Models\Collage;
use App\Models\Enquiry;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\all_india;
use App\Models\ContactUs;
use App\Models\tamil_nadu;
use App\Models\west_bengal;
use Illuminate\Http\Request;
use App\Models\StateDocument;
use Craftsys\Msg91\Facade\Msg91;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;



class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function home()
    {
        return view('frontend.pages.home');
    }
    public function help()
    {
        return view('frontend.pages.help');
    }

    public function subscription_plans()
    {
        return view('frontend.pages.subscription-plans');
    }

    public function subscription_plans_pay()
    {
        return view('frontend.pages.subscription-plans-pay');
    }

    public function deemed_fees()
    {
        $list =  DB::table('new_deemds')->get();
        return view('frontend.pages.deemed_fees', compact('list'));
    }

    public function deemed_details()
    {
        $list =  DB::table('deemed_details')->get();
        return view('frontend.pages.deemed_details', compact('list'));
    }




    public function closing_rank(Request $request)
    {
        $state = 'all_indias';
        $list = DB::table($state)->groupBy('counseling_type')->get();
        if ($request->ajax()) {
            $state = $request->state;
            $list = DB::table(str_replace(' ', '_', strtolower($state)))->groupBy('counseling_type')->get();
            return view('frontend.pages.closing-rank_table', compact('state', 'list'));
        }
        return view('frontend.pages.closing-rank', compact('state', 'list'));
    }
    public function closing_rank_details(Request $request)
    {


        $state = $request->state;
        $counseling_type = $request->counseling_type;
        $list =  DB::table($state)->where('counseling_type', $counseling_type)->orderBy('id');
        $college = DB::table($state)->groupBy('college')->get();
        $course = DB::table($state)->groupBy('course')->get();
        $quota = DB::table($state)->groupBy('quota')->get();
        $category = DB::table($state)->groupBy('category')->get();

        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];
        $condition_year = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;
        $years = $request->year;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->year)) {
            foreach ($years as $year) {
                array_push($condition_year, ['year' => $year]);
            }
        }


        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_year) {
            foreach ($condition_year as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.closing-rank-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.closing-rank-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function all_india_counselings()
    {
        return view('frontend.pages.all-india-counselings');
    }
    public function state_wise_counselings()
    {
        return view('frontend.pages.state-wise-counselings');
    }
    public function state_wise_counseling_details()
    {
        return view('frontend.pages.state-wise-counseling-details');
    }
    public function about_us()
    {
        return view('frontend.pages.about-us');
    }
    public function term_condition()
    {
        return view('frontend.pages.term-and-condition');
    }
    public function privacy_policy()
    {
        return view('frontend.pages.privacy-policy');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('user_dashboard');
        } else {
            return view('frontend.auth.login');
        }
    }
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('user_dashboard');
        } else {
            return view('frontend.auth.register');
        }
    }



    public function send_otp_sms($to, $name, $text)
    {
          Msg91::sms()->to('91'.$to)->flow('64a6b9d1d6fc057c15503ab2')->variable('business_name', 'campusbull')->variable('otp', $text)->send();
    }

    public function otp_send(Request $request)
    {

        $mobileregex = "/^[6-9][0-9]{9}$/";
        if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
            $customer = User::where('phone', $request->phone)->count();
            if ($customer == 0) {
                $mob_otp = rand(1000, 9999);
                Session::forget('mob_otp');
                Session::put('mob_otp', [$mob_otp]);

                $this->send_otp_sms($request->phone, 'User', $mob_otp);
                return response()->json(['status' => true, 'otp' => $mob_otp]);
            } else {
                return response()->json(['status' => false]);
            }
        } else {
            return response()->json(['status' => 'Wrong']);
        }
    }

    public function otp_forgot_password(Request $request)
    {

        $mobileregex = "/^[6-9][0-9]{9}$/";
        if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
            $customer = User::where('phone', $request->phone)->count();
            if ($customer == 1) {
                $mob_otp = rand(1000, 9999);;
                Session::forget('mob_otp');
                Session::put('mob_otp', [$mob_otp]);

                $this->send_otp_sms($request->phone, 'User', $mob_otp);
                return response()->json(['status' => true, 'otp' => $mob_otp]);
            } else {
                return response()->json(['status' => false]);
            }
        } else {
            return response()->json(['status' => 'Wrong']);
        }
    }


    public function check_otp(Request $request)
    {

        $otp = Session::get('mob_otp');
        if ($otp[0] == $request->otp) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }

    public function user_login(Request $request)
    {



        $validator =  Validator::make($request->all(), [
            'phone' => 'required|exists:users'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $user = User::where('phone', $request->phone)->first();
            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {
                    if ($request->has('remember')) {
                        auth()->login($user, true);
                    } else {
                        auth()->login($user, false);
                    }
                    Session::flash('success', 'Login Successfully !');
                    return redirect()->route('home_user');
                } else {
                    $validator->getMessageBag()->add('password', 'Password Wrong');
                    return back()->withErrors($validator)->withInput();
                }
            } else {
                $validator->getMessageBag()->add('email', 'Wrong Login Attempt!');
                return back()->withErrors($validator)->withInput();
            }
        }


        $user = User::where('phone', $request->phone)->first();
        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                if ($request->has('remember')) {
                    auth()->login($user, true);
                } else {
                    auth()->login($user, false);
                }
                return redirect()->route('home_user');
            }
        } else {
        }
    }

    public function register_user(Request $request)
    {

        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'unique:users'],
            'password' => ['required'],
            'exam_type'=>'required',
            'score'=>'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            // $otp= Session::get('mob_otp');


            $user = new User;
            $user->user_type = 'customer';
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();

            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->exam_type = $request->exam_type;
            $customer->score = $request->score;
            $customer->save();

            auth()->login($user, true);
            Session::flash('success', 'Register Successfully !');
            return redirect()->route('home_user');
        }
    }


    public function password_forgot(Request $request)
    {
        $otp = Session::get('mob_otp');
        if ($request->check_otp == $otp[0]) {
            $user = User::where('phone', $request->phone)->first();
            $user->password = Hash::make($request->password);;
            $user->save();
        }
        Session::flash('success', 'Password Reset Successfully !');
        return redirect()->route('user-login');
    }


    public function user_dashboard()
    {


        if (Auth::check()) {
            return view('frontend.user.profile');
        }
        return redirect()->route('user-login');
    }

    public function user_logout(Request $request)
    {

        Auth::logout();
        $request->session()->flush();
        Session::flash('success', 'Logout Successfully !');
        return redirect()->route('user-login');
    }

    public function profile_update(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $customer = Customer::where('user_id', $user->id)->first();
        $customer->dob = $request->dob;
        $customer->state = $request->state;
        $customer->score = $request->score;
        if (Auth::user()->id == 13) {
            $customer->rank = $request->rank;
        } else {
            if (!empty($request->rank) && ($customer->rank_count < 2)) {
                $customer->rank = $request->rank;
                $customer->rank_count = $customer->rank_count + 1;
            }
        }

        if ($request->profile_image !== null) {
            $file = $request->file('profile_image');
            $photo_image = date('YmdHi') . $file->getClientOriginalName();
            $customer->profile_image = $photo_image;
            $file->move(public_path('/front_css/assets/images/' . $user->id), $photo_image);
        }
        $customer->save();
        Session::flash('success', 'Profile Updated Successfully');
        return 1;
    }

    function forgot_password(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('user_dashboard');
        } else {
            return view('frontend.auth.forgot-password');
        }
    }

    public function bond_details(Request $request)
    {
        $state = $request->state;
        //  $counseling_type=$request->counseling_type;
        $list =  DB::table($state)->where('year', 2023)->orderBy('id');
        $college = DB::table($state)->where('year', 2023)->groupBy('college')->get();
        $course = DB::table($state)->where('year', 2023)->groupBy('course')->get();
        $quota = DB::table($state)->where('year', 2023)->groupBy('quota')->get();
        $category = DB::table($state)->where('year', 2023)->groupBy('category')->get();


        if ($request->type == 'all') {
            $quota = DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->groupBy('quota')->get();
            $list =  DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'deemed') {
            $quota = DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('quota')->get();
            $list =  DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'dnb') {
            $quota = DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('quota')->get();
            $list =  DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'nbe') {
            $quota = DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('quota')->get();
            $list =  DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('college')->orderBy('id');
        }


        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.bond-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.bond-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function stipend_details(Request $request)
    {
        $state = $request->state;
        //  $counseling_type=$request->counseling_type;
        $list =  DB::table($state)->where('year', 2023)->orderBy('id');
        $college = DB::table($state)->where('year', 2023)->groupBy('college')->get();
        $course = DB::table($state)->where('year', 2023)->groupBy('course')->get();
        $quota = DB::table($state)->where('year', 2023)->groupBy('quota')->get();
        $category = DB::table($state)->where('year', 2023)->groupBy('category')->get();

        if ($state == 'bihars' || $state == 'jammu_and_kashmirs' || $state == 'rajasthans' || $state == 'tamil_nadus') {
            $list = $list->where('rank', '!=', "[null]");
            $round = 1;
        }
        if ($state == 'uttar_pradeshes' || $state == 'andhra_pradeshes' || $state == 'himachal_pradeshes' || $state == 'karnatakas' || $state == 'manipurs' || $state == 'meghalayas' || $state == 'odishas' || $state == 'tripuras') {
            $list = $list->where('rank', '!=', "[null,null]");
            $round = 2;
        }
        if ($state == 'chandigarhs'  || $state == 'haryanas' || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'uttarakhands' || $state == 'west_bengals') {
            $list = $list->where('rank', '!=', "[null,null,null]");
            $round = 3;
        }
        if ($state == 'chhattisgarhs'  || $state == 'jharkhands' || $state == 'punjabs') {
            $list = $list->where('rank', '!=', "[null,null,null,null]");
            $round = 4;
        }
        if ($state == 'assams') {
            $list = $list->where('rank', '!=', '["-","-","-"]');
            $round = 3;
        }
        if ($state == 'gujarats') {
            $list = $list->where('rank', '!=', '["-","-","-","-"]');
            $round = 4;
        }
        if ($state == 'andhra_pradeshes'  || $state == 'telanganas') {
            $list = $list->where('rank', '!=', "[null,null,null,null,null]");
            $round = 5;
        }
        if ($state == 'all_indias' || $state == 'maharashtras') {
            $list = $list->where('rank', '!=', "[null,null,null,null,null,null]");
            $round = 6;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.stipend-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.stipend-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }


    public function state_document(Request $request)
    {
        $data = StateDocument::where('state_name', $request->state)->first();
        return $data->state_desc;
    }

    public function fee_details(Request $request)
    {
        $state = $request->state;
        //  $counseling_type=$request->counseling_type;
        $list =  DB::table($state)->where('year', 2023)->orderBy('id');
        $college = DB::table($state)->where('year', 2023)->groupBy('college')->get();
        $course = DB::table($state)->where('year', 2023)->groupBy('course')->get();
        $quota = DB::table($state)->where('year', 2023)->groupBy('quota')->get();
        $category = DB::table($state)->where('year', 2023)->groupBy('category')->get();

        if ($state == 'bihars' || $state == 'jammu_and_kashmirs' || $state == 'rajasthans' || $state == 'tamil_nadus') {
            $list = $list->where('rank', '!=', "[null]");
            $round = 1;
        }
        if ($state == 'uttar_pradeshes' || $state == 'andhra_pradeshes' || $state == 'himachal_pradeshes' || $state == 'karnatakas' || $state == 'manipurs' || $state == 'meghalayas' || $state == 'odishas' || $state == 'tripuras') {
            $list = $list->where('rank', '!=', "[null,null]");
            $round = 2;
        }
        if ($state == 'chandigarhs'  || $state == 'haryanas' || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'uttarakhands' || $state == 'west_bengals') {
            $list = $list->where('rank', '!=', "[null,null,null]");
            $round = 3;
        }
        if ($state == 'chhattisgarhs'  || $state == 'jharkhands' || $state == 'punjabs') {
            $list = $list->where('rank', '!=', "[null,null,null,null]");
            $round = 4;
        }
        if ($state == 'assams') {
            $list = $list->where('rank', '!=', '["-","-","-"]');
            $round = 3;
        }
        if ($state == 'gujarats') {
            $list = $list->where('rank', '!=', '["-","-","-","-"]');
            $round = 4;
        }
        if ($state == 'andhra_pradeshes'  || $state == 'telanganas') {
            $list = $list->where('rank', '!=', "[null,null,null,null,null]");
            $round = 5;
        }
        if ($state == 'all_indias' || $state == 'maharashtras') {
            $list = $list->where('rank', '!=', "[null,null,null,null,null,null]");
            $round = 6;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.fee-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.fee-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function all_india_stipend_details(Request $request)
    {
        $state = $request->state;

        //  $counseling_type=$request->counseling_type;
        if ($request->type == 'all') {

            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'deemed') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'dnb') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['DNB Post MBBS'])->groupBy('college')->orderBy('id');
        }
        if ($request->type == 'nbe') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['NBE Diploma'])->groupBy('college')->orderBy('id');
        }
        $college = DB::table($state)->where('year', 2023)->groupBy('college')->get();
        $course = DB::table($state)->where('year', 2023)->groupBy('course')->get();
        $quota = DB::table($state)->where('year', 2023)->groupBy('quota')->get();
        $category = DB::table($state)->where('year', 2023)->groupBy('category')->get();

        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.all-stipend-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.all-stipend-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function all_india_fee_details(Request $request)
    {
        $state = $request->state;
        //  $counseling_type=$request->counseling_type;
        if ($request->type == 'all') {

            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id');
        }
        if ($request->type == 'deemed') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->orderBy('id');
        }
        if ($request->type == 'dnb') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['DNB Post MBBS'])->orderBy('id');
        }
        if ($request->type == 'nbe') {
            $list =  DB::table($state)->where('year', 2023)->whereIn('quota', ['NBE Diploma'])->orderBy('id');
        }
        $college = DB::table($state)->where('year', 2023)->groupBy('college')->get();
        $course = DB::table($state)->where('year', 2023)->groupBy('course')->get();
        $quota = DB::table($state)->where('year', 2023)->groupBy('quota')->get();
        $category = DB::table($state)->where('year', 2023)->groupBy('category')->get();

        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }



        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.all-fee-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.all-fee-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function all_india_closing_rank_details(Request $request)
    {
        $state = $request->state;
        if ($request->type == 'all') {

            $list =  DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id');
            $college = DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id')->groupBy('college')->get();
            $course = DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id')->groupBy('course')->get();
            $quota = DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id')->groupBy('quota')->get();
            $category = DB::table($state)->whereIn('quota', ['AIQ', 'AMU', 'BHU', 'CIQ', 'DU', 'IP'])->orderBy('id')->groupBy('category')->get();
        }
        if ($request->type == 'deemed') {
            $list =  DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->orderBy('id');
            $college = DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('college')->get();
            $course = DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('course')->get();
            $quota = DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('quota')->get();
            $category = DB::table($state)->whereIn('quota', ['MNG', 'NRI', 'JM', 'MM'])->groupBy('category')->get();
        }
        if ($request->type == 'dnb') {
            $list =  DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->orderBy('id');
            $college = DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('college')->get();
            $course = DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('course')->get();
            $quota = DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('quota')->get();
            $category = DB::table($state)->whereIn('quota', ['DNB Post MBBS'])->groupBy('category')->get();
        }
        if ($request->type == 'nbe') {
            $list =  DB::table($state)->whereIn('quota', ['NBE Diploma'])->orderBy('id');
            $college = DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('college')->get();
            $course = DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('course')->get();
            $quota = DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('quota')->get();
            $category = DB::table($state)->whereIn('quota', ['NBE Diploma'])->groupBy('category')->get();
        }


        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }


        $condition_college = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_category = [];

        $colleges = $request->college;
        $courses = $request->course;
        $quotas = $request->quota;
        $categories = $request->category;



        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
        }
        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
        }
        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
        }


        $list = $list->where(function ($query) use ($condition_college) {
            foreach ($condition_college as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_quota) {
            foreach ($condition_quota as $key => $value) {
                $query->orWhere($value);
            }
        })->where(function ($query) use ($condition_category) {
            foreach ($condition_category as $key => $value) {
                $query->orWhere($value);
            }
        });


        $list = $list->paginate(100);
        if ($request->ajax()) {
            return view('frontend.pages.all-india-closing-rank-details_table', compact('list', 'college', 'course', 'quota', 'category', 'round'));
        }

        return view('frontend.pages.all-india-closing-rank-details', compact('list', 'college', 'course', 'quota', 'category', 'round'));
    }

    public function student_report(Request $request)
    {

        return view('frontend.pages.student-report');
    }





    public function get_category(Request $request)
    {
        $state = $request->state;

        $condition_course = $request->course;

        $category = DB::table('all_indias')->where(function ($query) use ($condition_course) {
            foreach ($condition_course as $key => $value) {
                $query->orWhere('course', 'like', '%' . $value . '%');
            }
        })->groupBy('course')->get('course');

        return $category;
    }

    public function student_report_details(Request $request)
    {

        //return $request->all();
        $counselling_preference = $request->counselling_preference;
        $input = $request->all();
        return view('frontend.pages.student-report_table', compact('counselling_preference', 'input'));
    }

    public function student_report_closing_rank_details(Request $request)
    {


        $state = $request->state;
        $budget = request('budget');
        $rank = request('rank');
        $type = request('type');
        $cour = $request->course;

        if ($request->type == 'all') {
            $list =  DB::table($state)->where('course_fee', '<', $request->budget)->where(function ($query) use ($request) {
                $query->where('quota', 'AIQ')->orwhere('quota', 'AMU')->orwhere('quota', 'BHU')->orwhere('quota', 'CIQ')->orwhere('quota', 'DU')->orwhere('quota', 'IP')->orwhere('quota', 'DNB Post MBBS')->orwhere('quota', 'NBE Diploma');
            })->orderBy('id');
            $category = DB::table($state)->groupBy('category')->get();
            $quota = DB::table($state)->orderBy('id')->groupBy('quota')->get();
            $college = DB::table($state)->where(function ($query) use ($request) {
                $query->where('quota', 'AIQ')->orwhere('quota', 'AMU')->orwhere('quota', 'BHU')->orwhere('quota', 'CIQ')->orwhere('quota', 'DU')->orwhere('quota', 'IP')->orwhere('quota', 'DNB Post MBBS')->orwhere('quota', 'NBE Diploma');
            })->groupBy('college')->get();
        }
        if ($request->type == 'deemed') {
            $list =  DB::table($state)->where('course_fee', '<', $request->budget)->where(function ($query) use ($request) {
                $query->where('quota', 'MNG')->orwhere('quota', 'NRI')->orwhere('quota', 'JM')->orwhere('quota', 'MM');
            })->orderBy('id');
            $category = DB::table($state)->where(function ($query) use ($request) {
                $query->where('quota', 'MNG')->orwhere('quota', 'NRI')->orwhere('quota', 'JM')->orwhere('quota', 'MM');
            })->groupBy('category')->get();
            $quota = DB::table($state)->orderBy('id')->where(function ($query) use ($request) {
                $query->where('quota', 'MNG')->orwhere('quota', 'NRI')->orwhere('quota', 'JM')->orwhere('quota', 'MM');
            })->groupBy('quota')->get();
            $college = DB::table($state)->where(function ($query) use ($request) {
                $query->where('quota', 'MNG')->orwhere('quota', 'NRI')->orwhere('quota', 'JM')->orwhere('quota', 'MM');
            })->groupBy('college')->get();
        }
        if ($request->type == 'state_home') {

            $list =  DB::table($state)->where(function ($query) use ($request) {
                $query->where('course_fee', '<', $request->budget);
            })->orderBy('id');
            $category = DB::table($state)->groupBy('category')->get();
            $quota = DB::table($state)->orderBy('id')->groupBy('quota')->get();
            $college = DB::table($state)->groupBy('college')->get();



            if ($state == 'goas') {
                $round = 1;
            }
            if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
                $round = 2;
            }

            if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

                $round = 3;
            }

            if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
                $round = 4;
            }

            if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
                $round = 5;
            }

            $condition_category = [];
            $condition_course = [];
            $condition_quota = [];
            $condition_college = [];
            $condition_year = [];


            $categories = $request->category;


            $courses = json_decode($request->course);


            $quotas = $request->quota;

            $colleges = $request->college;
            $year = $request->year;


            if (!empty($request->category)) {
                foreach ($categories as $categ) {
                    array_push($condition_category, ['category' => $categ]);
                }
                $list = $list->where(function ($query) use ($condition_category) {
                    foreach ($condition_category as $key => $value) {
                        $query->orWhere($value);
                    }
                });
            }

            if (!empty($request->course)) {
                foreach ($courses as $course) {
                    array_push($condition_course, ['course' => $course]);
                }
                $list = $list->where(function ($query) use ($condition_course) {
                    foreach ($condition_course as $key => $value) {
                        $query->orWhere($value);
                    }
                });
            }

            if (!empty($request->quota)) {
                foreach ($quotas as $quota) {
                    array_push($condition_quota, ['quota' => $quota]);
                }
                $list = $list->where(function ($query) use ($condition_quota) {
                    foreach ($condition_quota as $key => $value) {
                        $query->orWhere($value);
                    }
                });
            }

            if (!empty($request->college)) {
                foreach ($colleges as $college) {
                    array_push($condition_college, ['college' => $college]);
                }
                $list = $list->where(function ($query) use ($condition_college) {
                    foreach ($condition_college as $key => $value) {
                        $query->orWhere($value);
                    }
                });
            }
            if (!empty($request->year)) {
                foreach ($year as $ye) {
                    array_push($condition_year, ['year' => $ye]);
                }
                $list = $list->where(function ($query) use ($condition_year) {
                    foreach ($condition_year as $key => $value) {
                        $query->orWhere($value);
                    }
                });
            }



            $new_array = [];
            $list = $list->get();
            foreach ($list as $data) {
                if (!empty($data->rank))
                    $rank = json_decode($data->rank);
                foreach ($rank as $rk) {
                    if ($rk > $request->rank) {
                        array_push($new_array, $data);
                        break;
                    }
                }
            }


            if (!empty($request->submit)) {
                $list = $new_array;
                $pdf = PDF::loadView('frontend.pages.student-report-closing-rank-details_download', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
                return $pdf->download('sdfsf.pdf');
            }
            $list = $this->paginate($new_array);
            if ($request->ajax()) {
                return view('frontend.pages.student-report-closing-rank-details_table', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
            }
            return view('frontend.pages.student-report-closing-rank-details', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
        }
        if ($request->type == 'state_other') {
            $list =  DB::table($state)->where(function ($query) use ($request) {
                $query->where('course_fee', '<', $request->budget);
            })->orderBy('id');
            $category = DB::table($state)->groupBy('category')->get();
            $quota = DB::table($state)->orderBy('id')->groupBy('quota')->get();
            $college = DB::table($state)->groupBy('college')->get();

            if ($state == 'bihars') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'Bihar Priv-Open')->orWhere('quota', 'Bihar Priv-Minority')->orWhere('quota', 'Bihar Priv-NRI');
                });
            }
            if ($state == 'chhattisgarhs') {
                $list = $list->where('quota', 'CHTSGRH-Private')->where(function ($query) use ($request) {
                    $query->where('category', 'NRI-UR')->orWhere('category', 'NRI-UR_FEMALE')->orWhere('category', 'UR')->orWhere('category', 'UR-FEMALE')->orWhere('category', 'NRI-OBC')->orWhere('category', 'NRI-ST');
                });
            }

            if ($state == 'haryanas') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('category', 'MNG')->orwhere('category', 'NRI');
                })->where(function ($query) use ($request) {
                    $query->where('quota', 'HAR Priv-Mgmt')->orwhere('quota', 'Haryana Priv NRI');
                });
            }

            if ($state == 'karnatakas') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('category', 'MNG')->orwhere('category', 'NRI')->orwhere('category', 'OPN');
                })->where(function ($query) use ($request) {
                    $query->where('quota', 'KAR NRI Quota')->orwhere('quota', 'KAR Others (Inst.Q)')->orwhere('quota', 'KAR Priv Seats-Open');
                });
            }
            if ($state == 'madhya_pradeshes') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('category', 'UR (NON DOMICILE)')->orwhere('category', 'UR/NRI (NON DOMICILE)');
                })->where(function ($query) use ($request) {
                    $query->where('quota', 'MP Priv-NRI')->orwhere('quota', 'MP Priv-Open')->orwhere('quota', 'MP Priv-NonDomicile')->orwhere('quota', 'MP Priv-NRINonDomicil');
                });
            }
            if ($state == 'pondicherries') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'PY Mgmt-Open');
                });
            }
            if ($state == 'rajasthans') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'RAJ Priv-Mgmt Quota')->orwhere('quota', 'RAJ Priv-All India');
                });
            }
            if ($state == 'tamil_nadus') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'TN Mgmt Quota')->orwhere('quota', 'TN NRI Quota');
                });
            }
            if ($state == 'telanganas') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'TELMgmt-MQ1-CatB-All')->orwhere('quota', 'TELMgmt-MQ2-CatC-NRI')->orwhere('quota', 'TELMgmt-MQ3-CatC-Inst');
                });
            }
            if ($state == 'uttarakhands') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'UK Priv-AllIndia/Mgmt')->orwhere('quota', 'UK Priv-AllIndia/Mgmt');
                });
            }
            if ($state == 'uttar_pradeshes') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'UP Priv-Min. Quota')->orwhere('quota', 'UP Priv-Open Quota');
                });
            }
            if ($state == 'west_bengals') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'WB Mgmt Quota')->orwhere('quota', 'WB NRI Quota');
                });
            }
            if ($state == 'andhra_pradeshes') {
                $list = $list->where(function ($query) use ($request) {
                    $query->where('quota', 'APMgmt-S1-CatB-All')->orwhere('quota', 'APMgmt-S2-CatC-NRI')->orwhere('quota', 'APMgmt-S3-CatC-Inst')->orwhere('quota', 'APMgmt-S1-All-CatB');
                });
            }
        }


        if ($state == 'goas') {
            $round = 1;
        }
        if ($state == 'bihars' || $state == 'rajasthans'  || $state == 'manipurs'   || $state == 'tripuras' || $state == 'meghalayas') {
            $round = 2;
        }

        if ($state == 'chhattisgarhs' || $state == 'uttarakhands' || $state == 'chandigarhs' || $state == 'odishas'  ||  $state == 'karnatakas' || $state == 'gujarats'  || $state == 'jammu_and_kashmirs'   || $state == 'keralas' || $state == 'madhya_pradeshes' || $state == 'pondicherries' || $state == 'assams' || $state == 'punjabs'   || $state == 'tamil_nadus' || $state == 'telanganas' || $state == 'himachal_pradeshes') {

            $round = 3;
        }

        if ($state == 'haryanas' || $state == 'jharkhands' || $state == 'maharashtras' || $state == 'uttar_pradeshes' || $state == 'west_bengals') {
            $round = 4;
        }

        if ($state == 'andhra_pradeshes' || $state == 'all_indias') {
            $round = 5;
        }

        $condition_category = [];
        $condition_course = [];
        $condition_quota = [];
        $condition_college = [];
        $condition_year = [];




        $categories = $request->category;
        $year = $request->year;


        $courses = json_decode($request->course);


        $quotas = $request->quota;

        $colleges = $request->college;


        if (!empty($request->category)) {
            foreach ($categories as $categ) {
                array_push($condition_category, ['category' => $categ]);
            }
            $list = $list->where(function ($query) use ($condition_category) {
                foreach ($condition_category as $key => $value) {
                    $query->orWhere($value);
                }
            });
        }

        if (!empty($request->course)) {
            foreach ($courses as $course) {
                array_push($condition_course, ['course' => $course]);
            }
            $list = $list->where(function ($query) use ($condition_course) {
                foreach ($condition_course as $key => $value) {
                    $query->orWhere($value);
                }
            });
        }

        if (!empty($request->quota)) {
            foreach ($quotas as $quota) {
                array_push($condition_quota, ['quota' => $quota]);
            }
            $list = $list->where(function ($query) use ($condition_quota) {
                foreach ($condition_quota as $key => $value) {
                    $query->orWhere($value);
                }
            });
        }

        if (!empty($request->college)) {
            foreach ($colleges as $college) {
                array_push($condition_college, ['college' => $college]);
            }
            $list = $list->where(function ($query) use ($condition_college) {
                foreach ($condition_college as $key => $value) {
                    $query->orWhere($value);
                }
            });
        }

        if (!empty($request->year)) {
            foreach ($year as $ye) {
                array_push($condition_year, ['year' => $ye]);
            }
            $list = $list->where(function ($query) use ($condition_year) {
                foreach ($condition_year as $key => $value) {
                    $query->orWhere($value);
                }
            });
        }



        $new_array = [];
        $list = $list->get();
        foreach ($list as $data) {
            if (!empty($data->rank)) {
                $rank = json_decode($data->rank);
                if (!empty($rank)) {
                    foreach ($rank as $rk) {
                        if ($rk > $request->rank) {
                            array_push($new_array, $data);
                            break;
                        }
                    }
                }
            }
        }






        if (!empty($request->submit)) {
            $list = $new_array;
            $pdf = PDF::loadView('frontend.pages.student-report-closing-rank-details_download', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
            return $pdf->download('sdfsf.pdf');
        }
        $list = $this->paginate($new_array);
        if ($request->ajax()) {
            return view('frontend.pages.student-report-closing-rank-details_table', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
        }
        return view('frontend.pages.student-report-closing-rank-details', compact('list', 'category', 'quota', 'round', 'state', 'type', 'rank', 'budget', 'cour', 'college'));
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
    //     return view('frontend.pages.student-report-closing-rank-details_table',compact('list','category','quota','round','state','type','rank','budget','cour','college'));
    //     }
    //       return view('frontend.pages.student-report-closing-rank-details',compact('list','category','quota','round','state','type','rank','budget','cour','college'));


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




    //         $pdf = PDF::loadView('frontend.pages.student-report-closing-rank-details_download',compact('list','category','quota','round','state','type','rank','budget','cour','college'));
    //         return $pdf->download('sdfsf.pdf');


    // }



    // public function user_signup(){
    //     if(Auth::check()){
    //         return redirect()->route('user_dashboard');
    //     }
    //     return view('frontend.auth.signup');
    // }

    // public function user_login(){
    //     if(Auth::check()){
    //         return redirect()->route('user_dashboard');
    //     }
    //     return view('frontend.auth.login');
    // }








    //    public function user_account(){
    //         $user = User::where('id',Auth::user()->id)->first();
    //         return view('frontend.user.accountReview',compact('user'));
    //     }


    public function payment(Request $request)
    {
        $input = $request->all();
        $api = new Api('rzp_live_moDw0OHd2GbaCu', 'zDEOcdbYf0nfW3JsRZQwc5sX');

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if (count($input)  && !empty($request->razorpay_payment_id)) {
            $payment_detalis = null;
            try {
                $response = $api->payment->fetch($request->razorpay_payment_id)->capture(array('amount' => $payment['amount']));

                if ($response['amount'] / 100 == 1800) {
                    $plan_name = 'Plan of 1800';
                } else {
                    $plan_name = 'Plan of 21999';
                }

                Payment::create([
                    'user_id' => Auth::user()->id,
                    'payment_id' => $response['id'],
                    'payment_amount' => $response['amount'] / 100,
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'plan_name' => $plan_name,
                    'plan_status' => 'success',
                ]);

                $payment_detalis = json_encode(array('id' => $response['id'], 'method' => $response['method'], 'amount' => $response['amount'], 'currency' => $response['currency']));
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        return $payment_detalis;
    }

    function update_status_subscription(Request $request)
    {
        if ($request->stat == 'enable') {
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
        } else {
            Payment::where('user_id', $request->user_id)->delete();
            return 0;
        }
    }

    public function update_sql(Request $request)
    {
        $list =  west_bengal::get();
        foreach ($list as $data) {
            $data->course_fee = (int) filter_var($data->course_fee, FILTER_SANITIZE_NUMBER_INT);
            $data->private_mgmt_fee = (int) filter_var($data->private_mgmt_fee, FILTER_SANITIZE_NUMBER_INT);
            $data->nri_fee = (int) filter_var($data->nri_fee, FILTER_SANITIZE_NUMBER_INT);
            $data->bond_years = (int) filter_var($data->bond_years, FILTER_SANITIZE_NUMBER_INT);
            $data->bond_penalty = (int) filter_var($data->bond_penalty, FILTER_SANITIZE_NUMBER_INT);
            $data->save();
        }
    }

    public function get_college_hospital(Request $request)
    {

        return view('frontend.pages.college-hospital');
    }

    public function deemed_hospital_details(Request $request)
    {

        return view('frontend.pages.deemed-college-hospital');
    }


    public function choice_filling_deemed(Request $request)
    {

        if (!empty($request->type)) {
            if ($request->type == 'all_india') {
                return view('frontend.pages.choice_filling_deemed_all');
            }
            if ($request->type == 'dnb') {
                return view('frontend.pages.choice_filling_deemed_dnb');
            }
        }


        return view('frontend.pages.choice_filling_deemed');
    }


    public function get_college_hospital_detail(Request $request)
    {

        $course = $request->course;
        $list =  DB::table($course)->orderBy('id')->get();
        return view('frontend.pages.college-hospital-detail', compact('list'));
    }

    public function choice_filling_deemed_detail(Request $request)
    {

        $course = $request->course;
        $list =  DB::table($course)->orderBy('id')->get();
        return view('frontend.pages.choice_filling_deemed_details', compact('list'));
    }


    public function fetchtoken(Request $request)
    {
        $user_id = Auth::user()->id;
        $phone = Auth::user()->phone;
        $email = Auth::user()->email;
        $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api.cashfree.com/pg/orders",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{\"customer_details\":{\"customer_id\":\"$user_id\",\"customer_email\":\"$email\",\"customer_phone\":\"$phone\"},\"order_amount\":2350,\"order_currency\":\"INR\",\"order_note\":\"Payment For Subscription\"}",
        //     CURLOPT_HTTPHEADER => [
        //         "Accept: application/json",
        //         "Content-Type: application/json",
        //         "x-api-version: 2022-01-01",
        //         "x-client-id: 218632edd659bee68cc4de79f4236812",
        //         "x-client-secret: 58ca19768b2af4b64afbc2a91ddf91208c561a40"
        //     ],
        // ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array("error" => 1));
            echo "cURL Error #:" . $err;
            die();
        } else {
            $result = json_decode($response, true);
            header('Content-Type: application/json; charset=utf-8');
            $output = array("order_token" => $result["order_token"]);
            echo json_encode($output);
            die();
        }
    }

    public function checkstatus(Request $request)
    {
        $curl = curl_init();

        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api.cashfree.com/pg/orders/" . $_GET["order_id"],
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => [
        //         "Accept: application/json",
        //         "Content-Type: application/json",
        //         "x-api-version: 2021-05-21",
        //         "x-client-id: 218632edd659bee68cc4de79f4236812",
        //         "x-client-secret: 58ca19768b2af4b64afbc2a91ddf91208c561a40"
        //     ],
        // ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(array("error" => 1));
            echo "cURL Error #:" . $err;
            die();
        } else {
            $result = json_decode($response, true);
            header('Content-Type: application/json; charset=utf-8');
            $output = array("order_status" => $result["order_status"]);
            if ($result["order_status"] == 'PAID') {
                Payment::create([
                    'user_id' => Auth::user()->id,
                    'payment_id' => $result['cf_order_id'],
                    'payment_amount' => 1990,
                    'method' => 'Cashfree',
                    'currency' => 'INR',
                    'plan_name' => 'Plan Of 1990',
                    'plan_status' => 'success',
                ]);
            }
            echo json_encode($output);
            die();
        }
    }

    public function new_deemed(Request $request)
    {
        $list =  DB::table('new_deemds')->orderBy('id')->get();
        foreach ($list as $data) {
            $all_india_data = all_india::where('quota', 'MNG')->where('course', $data->branch)->where('college', $data->college)->get();
            if (count($all_india_data) > 0) {
                foreach ($all_india_data as $all_india) {
                    $all_india_new = all_india::where('id', $all_india->id)->first();
                    $all_india_new->course_fee = $data->tuition_fees;
                    $all_india_new->save();
                }
            }
        }
    }


    public function medical_form_submit(Request $request)
    {


        $medical = $request->all();

        Enquiry::create($medical);


        return redirect()->back()->with('success', 'Form Submitted successfully.');
    }

    public function contact_us(Request $request)
    {


        $contact=new ContactUs;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Form Submitted successfully.');
    }

    public function enquiry(Request $request)
    {


        $enquiry=new Enquiry;
        $enquiry->name=$request->name;
        $enquiry->phone=$request->phone;
        $enquiry->email=$request->email;
        $enquiry->message=$request->message;
        $enquiry->collage_id=$request->collage_id;
        $enquiry->save();

        return redirect()->back()->with('success', 'Form Submitted successfully.');
    }


    public function all_enquiry(Request $request)
    {


        $enquirys = Enquiry::orderBy('id', 'desc')->get();
        return view('backend.admin.landingpage.index', compact('enquirys'));
    }

    public function all_contact(Request $request)
    {
        $contact_us = ContactUs::orderBy('id', 'desc')->get();
        return view('backend.admin.contact_us.index', compact('contact_us'));
    }

    public function collage_list(Request $request)
    {
        $collages = Collage::orderBy('id', 'desc');
        if($request->category){
            $collages= $collages->where('category',$request->category);
        }
        if($request->type){
            $collages= $collages->where('type',$request->type);
        }
        if($request->stream){
            $collages= $collages->where('stream',$request->stream);
        }
        if($request->state){
            $collages= $collages->where('state',$request->state);
        }
        $collages=$collages->paginate(10);
        return view('frontend.pages.college-list', compact('collages'));
    }

    public function collage_details($id)
    {
        $collage = Collage::find($id);
        return view('frontend.pages.college-details', compact('collage'));
    }

    public function course_details($id){
        $course = Course::find($id);
        return view('frontend.pages.course-details', compact('course'));
    }

    public function mark_vs_rank(Request $request){
     
        $data=[];
        if(!empty($request->mark)){
         $data=Rank::where('marks','>=',$request->mark)->orderBy('id','desc')->first();
        }
         return view('frontend.pages.mark_vs_rank',compact('data'));
        
       }
}
