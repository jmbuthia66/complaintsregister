<?php

use Illuminate\Support\Facades\Route;

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
//Everyone Can Access
Route::get('/','FrontendController@index');

Route::get('/new-appointment/{doctorId}/{date}','FrontendController@show')->name('create.appointment');

//Patient Route
Route::group(['middleware'=>['auth','Admin']],function()
	{
  Route::post('/book/appointment', 'FrontendController@store')->name('booking.appointment');

  Route::get('/my-booking', 'FrontendController@myBookings')->name('my.booking');
  Route::get('/my-prescription', 'FrontendController@myPrescription')->name('my.prescription');

  Route::get('/user-profile','ProfileController@index');

  Route::post('/profile/store','ProfileController@store')->name('profile.store');

  Route::post('/profile/updateImage','ProfileController@profilePic')->name('profile.pic');
});


Route::get('/dashboard','DashboardController@index'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','Administrator']],function()
	{
		
      Route::resource('query','QueryController');
      Route::resource('doctor','DoctorController');
		  Route::resource('department','DepartmentController');
      Route::resource('branch','BranchController');
      Route::resource('priority','PriorityController');
      Route::resource('point','PointController');
      Route::resource('complaint','CustomerCareController');
     
      Route::get('/admin/complaints/view','ComplaintController@index')->name('admin.view');
      Route::get('/admin/complaints/create','ComplaintController@create')->name('admin.create');
      Route::get('/admin/complaints/store','ComplaintController@store')->name('admin.complaintstore');
      
       Route::get('/mail','ReportController@high')->name('high.priority');



      Route::get('/low','ReportController@low')->name('low.priority');
      Route::get('/medium','ReportController@medium')->name('medium.priority');
      Route::get('/high','ReportController@high')->name('high.priority');
      Route::get('/export/low/pdf','ReportController@LowPdf')->name('low.pdf');
      Route::get('/export/medium/pdf','ReportController@MediumPdf')->name('medium.pdf');
      Route::get('/export/high/pdf','ReportController@HighPdf')->name('high.pdf');

      Route::get('/received','ReportController@Received')->name('received.status');
      Route::get('/progress','ReportController@Progress')->name('progress.status');
      Route::get('/resolved','ReportController@Resolved')->name('resolved.status');
      Route::get('/not/reveiwed','ReportController@NotReviewed')->name('not.status');
      Route::get('/export/not/reviewed/pdf','ReportController@NotReviewedPdf')->name('not.pdf');
      Route::get('/export/received/pdf','ReportController@ReceivedPdf')->name('received.pdf');
      Route::get('/export/progress/pdf','ReportController@ProgressPdf')->name('progress.pdf');
      Route::get('/export/resolved/pdf','ReportController@ResolvedPdf')->name('resolved.pdf');
    
      
		
});

Route::group(['middleware'=>['auth','CSO']],function(){

   Route::resource('call_record','CallCenterController');
   Route::resource('complaint','ComplaintController');
   Route::resource('suggestion','SuggestionController');
   Route::get('/CSO/individual/view','ComplaintController@indexr')->name('cso.view');
   Route::post('/appointment/check','AppointmentController@check')->name('appointment.check');
   Route::post('/appointment/update','AppointmentController@updateTime')->name('update');
   Route::get('/patient-today','PrescriptionController@index')->name('patients.today');
   Route::post('/prescription','PrescriptionController@store')->name('prescription');
   Route::get('/prescription/{userId}/{date}','PrescriptionController@show')->name('prescription.show');
   Route::get('/prescribed-patients','PrescriptionController@patientsFromPrescription')->name('prescribed.patients');
   Route::resource('callcenter','CallCenterController');
});

Route::group(['middleware'=>['auth','Assignee']],function(){

   Route::get('/Assignee/complaint/view','AssigneeController@indexComplaint')->name('complaint.assignee');
   Route::get('/Assignee/callrecord/view','AssigneeController@indexCallCenter')->name('callcenter.assignee');
   Route::get('/Assignee/callrecord/edit/{id}','AssigneeController@editCallRecord')->name('calledit.assignee');
   Route::get('/Assignee/complaint/edit/{id}','AssigneeController@editComplaint')->name('complaintedit.assignee');

   Route::put('/Assignee/complaint/update/{id}','AssigneeController@updateComplaint')->name('complaintupdate.assignee');
   Route::put('/Assignee/call_record/update/{id}','AssigneeController@updateCallRecord')->name('callupdate.assignee');
   
});

Route::group(['middleware'=>['auth','CSM']],function(){
  Route::get('/CSM/Complaints/View','CSManagerController@ComplaintsIndex')->name('csm.complaints');
  Route::get('/CSM/CallRecords/View','CSManagerController@CallCenterIndex')->name('csm.records');   
});

Route::group(['middleware'=>['auth','Finance']],function(){

   Route::get('/finance/complaint/view','FinanceController@ComplaintsIndex')->name('complaint.finance');
   Route::get('/finance/callrecord/view','FinanceController@CallCenterIndex')->name('callcenter.finance');
   Route::get('/finance/callrecord/edit/{id}','FinanceController@editCallRecord')->name('calledit.finance');
   Route::get('/Finance/complaint/edit/{id}','FinanceController@editComplaint')->name('complaintedit.finance');

   Route::put('/finance/complaint/update/{id}','FinanceController@updateComplaint')->name('complaintupdate.finance');
   Route::put('/finance/call_record/update/{id}','FinanceController@updateCallRecord')->name('callupdate.finance');
   
});