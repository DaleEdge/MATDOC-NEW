<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Ug\Front\UgFrontController;
use App\Http\Controllers\Auth\GoogleController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Headers
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/console', [FrontController::class, 'console'])->name('console');
Route::get('/subscription-plans', [FrontController::class, 'subscription_plans'])->name('subscription_plans');
Route::get('/about-us', [FrontController::class, 'about_us'])->name('about_us');
Route::get('/contact-us', [FrontController::class, 'help'])->name('help');

// Redirect to Google OAuth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', function () {
    // Fetch Google user data
    $googleUser = Socialite::driver('google')->stateless()->user();

    // Check if the user already exists by email
    $user = User::where('email', $googleUser->getEmail())->first();

    if ($user) {
        // Update google_user_id if it's not set
        if (!$user->google_user_id) {
            $user->google_user_id = $googleUser->getId();
            $user->save();
        }

        // Log in the existing user
        Auth::login($user, true);

        // Check if mobile number exists; if not, redirect to mobile update modal
        if (is_null($user->mobile)) {
            return redirect()->route('index'); // Redirect to the mobile update modal
        }

    } else {
        // User doesn't exist, create a new user
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'google_user_id' => $googleUser->getId(),
        ]);

        // Log in the newly created user
        Auth::login($user, true);

        // Redirect to the mobile update modal to capture the mobile number
        return redirect()->route('index');
    }

    // If the user is logged in, redirect to the dashboard
    return redirect()->route('index');
});


// Route to show the additional registration form
Route::get('/user-register', function () {
    $googleUser = session('google_user');

    return view('auth.user-register', ['googleUser' => $googleUser]);
});

// Route to handle the form submission
Route::post('/user-register', function (Request $request) {
    $googleUser = session('google_user');

    // Create a new user with the additional fields
    $user = User::create([
        'name' => $request->name,
        'email' => $googleUser->getEmail(),
        'google_id' => $googleUser->getId(),
        'avatar' => $googleUser->getAvatar(),
        'password' => bcrypt(str_random(16)),
        'exam_type' => $request->exam_type,
        'score' => $request->score,
        'phone' => $request->phone,
    ]);

    // Log in the new user
    Auth::login($user, true);

    return redirect('/user_dashboard');
});

