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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'CategoryController');

Route::resource('certificates', 'CertificateController');

Route::resource('courses', 'CourseController');

Route::resource('courseProgresses', 'Course_progressController');

Route::resource('roles', 'RoleController');

Route::resource('supportDocuments', 'Support_documentController');

Route::resource('users', 'UserController');

Route::resource('courseProgresses', 'Course_progressController');

Route::resource('reportAConcerns', 'Report_a_concernController');

Route::resource('enrollments', 'EnrollmentController');

Route::resource('courseUsers', 'CourseUserController');

// Route::resource('courseUsers', 'CourseUserController');

// Route::resource('courseUsers', 'CourseUserController');

// Route::resource('courseUsers', 'CourseUserController');

Route::resource('createcourses', 'CreatecourseController');