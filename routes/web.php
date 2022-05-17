<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentReg;
use App\Http\Controllers\StudentloginController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\Auth\SocialController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * -------------------------------------
 *  Google Routes
 * -------------------------------------
 *  'Redirect' route goes to 'Google'
 *  'Callback' route accept data from 
 *  'Google'
 * 
 */

 // Google Redirect Route 
Route::get('/auth/google/redirect',[SocialController::class,'googleRedirect'])->name('googleRedirect');

// Google Callback Route
Route::get('/auth/google/callback',[SocialController::class,'googleCallback'])->name('googleCallback');

Route::get('/', function () {
    return view('index');
});

Route::get('/UserIndex', function () {
    return view('UserIndex');
});


Route::get('/program', function () {
    return view('program');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/register', function () {
    return view('register');
});


Route::get('/log', function () {
    return view('log');
});

Route::get('/suggest', function () {
    return view('suggest');
});


Route::get('/visit', function () {
    return view('visit');
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/webdev', function () {
    return view('webdev');
});


Route::get('/customer', function () {
    return view('customer');
});


Route::get('/personal', function () {
    return view('personal');
});

Route::get('/investment', function () {
    return view('investment');
});

Route::get('/freelance', function () {
    return view('freelance');
});



Route::get('/test', function () {
    return view('test');
});


// Route::get('/studentproedit', function () {
//     return view('studentproedit');
// });



// Controller to registration page
Route::post('/register', [StudentReg::class,'val']);

// Controller to log page
Route::post('/log', [StudentloginController::class,'studentlogin']);


route::get('/studentpro',[StudentloginController::class,'checksession']);


// Controller to end usersession
Route::get('/logout', [StudentloginController::class,'endsession']);

//Controller to display student profile info
Route::get('/studentpro', [StudentProfileController::class,'studentinfo']);

Route::get('/test', [StudentProfileController::class,'applicationinfo']);



//Controller to edit student profile info

Route::get('/edit/{id?}',[StudentProfileController::class, 'showdata']); //Controller Working



//Controller to update student changes in db
Route::post('edit',[StudentProfileController::class, 'updatedata']);//Controller Working


// Contact Form Controller
route::post('/contact',[MailController::class,'contactform']);


// Avatar Upload Controller
route::post('/avatar/{id}',[StudentProfileController::class,'avatarupdate'])->name('avatar');


// Admin 

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/allprofessors', function () {
    return view('allprofessors');
});

Route::get('/addprofessor', function () {
    return view('addprofessor');
});

Route::get('/allstudents', function () {
    return view('allstudents');
});

Route::get('/addstudent', function () {
    return view('addstudent');
});


Route::get('/allcourses', function () {
    return view('allcourses');
});

Route::get('/addcourses', function () {
    return view('addcourses');
});


// Class Forms
Route::get('/webdevform', function () {
    return view('webdevform');
});
Route::get('/customerform', function () {
    return view('customerform');
});


Route::get('/personalform', function () {
    return view('personalform');
});

Route::get('/investmentform', function () {
    return view('investmentform');
});

Route::get('/freeform', function () {
    return view('freeform');
});
// Webdev
Route::post('/webdevform', [ApplicantController::class,'application']);


// AdminStudentController
Route::get('/allstudents', [AdminStudentController::class,'adminstudentinfo']);

// AdminStudentEditController
// Route::get('/AdminEditForm', function () {
//     return view('AdminEditForm');
// });

Route::get('/AdminEditForm/{id?}', [AdminStudentController::class,'adminshowdata']);

Route::post('AdminEditForm', [AdminStudentController::class,'adminupdatedata']);

// Getting Info From Applicant Table
Route::get('/admin', [ApplicantController::class,'adminapplicantinfo']);

// Showing Details From Applicant Table
Route::get('/AdminApplicantEditForm/{id?}', [ApplicantController::class,'adminapplicantshowdata']);

// Saving Changes In Applicant Table
Route::post('/AdminApplicantEditForm', [ApplicantController::class,'adminapplicantupdatedata']);


// Deleting Applicant Info

Route::get('delete/{id?}',[AdminStudentController::class,'studentinfodelete']);
