<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RequestMeetingController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\BlockedController;
use App\Http\Controllers\SuperAdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

 Route::get('/create',[ParentController::class,'index'])->name('parent.index');

});
 Route::post('/create',[ParentController::class,'create'])->name('parent.create');
 Route::get('/mystudent/{id}',[ParentController::class,'Student'])->name('my.student');
 Route::get('/delete/parent/{id}', [ParentController::class, 'destroy'])->name('parent.destroy');
 Route::get('/parent/lock/{id}', [ParentController::class,'lock'])->name('parent.lock');
 Route::get('/parent/unlock/{id}',[ParentController::class,'unlock'])->name('parent.unlock');



 Route::get('/student',[StudentController::class,'index'])->name('student.index');
 Route::post('/student',[StudentController::class,'create'])->name('student.create');
 Route::get('/delete/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');


 Route::get('/teacher',[TeacherController::class,'index'])->name('teacher.index');
 Route::post('/teacher',[TeacherController::class,'create'])->name('teacher.create');
 Route::get('/delete/teacher{id}',[TeacherController::class,'destroy'])->name('teacher.destroy');


Route::get('/create/request/meeting',[RequestMeetingController::class,'CreateMeeting'])->name('create.request.meeting');
Route::post('/add/request/meeting',[RequestMeetingController::class,'AddMeeting'])->name('add.request.meeting');
Route::get('/delete/request/{id}',[RequestMeetingController::class,'destroy'])->name('request.destroy');

Route::get('/create/attendence',[AttendenceController::class,'CreateAttendence'])->name('create.attendence');
Route::post('/add/attendence',[AttendenceController::class,'AddAttendence'])->name('add.attendence');
Route::get('/delete/attendence{id}',[AttendenceController::class,'destroy'])->name('attendence.destroy');

Route::get('/create/transportation',[TransportationController::class,'CreateTransportation'])->name('create.transportation');
Route::post('/add/transportation',[TransportationController::class,'AddTransportation'])->name('add.transportation');
Route::get('/destroy/transportation{id}',[TransportationController::class,'destroy'])->name('transportation.destroy');
Route::get('/redirects',[DashboardController::class,'Redirects'])->name('redirects');
//this route for problem when i log out
Route::get('/',[DashboardController::class,'Index'])->name('index.das');
//this route for admin logout
Route::get('/admin/logout',[DashboardController::class,'Adminlogout'])->name('adminlogout');
// this route for parent logout
//all user side data show in parent countroller
Route::get('/parent/logout',[parentController::class,'parentlogout'])->name('parentlogout');
Route::get('/parent/usersideusr',[parentController::class,'CreateUser'])->name('create.user');
Route::get('/parent/usersideteacher',[parentController::class,'UserTeacher'])->name('user.teachers');
Route::get('/parent/usersideattendence',[parentController::class,'UserAttendence'])->name('user.attendence');

//complain
Route::get('/complain',[ComplainController::class,'Complain'])->name('complain.admin');
Route::post('/add/complain',[ComplainController::class,'AddComplain'])->name('add.complain');
Route::get('/newuser',[NewUserController::class,'NewUsers'])->name('new.user');
Route::get('/delete/newuser/{id}', [NewUserController::class, 'destroy'])->name('delete');
Route::get('/delete/unapproved/{id}', [NewUserController::class, 'destroyunapproved'])->name('delete');
Route::get('/blocked',[BlockedController::class,'BlockedUser'])->name('blocked.parent');

Route::post('/admin/approve/{id}', [NewUserController::class, 'approve'])->name('admin.approve');

Route::get('amin/dashboard', [SuperAdminController::class,'SuperAdmin'])->name('admin.dashboard');






// routes/web.php
// Route::group(['middleware' => 'approved'], function () {
//     Route::get('/admin/approve', [AdminApprovalController::class, 'index']);
//     Route::post('/admin/approve/{user}', [AdminApprovalController::class, 'approve'])->name('admin.approve.approve');
// });

// Route::get('/sandnotification',[NewUserController::class,'sandNotification']);


// routes/web.php


	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{
// 		return view('welcome');
// 	});

// });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
