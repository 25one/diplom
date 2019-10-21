<?php

/*Route::get('/', 'Frontend\FrontController@indexAction')→name('frontend-main');
 
Route::get('/reports', 'Frontend\ReportsController@indexAction')>name('frontend-reports'); 
Route::get('/admin', 'Backend\MainController@indexAction')→name('backendmain');
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/surgery', 'SurgeryController@Surgeryindex');

Route::get('/memoris', 'MemorisController@Surgeryindex');

Route::get('/skills', 'SkillsController@Surgeryindex');

Route::get('/operational', 'OperationalController@Planoperindex');

Route::get('/memorisplan', 'MemorisplanController@Planoperindex');

Route::post('/memorisplan', 'MemorisplanController@postAction');

Route::get('/skillsplan', 'SkillsplanController@Planoperindex');

Route::get('/topclasses', 'TopclassesController@Mainindex');

Route::get('/teacher', 'TeacherController@Teacherindex');

Route::get('/firstgrade', 'FirstController@Firstindex');

Route::get('/firstcoursen', 'FirstController@Firstcoursen');

Route::get('/surgerycoursen', 'FirstController@Surgerycoursen');




Route::get('/inputforms', 'InputformsController@Formindex')->name('inputforms');
Route::post('/inputforms', 'InputformsController@postAction')->name('akademiya');

Route::get('/inputformsday', 'InputformsdayController@Formindex')->name('inputformsday');
Route::post('/inputformsday', 'InputformsdayController@postAction')->name('inputformsday');



Route::get('/formssurgery', 'FormssurgeryController@Formssurgery')->name('formssurgery');
Route::post('/formssurgery', 'FormssurgeryController@postsurgery')->name('formssurgery');


Route::get('/formssurgeryday', 'FormssurgerydayController@Formindex')->name('formssurgeryday');
Route::post('/formssurgeryday', 'FormssurgerydayController@postAction')->name('formssurgeryday');


Route::get('/formspractice', 'FormspracticeController@Practicegetsurgery')->name('formspractice');
Route::post('/formspractice', 'FormspracticeController@Practicesurgery')->name('formspractice');

Route::get('/formspracticeday', 'FormspracticedayController@Practicegetsurgery')->name('formspractice');
Route::post('/formspracticeday', 'FormspracticedayController@Practicesurgery')->name('formspractice');

Route::get('/nightworkday', 'FormsdayController@Getsurgery')->name('nightworkday');
Route::post('/nightworkday', 'FormsdayController@Postsurgery')->name('nightworkday');



Route::get('/nightwork', 'FormsnightController@Nightsurgery')->name('nightwork');
Route::post('/nightwork', 'FormsnightController@Worksurgery')->name('nightwork');

Route::get('/students', 'StudentsController@indexAction');


Route::post('/students/diagnoz', 'StudentsController@studentAction');
Route::get('/archive', 'ArchiveController@ArchiveAction');
Route::get('/user_profile', 'ProfileController@profileAction');
Route::post('/user_profile', 'ProfileController@userAction')->name('user_profile');

Route::post('/user_profile_update/{userprofile}', 'ProfileController@userUpdate')->name('user_profile_update');

Route::get('/download_profile', 'DownloadController@downloadAction');
Route::post('/download_profile', 'DownloadController@downloadIndex')->name('download_profile');
Route::get('/studentsextr', 'StudentsextrController@studentextrdIndex')->name('studentsextr');


//Route::get('/student', 'StudentController@showAction');
//Route::get('/teacher', 'MainController@teacherAction');
//Route::get('/manager', 'MainController@managerAction');


Route::group (['namespace'=>'Admink', 'middleware'=>['auth']], function(){
Route::get('/admink', 'DashboardController@dashboard')->name('admink.index');

Route::get('/admink/course/{course}/{form}', 'OnecourseController@getCourse');

//Route::get('/admink.onecourse', 'OnecourseController@getCourse')->name('admink.index');
Route::get('/admink.user_details/{details}', 'DetailsoneController@getDetails')->name('admink.user_details');

//Route::post('/user_profile_update/{userprofile}', 'ProfileController@userUpdate')->name('user_profile_update');

Route::get('/admink.user_download', 'DownloadoneController@getDetails')->name('admink.user_download');

Route::get('/admink.reportoneochno', 'ReportoneController@getReport')->name('admink.reportoneochno');

});

