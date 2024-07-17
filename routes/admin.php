<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CollageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\SchoolNoticeController;
use App\Http\Controllers\StateDocumentController;
use App\Http\Controllers\ExcelImportExportController;
use App\Http\Controllers\SchoolPreviosEventController;
use App\Http\Controllers\SchoolUpcomingEventController;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false]);


Route::group(['middleware' => ['auth', 'can:accessAdminpanel']], function() {
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
  
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('student', CustomerController::class);
    Route::resource('course', CourseController::class);
    Route::resource('collage', CollageController::class);
    
    
   //Evets 
   Route::get('all_events', [SchoolUpcomingEventController::class, 'all_events'])->name('all_events');
    Route::get('upcoming_events', [SchoolUpcomingEventController::class, 'all_events'])->name('all_events');
    Route::resource('upcoming_events', SchoolUpcomingEventController::class);
    Route::resource('previous_events', SchoolPreviosEventController::class);


    

    //Notice
    Route::resource('notice', SchoolNoticeController::class);

    Route::get('enquiry', [FrontController::class, 'all_enquiry'])->name('all_enquiry');

    Route::get('all_contact', [FrontController::class, 'all_contact'])->name('all_contact');
    
    Route::get('/student-bulk-export', [CustomerController::class,'export'])->name('student_bulk_export');
    
    
});