//Route::get('/deemed', [App\Http\Controllers\Front\FrontController::class, 'new_deemed']);
Route::get('/deemed_fees', [App\Http\Controllers\Front\FrontController::class, 'deemed_fees'])->name('deemed_fees');
Route::get('/deemed_details', [App\Http\Controllers\Front\FrontController::class, 'deemed_details'])->name('deemed_details');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::delete('/aiz-uploader/destroy/{id}', [AizUploadController::class, 'destroy']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');


Route::get('/home', [App\Http\Controllers\Front\FrontController::class, 'allotments_data'])->name('home_user');

Route::post('/subscription-plans-pay', [FrontController::class, 'subscription_plans_pay'])->name('subscription_plans_pay');

Route::get('/all-india-counselings', [FrontController::class, 'all_india_counselings'])->name('all_india_counselings');
Route::get('/deemed-hospital-details', [FrontController::class, 'deemed_hospital_details'])->name('deemed_hospital_details');
Route::get('/closing-rank', [FrontController::class, 'closing_rank'])->name('closing_rank');
Route::get('/closing-rank-details', [FrontController::class, 'closing_rank_details'])->name('closing_rank_details');
Route::get('/bond-details', [FrontController::class, 'bond_details'])->name('bond_details');
Route::get('/stipend-details', [FrontController::class, 'stipend_details'])->name('stipend_details');
Route::get('/fee-details', [FrontController::class, 'fee_details'])->name('fee_details');
Route::get('/state-wise-counselings', [FrontController::class, 'state_wise_counselings'])->name('state_wise_counselings');
Route::get('/state-wise-counseling-details-andhra', [FrontController::class, 'state_wise_counseling_details'])->name('state_wise_counseling_details_andhra');
Route::get('/state-wise-counseling-details', [FrontController::class, 'state_wise_counseling_details'])->name('state_wise_counseling_details')->middleware("checkSubscription");
Route::get('/college-list', [FrontController::class, 'collage_list'])->name('college_list');
Route::get('/college-details/{id}', [FrontController::class, 'collage_details'])->name('college_details');
Route::get('/term-and-condition', [FrontController::class, 'term_condition'])->name('term_condition');
Route::get('/privacy-policy', [FrontController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/state-document', [FrontController::class, 'state_document'])->name('state_document');
Route::post('rozer/payment/pay-success', [FrontController::class, 'payment'])->name('payment.rozer');
Route::view('/course', 'frontend.pages.course')->name('course');
Route::get('/course-details/{id}', [FrontController::class, 'course_details'])->name('course_details');
Route::view('/services', 'frontend.pages.services')->name('services');
Route::view('/service-details', 'frontend.pages.service-details')->name('service_details');

Route::get('/student-report', [FrontController::class, 'student_report'])->name('student_report');
Route::post('/student-report-details', [FrontController::class, 'student_report_details'])->name('student_report_details');
Route::post('/student-report-closing-rank-details', [FrontController::class, 'student_report_closing_rank_details'])->name('student_report_closing_rank_details');
// Route::post('/student-report-closing-rank-details_download', [FrontController::class, 'studen_report_download'])->name('student_report_closing_rank_details_download');

Route::get('/all-india-stipend-details', [FrontController::class, 'all_india_stipend_details'])->name('all_india_stipend_details')->middleware("checkSubscription");
Route::get('/all-india-fee-details', [FrontController::class, 'all_india_fee_details'])->name('all_india_fee_details')->middleware("checkSubscription");
Route::get('/all-india-closing-rank-details', [FrontController::class, 'all_india_closing_rank_details'])->name('all_india_closing_rank_details')->middleware("checkSubscription");

Route::get('/user-login', [FrontController::class, 'login'])->name('user-login');
Route::get('/user-register', [FrontController::class, 'register'])->name('user-register');
Route::get('/user_dashboard', [FrontController::class, 'user_dashboard'])->name('user_dashboard');
Route::post('/profile_update', [FrontController::class, 'profile_update'])->name('profile_update');
Route::get('/user-forgot-password', [FrontController::class, 'forgot_password'])->name('forgot_password');


Route::post('otp_send', [FrontController::class, 'otp_send'])->name('otp_send');
Route::post('check_otp', [FrontController::class, 'check_otp'])->name('check_otp');
Route::post('otp_forgot_password', [FrontController::class, 'otp_forgot_password'])->name('otp_forgot_password');


Route::post('user_login', [FrontController::class, 'user_login'])->name('user_login');
Route::post('register_user', [FrontController::class, 'register_user'])->name('register_user');
Route::get('/user_logout', [FrontController::class, 'user_logout'])->name('user_logout');
Route::post('password_forgot', [FrontController::class, 'password_forgot'])->name('password_forgot');


Route::get('/get_category', [FrontController::class, 'get_category'])->name('get_category');

Route::post('/update_status_subscription', [FrontController::class, 'update_status_subscription'])->name('update_status_subscription');

Route::get('/get_college_hospital', [FrontController::class, 'get_college_hospital'])->name('get_college_hospital');
Route::get('/get_college_hospital_detail', [FrontController::class, 'get_college_hospital_detail'])->name('get_college_hospital_detail');

Route::view('/dnb-beds', 'frontend.pages.dnb_beds');
Route::get('/fetchtoken', [FrontController::class, 'fetchtoken'])->name('fetchtoken');
Route::get('/checkstatus', [FrontController::class, 'checkstatus'])->name('checkstatus');


Route::get('/choice_filling_deemed', [FrontController::class, 'choice_filling_deemed'])->name('choice_filling_deemed');
Route::get('/choice_filling_deemed_detail', [FrontController::class, 'choice_filling_deemed_detail'])->name('choice_filling_deemed_detail');

Route::get('/update_sql', [FrontController::class, 'update_sql'])->name('update_sql');

Route::view('pg-medical-admission', 'frontend.pages.landing-page')->name('pg-medical-admission');

Route::post('medical-admission-form', [FrontController::class, 'medical_form_submit'])->name('medical-admission-form');

Route::post('contact_us', [FrontController::class, 'contact_us'])->name('contact_us');

Route::post('enquiry', [FrontController::class, 'enquiry'])->name('enquiry');

Route::get('/mark_vs_rank', [FrontController::class, 'mark_vs_rank'])->name('mark_vs_rank');

Route::get('/seat-matrix', [FrontController::class, 'seat_matrix'])->name('seat_matrix');
Route::get('/seat-matrix-details', [FrontController::class, 'seat_matrix_details'])->name('seat_matrix_details');
Route::get('/fees-stipend-bond', [FrontController::class, 'fees_stipend_bond'])->name('fees_stipend_bond');

// Filters
Route::get('/get_sessions', [FrontController::class, 'get_sessions'])->name('get_sessions');
Route::get('/get_rounds', [FrontController::class, 'get_rounds'])->name('get_rounds');
Route::get('/get_quota', [FrontController::class, 'get_quota'])->name('get_quota');
Route::get('/get_categories', [FrontController::class, 'get_categories'])->name('get_categories');
Route::get('/get_states', [FrontController::class, 'get_states'])->name('get_states');
Route::get('/get_institutes', [FrontController::class, 'get_institutes'])->name('get_institutes');
Route::get('/get_institute_types', [FrontController::class, 'get_institute_types'])->name('get_institute_types');
Route::get('/get_courses', [FrontController::class, 'get_courses'])->name('get_courses');

Route::get('/mobile-number-update', [FrontController::class, 'mobile_number_update'])->name('mobile_number_update');

Route::group(['prefix' => 'ug'], function () {

    Route::get('/home', [UgFrontController::class, 'allotments_data'])->name('ug.home_user');
    Route::get('/all-india-counselings', [UgFrontController::class, 'all_india_counselings'])->name('ug.all_india_counselings');
    Route::get('/deemed-hospital-details', [UgFrontController::class, 'deemed_hospital_details'])->name('ug.deemed_hospital_details');
    Route::get('/closing-rank', [UgFrontController::class, 'closing_rank'])->name('ug.closing_rank');
    Route::get('/closing-rank-details', [UgFrontController::class, 'closing_rank_details'])->name('ug.closing_rank_details');
    Route::get('/bond-details', [UgFrontController::class, 'bond_details'])->name('ug.bond_details');
    Route::get('/stipend-details', [UgFrontController::class, 'stipend_details'])->name('ug.stipend_details');
    Route::get('/fee-details', [UgFrontController::class, 'fee_details'])->name('ug.fee_details');
    Route::get('/state-wise-counselings', [UgFrontController::class, 'state_wise_counselings'])->name('ug.state_wise_counselings');
    Route::get('/state-wise-counseling-details-andhra', [UgFrontController::class, 'state_wise_counseling_details'])->name('ug.state_wise_counseling_details_andhra');
    Route::get('/state-wise-counseling-details', [UgFrontController::class, 'state_wise_counseling_details'])->name('ug.state_wise_counseling_details')->middleware("checkSubscription");

    Route::get('/state-document', [UgFrontController::class, 'state_document'])->name('ug.state_document');


    Route::get('/student-report', [UgFrontController::class, 'student_report'])->name('ug.student_report');
    Route::post('/student-report-details', [UgFrontController::class, 'student_report_details'])->name('ug.student_report_details');
    Route::post('/student-report-closing-rank-details', [UgFrontController::class, 'student_report_closing_rank_details'])->name('ug.student_report_closing_rank_details');


    Route::get('/all-india-stipend-details', [UgFrontController::class, 'all_india_stipend_details'])->name('ug.all_india_stipend_details')->middleware("checkSubscription");
    Route::get('/all-india-fee-details', [UgFrontController::class, 'all_india_fee_details'])->name('ug.all_india_fee_details')->middleware("checkSubscription");
    Route::get('/all-india-closing-rank-details', [UgFrontController::class, 'all_india_closing_rank_details'])->name('ug.all_india_closing_rank_details')->middleware("checkSubscription");

    Route::get('/seat-matrix', [UgFrontController::class, 'seat_matrix'])->name('ug.seat_matrix');
    Route::get('/seat-matrix-details', [UgFrontController::class, 'seat_matrix_details'])->name('ug.seat_matrix_details');
    Route::get('/fees-stipend-bond', [UgFrontController::class, 'fees_stipend_bond'])->name('ug.fees_stipend_bond');

    // Filters
    Route::get('/get_sessions', [UgFrontController::class, 'get_sessions'])->name('ug.get_sessions');
    Route::get('/get_rounds', [UgFrontController::class, 'get_rounds'])->name('ug.get_rounds');
    Route::get('/get_quota', [UgFrontController::class, 'get_quota'])->name('ug.get_quota');
    Route::get('/get_categories', [UgFrontController::class, 'get_categories'])->name('ug.get_categories');
    Route::get('/get_states', [UgFrontController::class, 'get_states'])->name('ug.get_states');
    Route::get('/get_institutes', [UgFrontController::class, 'get_institutes'])->name('ug.get_institutes');
    Route::get('/get_institute_types', [UgFrontController::class, 'get_institute_types'])->name('ug.get_institute_types');
    Route::get('/get_courses', [UgFrontController::class, 'get_courses'])->name('ug.get_courses');

});





