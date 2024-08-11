<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AizUploadController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\UserController;

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



//Route::get('/deemed', [App\Http\Controllers\Front\FrontController::class, 'new_deemed']);
Route::get('/deemed_fees', [App\Http\Controllers\Front\FrontController::class, 'deemed_fees'])->name('deemed_fees');
Route::get('/deemed_details', [App\Http\Controllers\Front\FrontController::class, 'deemed_details'])->name('deemed_details');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::delete('/aiz-uploader/destroy/{id}', [AizUploadController::class, 'destroy']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');

Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\Front\FrontController::class, 'home'])->name('home_user');
Route::get('/help', [FrontController::class, 'help'])->name('help');
Route::get('/subscription-plans', [FrontController::class, 'subscription_plans'])->name('subscription_plans');
Route::get('/all-india-counselings', [FrontController::class, 'all_india_counselings'])->name('all_india_counselings');
Route::get('/deemed-hospital-details', [FrontController::class, 'deemed_hospital_details'])->name('deemed_hospital_details');
Route::get('/closing-rank', [FrontController::class, 'closing_rank'])->name('closing_rank');
Route::get('/closing-rank-details', [FrontController::class, 'closing_rank_details'])->name('closing_rank_details');
Route::get('/bond-details', [FrontController::class, 'bond_details'])->name('bond_details');
Route::get('/stipend-details', [FrontController::class, 'stipend_details'])->name('stipend_details');
Route::get('/fee-details', [FrontController::class, 'fee_details'])->name('fee_details');
Route::get('/state-wise-counselings', [FrontController::class, 'state_wise_counselings'])->name('state_wise_counselings');
Route::get('/state-wise-counseling-details-andhra', [FrontController::class, 'state_wise_counseling_details'])->name('state_wise_counseling_details_andhra');
Route::get('/state-wise-counseling-details', [FrontController::class, 'state_wise_counseling_details'])->name('state_wise_counseling_details');
Route::get('/about-us', [FrontController::class, 'about_us'])->name('about_us');
Route::get('/term-and-condition', [FrontController::class, 'term_condition'])->name('term_condition');
Route::get('/privacy-policy', [FrontController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/state-document', [FrontController::class, 'state_document'])->name('state_document');
Route::post('rozer/payment/pay-success', [FrontController::class,'payment'])->name('payment.rozer');

Route::get('/student-report', [FrontController::class, 'student_report'])->name('student_report');
Route::post('/student-report-details', [FrontController::class, 'student_report_details'])->name('student_report_details');
Route::post('/student-report-closing-rank-details', [FrontController::class, 'student_report_closing_rank_details'])->name('student_report_closing_rank_details');
// Route::post('/student-report-closing-rank-details_download', [FrontController::class, 'studen_report_download'])->name('student_report_closing_rank_details_download');

Route::get('/all-india-stipend-details', [FrontController::class, 'all_india_stipend_details'])->name('all_india_stipend_details');
Route::get('/all-india-fee-details', [FrontController::class, 'all_india_fee_details'])->name('all_india_fee_details');
Route::get('/all-india-closing-rank-details', [FrontController::class, 'all_india_closing_rank_details'])->name('all_india_closing_rank_details');

Route::get('/user-login', [FrontController::class, 'login'])->name('user-login');
Route::get('/user-register', [FrontController::class, 'register'])->name('user-register');
Route::get('/user_dashboard', [FrontController::class, 'user_dashboard'])->name('user_dashboard');
Route::post('/profile_update', [FrontController::class, 'profile_update'])->name('profile_update');
Route::get('/user-forgot-password', [FrontController::class, 'forgot_password'])->name('forgot_password');


Route::post('otp_send', [FrontController::class, 'otp_send'])->name('otp_send');
Route::post('check_otp',[FrontController::class, 'check_otp'])->name('check_otp');
Route::post('otp_forgot_password',[FrontController::class, 'otp_forgot_password'])->name('otp_forgot_password');


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



