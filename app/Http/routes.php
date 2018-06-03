<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
Route::get('/', [ 'as' => 'gcc', 'uses' => 'PagesController@home']);

Route::get('/company-profile',[ 'as' => 'company-profile', 'uses' =>'PagesController@companyProfile']);

Route::get('/mission-vision', [ 'as' => 'mission-vision', 'uses' =>'PagesController@missionVision']);

Route::get('/accreditation', [ 'as' => 'accreditation', 'uses' =>'PagesController@accreditation']);

Route::get('/clients', [ 'as' => 'clients', 'uses' =>'PagesController@clients']);

Route::get('/corporate-services', [ 'as' => 'corporate-services', 'uses' => 'PagesController@corporateServices']);

Route::get('/contact', [ 'as' => 'contact', 'uses' => 'PagesController@contact']);

Route::get('/theory-test',[ 'as' => 'theory-test', 'uses' => 'PagesController@theoryTest']);

Route::get('/car-driving-course', [ 'as' => 'car-driving-course', 'uses' => 'PagesController@carDriving']);

Route::get('/golden-driving-course', [ 'as' => 'golden-driving-course', 'uses' => 'PagesController@goldenDriving']);

Route::get('/motorcycle-driving-course', [ 'as' => 'motorcycle-driving-course', 'uses' => 'PagesController@motorcycleDriving']);

Route::get('/platinum-driving-course', [ 'as' => 'platinum-driving-course', 'uses' => 'PagesController@platinumDriving']);

Route::get('/heavy-truck-driving-course', [ 'as' => 'heavy-truck-driving-course', 'uses' => 'PagesController@heavytruckDriving']);

Route::get('/heavy-bus-driving-course', [ 'as' => 'heavy-bus-driving-course', 'uses' => 'PagesController@heavybusDriving']);

Route::get('/light-bus-driving-course', [ 'as' => 'light-bus-driving-course', 'uses' => 'PagesController@lightbusDriving']);

Route::get('/forklift-driving-course', [ 'as' => 'forklift-driving-course', 'uses' => 'PagesController@forkliftDriving']);

Route::get('/heavy-forklift-driving-course',[ 'as' => 'heavy-forklift-driving-course', 'uses' =>  'PagesController@heavyForkliftDriving']);

Route::get('/people-of-determination-driving-course', [ 'as' => 'people-of-determination-driving-course', 'uses' =>'PagesController@determinationDriving']);

Route::get('/refresher-driving-course', [ 'as' => 'refresher-driving-course', 'uses' =>'PagesController@refresherDriving']);

Route::get('/gcc-driving-course', [ 'as' => 'gcc-driving-course', 'uses' => 'PagesController@gccDriving']);









Route::get('/vocational-training-solutions', [ 'as' => 'vocational-training-solutions', 'uses' => 'PagesController@vocationalTraining']);

Route::get('/industrial-training-programs', [ 'as' => 'industrial-training-programs', 'uses' => 'PagesController@industrialTraining']);

Route::get('/engineering-mechanical-works-training', [ 'as' => 'engineering-mechanical-works-training', 'uses' => 'PagesController@engineeringMechanicalTraining']);

Route::get('/skill-learning-development-programs', [ 'as' => 'skill-learning-development-programs', 'uses' => 'PagesController@skillPrograms']);


Route::get('/learners-advanced-driving-programs', [ 'as' => 'learners-advanced-driving-programs', 'uses' => 'PagesController@laAdvanceProgram']);

Route::get('/health-safety-consultancy-training', [ 'as' => 'health-safety-consultancy-training', 'uses' => 'PagesController@healthSafetyTraining']);

Route::get('/safety-security-solutions', [ 'as' => 'safety-security-solutions', 'uses' => 'PagesController@safetySecuritySolutions']);

Route::get('/fire-safety-training-solutions', [ 'as' => 'fire-safety-training-solutions', 'uses' => 'PagesController@fireSafetySolutions']);

Route::get('/in-vehicle-monitoring-solution', [ 'as' => 'in-vehicle-monitoring-solution', 'uses' => 'PagesController@inVehicleSolution']);






Route::get('/quality-management-system', [ 'as' => 'quality-management-system', 'uses' => 'PagesController@qualitySystem']);

Route::get('/environmental-management-system', [ 'as' => 'environmental-management-system', 'uses' => 'PagesController@environmentalSystem']);

Route::get('/occupational-health-safety-management-system', [ 'as' => 'occupational-health-safety-management-system', 'uses' => 'PagesController@occupationalHealthSystem']);

Route::get('/food-safety-management-system', [ 'as' => 'food-safety-management-system', 'uses' => 'PagesController@foodSafetySystem']);


Route::get('/information-security-management-system', [ 'as' => 'information-security-management-system', 'uses' => 'PagesController@informationSecuritySystem']);







// Quiz Question and Answers 


Route::get('quiz_qa/{quizTypeId}','QuizController@getQuizQS');


// Authintication routes

// Route::get('/login', [ 'as' => 'login', 'uses' =>'App\Http\Controllers\Auth\AuthController@showLoginForm']);
// Route::post('login',[ 'as' => 'login', 'uses' => 'App\Http\Controllers\Auth\AuthController@showLoginForm@login']);
// //Route::get('logout',[ 'as' => 'logout', 'uses' => 'Auth\AuthController@logout']);



// //Registration Routes

// Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
// Route::post('register','Auth\AuthController@register');


//Password Reset

//Route::get('password/reset/{token}', 'Auth\PasswordController@showResetForm');
//Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//Route::post('password/reset', 'Auth\PasswordController@reset');

// Route::get('/', function () {
//     return view('welcome');
// });
});
Route::auth();

Route::get('/home', 'HomeController@index');



// Backend Files 

Route::get('back/dashboard','Back\DashboardController@getDashboard');
