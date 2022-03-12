<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientProfileController;
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

//login

Route::get( '/login', [LoginController::class,'index'] )->name( 'login' );
Route::post( '/login', "LoginController@verify" );
Route::get( '/logout', 'LogoutController@logout' )->name( 'logout' );
Route::get( '/home', 'homeController@index' )->name( 'home' );

Route::group( ['middleware' => ['sess']], function () {

//doctor route
    Route::get( '/doctorDashboard/{id}', ['uses' => 'DoctorController@doctorDashboard'] )->name( 'dashBoard' );
//updateProfile
    Route::get( '/doctor/doctorProfile/{id}', 'DoctorController@doctorProfile' )->name( 'doctorProfile' );
    //Route::post('/doctor/doctorProfile/{id}','DoctorController@updateProfile');

    Route::get( '/doctor/patientDetails/{id}', ['uses' => 'DoctorController@patientDetails'] )->name( 'patientDetails' );
    Route::get( '/doctor/patientDateApprove/{id}', ['uses' => 'DoctorController@patientDetaildate'] )->name( 'patientDetails' );
    Route::post( '/doctor/UpdatePatientDate/{id}', ['uses' => 'DoctorController@UpdatePatientDate'] )->name( 'patientDetails' );
//update
    Route::get( '/doctor/approveAppointment/{id}', ['uses' => 'DoctorController@approveAppointment'] )->name( 'approveAppointment' );
    Route::post( '/doctor/approveAppointment/{id}', ['uses' => 'DoctorController@update'] );

//insert
    Route::get( '/doctor/newApiroment/{id}', ['uses' => 'DoctorController@newApiroment'] )->name( 'newApiroment' );
    Route::post( '/doctor/newApiroment/{id}', ['uses' => 'DoctorController@insertAppointment'] )->name( 'newApiroment' );

    //Route::get('/doctor/newApiroment/{id}',['uses'=>'DoctorController@newApiroment'])->name('newApiroment');
    Route::get( '/doctor/apointmentHistory/{id}', ['uses' => 'DoctorController@apointmentHistory'] )->name( 'apointmentHistory' );
    Route::get( '/doctor/OperationTheatres/{id}', ['uses' => 'DoctorController@operationTheatres'] )->name( 'operationTheatres' );
    Route::get( '/doctor/hospitalAuthority/{id}', ['uses' => 'DoctorController@hospitalAuthority'] )->name( 'hospitalAuthority' );
    Route::get( '/doctor/feedbackReview/{id}', ['uses' => 'DoctorController@feedbackReview'] )->name( 'feedbackReview' );
    Route::get( '/doctor/help/{id}', ['uses' => 'DoctorController@help'] )->name( 'help' );
    Route::get( '/doctor/icuRoom/{id}', ['uses' => 'DoctorController@icuRoom'] )->name( 'icuRoom' );
    Route::get( '/doctor/emergencyRoom/{id}', ['uses' => 'DoctorController@emergencyRoom'] )->name( 'emergencyRoom' );
//change pass
    Route::get( '/doctor/doctorChangePass/{id}', ['uses' => 'DoctorController@doctorChangePass'] )->name( 'doctorChangePass' );
    Route::post( '/doctor/doctorChangePass/{id}', 'DoctorController@updatePassword' );
//update Information
    Route::get( '/doctor/doctorUpdateInformation/{id}', ['uses' => 'DoctorController@doctorUpdateInformation'] )->name( 'doctorUpdateInformation' );

    Route::post( '/doctor/doctorUpdateInformation/{id}', 'DoctorController@updateProfile' );

    Route::get( '/doctor/doctorCheckSalary/{id}', ['uses' => 'DoctorController@doctorCheckSalary'] )->name( 'doctorCheckSalary' );

//insert
    Route::get( '/doctor/immediateTreatment/{id}', ['uses' => 'DoctorController@immediateTreatment'] )->name( 'immediateTreatment' );
    Route::post( '/doctor/immediateTreatment/{id}', ['uses' => 'DoctorController@immediateTreatmentInsert'] )->name( 'immediateTreatment' );

    Route::get( '/doctor/checkReport/{id}', ['uses' => 'DoctorController@checkReport'] )->name( 'checkReport' );

    Route::get( '/doctor/searchPatient/{id}', ['uses' => 'DoctorController@searchPatient'] )->name( 'searchPatient' );
    Route::post( '/doctor/searchPatient/{id}', ['uses' => 'DoctorController@searchPatient'] )->name( 'searchPatient' );

    Route::get( '/SearchCourse/{keyword}', ['uses' => 'DoctorController@searchCourse'] )->name( 'searchPatient' );

    //Route::get("/course-search/{keyword}",[DoctorController::class,'searchCourse']);

//recepsionest route
    Route::get( '/home', 'homeController@index' )->name( 'logout' );
    Route::get( '/reception/dashboard/{id}', 'receptionController@index' );
    Route::get( '/reception/upp', 'receptionController@viewupp' );
    Route::post( '/reception/upp', 'receptionController@upp' );
    Route::get( '/reception/chatbox', 'receptionController@chat' );
    Route::get( '/reception/edit/{id}', 'receptionController@edit' );
    Route::post( '/reception/edit/{id}', 'receptionController@update' );
    Route::get( '/reception/docSche', 'receptionController@schedule' );
    Route::get( '/reception/chngpass/{id}', 'receptionController@chngPass' );
    Route::post( '/reception/upass/{id}', 'receptionController@updatePass' );
    Route::get( '/reception/conadmin', 'receptionController@conAdmin' );
    Route::get( '/reception/condoctor', 'receptionController@conDoctor' );
    Route::get( '/reception/conpatient', 'receptionController@conPatient' );
    Route::get( '/reception/patientsbill', 'receptionController@patientsBill' );
    Route::get( '/reception/createbill', 'receptionController@viewcreatebill' );
    Route::post( '/reception/createbill', 'receptionController@createBill' );
    Route::get( '/reception/rooms', 'receptionController@Rooms' );
    Route::get( '/reception/search', 'receptionController@search' );
    Route::get( '/reception/searchdoc', 'receptionController@viewsearchDoctor' );
    Route::post( '/reception/searchdoc', 'receptionController@searchDoctor' );
    Route::get( '/reception/searchpat', 'receptionController@viewsearchPatient' );
    Route::post( '/reception/searchpat', 'receptionController@searchPatient' );
    Route::get( '/reception/emergency', 'receptionController@Emergency' );
    Route::post( '/reception/emergency', 'receptionController@upEmergency' );
    Route::get( '/reception/discount', 'receptionController@viewDiscount' );
    Route::post( '/reception/discount', 'receptionController@Discount' );
    Route::get( '/reception/trans', 'receptionController@trans' );
    Route::get( '/reception/logout', 'receptionController@logout' );
    Route::get( '/reception/patinfo', 'receptionController@patInfo' );
    Route::get( '/reception/withdraw', 'receptionController@withDraw' );
    Route::get( '/reception/withdraw/ncc', 'receptionController@ncc' );
    Route::get( '/reception/withdraw/bkash', 'receptionController@bkash' );
    Route::get( '/reception/withdraw/dbbl', 'receptionController@dbbl' );
    Route::get( '/reception/review', 'receptionController@review' );
//Route::post('/login','loginController@index');

    //admin session
    Route::group( ['middleware' => ['adminSess']], function () {
        Route::get( '/admin/dashboard', 'adminController@dashboard' )->name( 'admin.dashboard' );
        Route::get( '/admin/addUser', 'UserControllerByAdmin@index' )->name( 'user.index' );
        Route::post( '/admin/addUser', 'UserControllerByAdmin@addUser' )->name( 'user.addUser' );
        Route::get( '/admin/changePassword', 'adminController@changePassword' )->name( 'admin.changePassword' );
        Route::post( '/admin/changePassword', 'adminController@changePasswordVerify' )->name( 'admin.changePasswordVerify' );
        Route::get( '/admin/viewUserList', 'UserControllerByAdmin@viewUserList' )->name( 'user.viewUserList' );
        Route::get( 'admin/viewUserList/search', 'UserControllerByAdmin@liveSearch' )->name( 'user.search' );
        Route::get( '/admin/myProfile', 'adminController@myProfile' )->name( 'admin.myProfile' );
        Route::post( '/admin/myProfile', 'adminController@myProfileVerify' )->name( 'admin.myProfileVerify' );
        Route::get( '/admin/doctorReview', 'UserControllerByAdmin@doctorReview' )->name( 'user.doctorReview' );
        Route::get( '/admin/transactionHistory', 'UserControllerByAdmin@transactionHistory' )->name( 'user.transactionHistory' );
        Route::get( '/admin/userReport', 'UserControllerByAdmin@userReport' )->name( 'user.userReport' );
        Route::get( '/admin/userReport/{id}', 'UserControllerByAdmin@userReportStatus' )->name( 'user.userReportStatus' );
        Route::get( '/admin/editUser/{id}', 'UserControllerByAdmin@editUserView' )->name( 'user.editUserView' );
        Route::post( '/admin/editUser/{id}', 'UserControllerByAdmin@editUser' )->name( 'user.editUser' );
        Route::get( '/admin/patinetRoom', 'RoomController@roomView' )->name( 'room.roomView' );
        Route::get( "/admin/roomBookView/{id}", 'RoomController@roomBookView' )->name( 'room.roomBookView' );
        Route::post( "/admin/roomBookView/{id}", 'RoomController@roomBookVerify' )->name( 'room.roomBookVerify' );
        Route::get( '/admin/viewDetails/{id}', "UserControllerByAdmin@viewUserDetails" )->name( 'user.viewUserDetails' );
        Route::get( '/admin/delete/{id}', "UserControllerByAdmin@deleteUser" )->name( 'user.deleteUser' );
        Route::get( '/admin/block/{id}', "UserControllerByAdmin@blockUser" )->name( 'user.blockUser' );
        Route::get( '/admin/manageSalary', 'UserControllerByAdmin@manageSalaryIndex' )->name( 'user.manageSalaryIndex' );
        Route::post( '/admin/manageSalary', 'UserControllerByAdmin@manageSalary' )->name( 'user.manageSalary' );
        Route::get( '/admin/workSchedul', "UserControllerByAdmin@workSchedulIndex" )->name( 'user.workSchedulIndex' );
        Route::get( '/admin/workSchedul/{id}', "UserControllerByAdmin@workSchedul" )->name( 'user.workSchedul' );
        Route::post( '/admin/image', 'adminController@profilePicture' );
        Route::get( '/admin/updateSalary/{id}', "UserControllerByAdmin@updateSalaryIndex" )->name( 'user.updateSalaryIndex' );
        Route::post( '/admin/updateSalary/{id}', "UserControllerByAdmin@updateSalaryVerify" )->name( 'user.updateSalaryVerify' );
    } );

    //patient route
    Route::get( '/PatientSignup', [PatientProfileController::class,'PatientSignUpIndex'] );

    Route::get( '/PatientDoctor', [PatientProfileController::class,'PatientDoctorPageIndex'] );
    Route::get( '/PatientDoctorInfo', [PatientProfileController::class,'PatientDoctorInfoIndex'] );
    Route::get( '/PatientDoctorContact', [PatientProfileController::class,'PatientDoctorContactIndex'] );
    Route::get( '/PatientDoctorReview',  [PatientProfileController::class,'PatientDoctorReviewIndex'] );

} );
//Route::get('/login',[ PagesController::class,'login'])->name('login');
