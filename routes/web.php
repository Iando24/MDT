<?php
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\ReturnVideoController;
use App\Http\Controllers\SMSController;
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

Route::get('/', function ()
{
    return view('auth.login');
});
Route::get('privacy-policy', 'HomeController@privacy')->name('privacy');
Route::get('email-verified', 'HomeController@emailverified')->name('email-verified');
Route::get('/upload-data', 'Client\ClientController@uploadData')->name('upload-data');
Route::get('/upload-assigned', 'Client\ClientController@uploadDataForAssignedSchoolMDT')->name('upload-to-assigned-mdt');
Route::get('/black-list', 'Client\ClientController@blackList')->name('black-list');
Route::get('/clear',
	function(){

		Artisan::call('config:clear');
		Artisan::call('cache:clear');
		Artisan::call('config:cache');
	}
);

Auth::routes();



Route::group([
    'middleware'    => ['auth'],
    'prefix'        => 'client',
    'namespace'     => 'Client'
], function ()
{
    Route::get('/dashboard', 'ClientController@index')->name('client.dashboard');
	Route::get('/profile', 'ClientController@edit')->name('client-profile');
	Route::post('/admin-update', 'ClientController@update')->name('client-update');


	//User Routes
	Route::resource('clients','ClientController');
	Route::post('get-clients', 'ClientController@getClients')->name('admin.getClients');
	Route::post('get-client', 'ClientController@clientDetail')->name('admin.getClient');
	Route::get('client/delete/{id}', 'ClientController@destroy');
	Route::get('client-students/{id}', 'ClientController@students')->name("client-students");
	Route::get('student-quizzes/{id}', 'ClientController@quizzes')->name("student-quizzes");
	Route::get('quiz-answers/{id}', 'ClientController@answers')->name("quiz-answers");
	Route::post('delete-selected-clients', 'ClientController@deleteSelectedClients')->name('admin.delete-selected-clients');

	//User Routes
	Route::resource('questions','QuestionController');
	Route::post('get-questions', 'QuestionController@getClients')->name('admin.getQuestions');
	Route::post('get-question', 'QuestionController@clientDetail')->name('admin.getQuestion');
	Route::get('question/delete/{id}', 'QuestionController@destroy');
	Route::post('delete-selected-questions', 'QuestionController@deleteSelectedClients')->name('admin.delete-selected-questions');

	//schools Routes
	Route::resource('schools','SchoolController');
	Route::post('get-schools', 'SchoolController@getClients')->name('admin.getSchools');
	Route::post('get-school', 'SchoolController@clientDetail')->name('admin.getSchool');
	Route::get('school/delete/{id}', 'SchoolController@destroy');
	Route::post('delete-selected-schools', 'SchoolController@deleteSelectedClients')->name('admin.delete-selected-schools');

	//Buses Routes
	Route::resource('buses','BussController');
	Route::post('get-buses', 'BussController@getClients')->name('admin.getBuses');
	Route::post('get-buss', 'BussController@clientDetail')->name('admin.getBuss');
	Route::get('buss/delete/{id}', 'BussController@destroy');
	Route::post('delete-selected-buses', 'BussController@deleteSelectedClients')->name('admin.delete-selected-buses');

	//Mdt Routes
	Route::resource('mdt','MdtController');
	Route::post('get-mdts', 'MdtController@getClients')->name('client.getMdts');
	Route::post('get-mdt', 'MdtController@clientDetail')->name('client.getMdt');
	Route::get('mdt/delete/{id}', 'MdtController@destroy');
	Route::post('delete-selected-mdts', 'MdtController@deleteSelectedClients')->name('client.delete-selected-mdts');


	//Notification Route
	Route::resource('notification', 'NotificationController');

		//Attendance Route

		Route::resource('attendances', 'AttendanceController');

		//User Route
		Route::resource('users', UserController::class);

		//Message Route
		Route::resource('messages', 'MessageController');

		//Information Route

		Route::resource('informations', 'InformationController');

		//Grades Route

		Route::resource('grade', 'GradesController');

		//Schedules Route

		Route::resource('shedule', 'ShedulesController');

		//Announcements Route

		Route::resource('announcement', 'AnnouncementsController');

		//Library Route

		Route::resource('librarys', 'LibraryController');


		Route::resource('behavior', 'BehaviorController');

        //Accounting Route

        Route::resource('accounting', 'AccountingController');

        //Teacher Files Route

        Route::resource('teacher_files', 'TeacherfilesController');

        //Class Room Route

        Route::resource('class_room', 'ClassroomController');

        //School Bus Route

        Route::resource('school_bus', 'SchoolbusController');

        //Teacher Files Route

        Route::resource('system_settings', 'SystemsettingsController');

        //Teacher Files Route

        Route::resource('academic_settings', 'AcademicsettingsController');

		//Video Preview

		Route::resource('video_preview', 'VideoPreviewController');






});


Route::group([
    'middleware'    => ['auth', 'is_parent'],
    'prefix'        => 'parent',
    'namespace'     => 'Parent'
], function ()
{
    Route::get('/dashboard', 'ParentsController@index')->name('parent.dashboard');
	Route::get('/profile', 'ParentsController@edit')->name('parent-profile');
	Route::post('/admin-update', 'ParentsController@update')->name('parent-update');

		Route::resource('Notifications', 'NotificationController');

		//Message Route
		Route::resource('Message', 'MessageController');

		//Information Route

		Route::resource('Information', 'InformationController');

		//Grades Route

		Route::resource('Grades', 'GradesController');

		//Schedules Route

		Route::resource('Shedules', 'ShedulesController');

		//Announcements Route

		Route::resource('Announcements', 'AnnouncementsController');

		//Library Route

		Route::resource('Library', 'LibraryController');


});

