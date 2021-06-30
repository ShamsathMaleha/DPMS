<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Backend\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\LogOutController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\SpecialistController;
use App\Http\Controllers\Backend\User\UserLoginController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\InvoiceController;
use App\Http\Controllers\Frontend\ViewDoctorController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\TransactionController;
use App\Http\Controllers\Backend\TransactionController as backend_transactionController;
use App\Http\Controllers\Frontend\ReviewController;

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

// user


Route::get('/',[UserController::class,'index'])->name('home');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class, 'submit'])->name('register.submit');
Route::get('/login',[UserLoginController::class,'index'])->name('user.login');

//uder doctor
Route::get('/doctor',[ViewDoctorController::class,'userDoctor'])->name('user.doctor');




//doctor
Route::get('doctor/profile/{id}',[DoctorController::class,'doctorProfile'])->name('doctorProfile');


Route::group(['middleware'=>'user-auth'],function(){



//patient profile
Route::get('/patient/profile',[ProfileController::class,'profile'])->name('patient.profile');

//patient update
Route::post('/patient/edit/{id}',[PatientController::class,'update'])->name('patientUpdate');






//logout
Route::get('/logout',[LogOutController::class,'logout'])->name('user.logout');

// userAppointment
Route::get('/appointment/{id}',[AppointmentController::class,'pAppointment'])->name('user.appointment');

//appointment submit
Route::post('/appointmentSubmit',[AppointmentController::class,'pAppointmentSubmit'])->name('user.appointmentSubmit');

// profilecart

Route::get('/edit/profile',[ProfileController::class,'editProfile'])->name('edit.profile');




// appointmentForm
Route::get('/appointment/form',[AppointmentController::class,'pAppointmentForm'])->name('appointment.form');

//appointment create
Route::post('/appointment/create',[AppointmentController::class, 'appointmentCreate'])->name('appointmentCreate');

//checkout
Route::get('/checkout',[AppointmentController::class,'checkout'])->name('checkout');

// transaction
Route::get('/transaction/create/{id}',[backend_transactionController::class,'createTransaction'])->name('createTransaction');


Route::get('/transaction/pay',[backend_transactionController::class,'payTransaction'])->name('payTransaction');


//review


Route::post('/submitReview',[ReviewController::class,'submitReview'])->name('submitReview');

});

// admin doctor appointment
Route::get('/appointment',[AppointmentController::class,'appointment'])->name('admin.appointment');



//admin all appointment
Route::get('/all/appointment',[AppointmentController::class,'allappointment'])->name('all.appointment');

// admin interface
Route::group(['prefix'=>'admin'] ,function ()  {


    Route::get('/',[LoginController::class,'index'])->name('admin.login');

    Route::get('/adminPanel',[LoginController::class,'adminPanel'])->name('admin.panel');



    Route::post('/login', [LoginController::class, 'store'])->name('lo');




    //confrimstatus doctor


Route::get('/confirm/{id}',[AppointmentController::class, 'confirmStatus'])->name('confim.status');




    //cancelstatus doctor


    Route::get('/cancel/{id}',[AppointmentController::class, 'cancelStatus'])->name('cancel.status');



//auth admin

    Route::group(['middleware'=>'admin-auth'],function(){


//report
 Route::get('/report', [AppointmentController::class, 'report'])->name('admin.report');



Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');


// Route::get('/',[DashboardController::class,'index'])->name('admin.home');



Route::get('/doctor',[DoctorController::class,'doctor'])->name('doctor');
Route::get('/doctor/search',[DoctorController::class,'search'])->name('doctors.search');
Route::post('/create',[DoctorController::class, 'doctorCreate'])->name('doctorCreate');
Route::get('/doctorEdit/{id}',[DoctorController::class,'editDoctor'])->name('editDoctor');
Route::post('/doctorEdit/{id}',[DoctorController::class,'update'])->name('updateDoctor');

// /AdminPanel.employeeManage.employeeDelete
Route::get('/doctorDelete/{id}',[DoctorController::class,'Delete'])->name('doctorDelete');

Route::get('/patient',[PatientController::class,'index'])->name('admin.patient');
Route::post('/patient/create',[PatientController::class, 'patientCreate'])->name('patientCreate');
Route::get('/patientDelete/{id}',[PatientController::class,'Delete'])->name('patientDelete');





Route::get('/details',[AppointmentController::class,'details'])->name('details');

Route::get('/register',[RegisterController::class,'index'])->name('admin.register');


// delete appointment

Route::get('/delete/appointment', [AppointmentController::class, 'Delete'])->name('delete.appointment');

Route::get('/specialist',[SpecialistController::class, 'specialist'])->name('specialist');
Route::post('/specialist/create',[SpecialistController::class, 'specialistCreate'])->name('specialist.create');

Route::get('/review',[ProfileController::class, 'review'])->name('review');
Route::get('/transaction',[TransactionController::class, 'transaction'])->name('transaction');
Route::get('/invoice',[InvoiceController::class, 'invoice'])->name('invoice');


//handleStatus transaction


Route::get('/status/{id}',[TransactionController::class, 'handleStatus'])->name('status');




    });

});