Route::group([
    'middleware'    => ['auth','is_admin'],
    'prefix'        => 'admin',
    'namespace'     => 'Admin'
], function ()
{
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@edit')->name('admin-profile');
    Route::post('/admin-update', 'AdminController@update')->name('admin-update');
    //Setting Routes
    Route::resource('setting','SettingController');
	Route::any('mdtSettings', 'SettingController@mdtSettings')->name('mdtSettings');
	Route::any('Settingsserver', 'SettingController@server')->name('server');
    Route::any('sendTemperature', 'SettingController@temperature')->name('sendTemperature');
    Route::any('publish', 'SettingController@publish')->name('publish');
	Route::any('SettingsUi', 'SettingController@Ui')->name('ui');
	Route::any('SettingsTemperature', 'SettingController@temperature')->name('temperature');
	Route::any('SettingsAccess', 'SettingController@Access')->name('Access');
	Route::any('SettingsSystem', 'SettingController@System')->name('System');

	//User Routes
	Route::resource('clients','ClientController');
	Route::post('get-clients', 'ClientController@getClients')->name('admin.getClients');
	Route::post('get-client', 'ClientController@clientDetail')->name('admin.getClient');
	Route::get('client/delete/{id}', 'ClientController@destroy');
	Route::get('client-students/{id}', 'ClientController@students')->name("client-students");
	Route::get('student-quizzes/{id}', 'ClientController@quizzes')->name("student-quizzes");
	Route::get('quiz-answers/{id}', 'ClientController@answers')->name("quiz-answers");
	Route::post('delete-selected-clients', 'ClientController@deleteSelectedClients')->name('admin.delete-selected-clients');

	//User Routes
	Route::resource('questions','QuestionController');
	Route::post('get-questions', 'QuestionController@getClients')->name('admin.getQuestions');
	Route::post('get-question', 'QuestionController@clientDetail')->name('admin.getQuestion');
	Route::get('question/delete/{id}', 'QuestionController@destroy');
	Route::post('delete-selected-questions', 'QuestionController@deleteSelectedClients')->name('admin.delete-selected-questions');

	//schools Routes
	Route::resource('schools','SchoolController');
	Route::post('get-schools', 'SchoolController@getClients')->name('admin.getSchools');
	Route::post('get-school', 'SchoolController@clientDetail')->name('admin.getSchool');
	Route::get('school/delete/{id}', 'SchoolController@destroy');
	Route::post('delete-selected-schools', 'SchoolController@deleteSelectedClients')->name('admin.delete-selected-schools');

	//Buses Routes
	Route::resource('buses','BussController');
	Route::post('get-buses', 'BussController@getClients')->name('admin.getBuses');
	Route::post('get-buss', 'BussController@clientDetail')->name('admin.getBuss');
	Route::get('buss/delete/{id}', 'BussController@destroy');
	Route::post('delete-selected-buses', 'BussController@deleteSelectedClients')->name('admin.delete-selected-buses');

	//Mdt Routes
	Route::resource('mdts','MdtController');
	Route::post('get-mdts', 'MdtController@getClients')->name('admin.getMdts');
	Route::post('get-mdt', 'MdtController@clientDetail')->name('admin.getMdt');
	Route::get('mdt/delete/{id}', 'MdtController@destroy');
	Route::post('delete-selected-mdts', 'MdtController@deleteSelectedClients')->name('admin.delete-selected-mdts');


	//Notification Route
	Route::resource('notifications', 'NotificationController');

		//Attendance Route

		Route::resource('attendance', 'AttendanceController');
        Route::any('startEnd', 'AttendanceController@startEnd')->name('startEnd');

		//User Route
		Route::resource('user', UserController::class);

		//Message Route
		Route::resource('message', 'MessageController');

		//Information Route

		Route::resource('information', 'InformationController');

		//Grades Route

		Route::resource('grades', 'GradesController');

		//Schedules Route

		Route::resource('shedules', 'ShedulesController');

		//Announcements Route

		Route::resource('announcements', 'AnnouncementsController');

		//Library Route

        Route::resource('library', 'LibraryController');

        //Behavior Route

        Route::resource('behavior', 'BehaviorController');

        //Accounting Route

        Route::resource('accounting', 'AccountingController');

        //Teacher Files Route

        Route::resource('teacher_files', 'TeacherfilesController');

        //Class Room Route

        Route::resource('class_room', 'ClassroomController');

        //School Bus Route

        Route::resource('school_bus', 'SchoolbusController');

        //Teacher Files Route

        Route::resource('system_settings', 'SystemsettingsController');

        //Teacher Files Route

        Route::resource('academic_settings', 'AcademicsettingsController');

		//Video Preview

		Route::resource('video_preview', 'VideoPreviewController');


		Route::any('notification', 'NotificationController@store')->name('notification');
		Route::any('hing_temperature', 'NotificationController@hing_temperature')->name('hing_temperature');
        Route::any('daily', 'NotificationController@notification')->name('daily');
        Route::any('temp', 'NotificationController@hing_temperature')->name('temp');
		Route::get('returnvideo','ReturnVideoController@returnVideo')->name('returnvideo');
		Route::get('returnsnapshot','ReturnSnapshotController@returnSnapshot')->name('returnsnapshot');


});



	Route::any('send-sms', 'SMSController@send');





	//sitting


