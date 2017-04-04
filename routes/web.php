<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function () {

  Route::get('/users', 'UserController@index')->name('admin.users.index');
  Route::get('/users/create', 'UserController@create')->name('admin.users.create');
  Route::get('/users/edit/{id}', 'UserController@edit')->name('admin.users.edit');
  Route::post('/users/update/{id}', 'UserController@update')->name('admin.users.update');
  Route::post('/users/store', 'UserController@store')->name('admin.users.store');
  Route::get('/users/destroy/{id}', 'UserController@destroy')->name('admin.users.destroy');  

  Route::get('/exercises', 'ExerciseController@index')->name('admin.exercises.index');
  Route::get('/exercises/create', 'ExerciseController@create')->name('admin.exercises.create');
  Route::get('/exercises/edit/{id}', 'ExerciseController@edit')->name('admin.exercises.edit');
  Route::post('/exercises/update/{id}', 'ExerciseController@update')->name('admin.exercises.update');
  Route::post('/exercises/store', 'ExerciseController@store')->name('admin.exercises.store');
  Route::get('/exercises/destroy/{id}', 'ExerciseController@destroy')->name('admin.exercises.destroy');

  Route::get('/exerciselist', 'ExerciseListController@index')->name('admin.exerciselist.index');
  Route::get('/exerciselist/create', 'ExerciseListController@create')->name('admin.exerciselist.create');
  Route::get('/exerciselist/edit/{id}', 'ExerciseListController@edit')->name('admin.exerciselist.edit');
  Route::post('/exerciselist/update/{id}', 'ExerciseListController@update')->name('admin.exerciselist.update');
  Route::post('/exerciselist/store', 'ExerciseListController@store')->name('admin.exerciselist.store');
  Route::get('/exerciselist/destroy/{id}', 'ExerciseListController@destroy')->name('admin.exerciselist.destroy');

  Route::get('/exercisetype', 'ExerciseTypeController@index')->name('admin.exercisetype.index');
  Route::get('/exercisetype/create', 'ExerciseTypeController@create')->name('admin.exercisetype.create');
  Route::get('/exercisetype/edit/{id}', 'ExerciseTypeController@edit')->name('admin.exercisetype.edit');
  Route::post('/exercisetype/update/{id}', 'ExerciseTypeController@update')->name('admin.exercisetype.update');
  Route::post('/exercisetype/store', 'ExerciseTypeController@store')->name('admin.exercisetype.store');
  Route::get('/exercisetype/destroy/{id}', 'ExerciseTypeController@destroy')->name('admin.exercisetype.destroy');

  Route::get('/answers', 'AnswerController@index')->name('admin.answers.index');
  Route::get('/answers/create', 'AnswerController@create')->name('admin.answers.create');
  Route::get('/answers/edit/{id}', 'AnswerController@edit')->name('admin.answers.edit');
  Route::post('/answers/update/{id}', 'AnswerController@update')->name('admin.answers.update');
  Route::post('/answers/store', 'AnswerController@store')->name('admin.answers.store');
  Route::get('/answers/destroy/{id}', 'AnswerController@destroy')->name('admin.answers.destroy');
});

Route::group(['prefix' => 'teacher'], function () {
  Route::get('/login', 'TeacherAuth\LoginController@showLoginForm');
  Route::post('/login', 'TeacherAuth\LoginController@login');
  Route::post('/logout', 'TeacherAuth\LoginController@logout');

  Route::get('/register', 'TeacherAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'TeacherAuth\RegisterController@register');

  Route::post('/password/email', 'TeacherAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'TeacherAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'TeacherAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'TeacherAuth\ResetPasswordController@showResetForm');
});

Route::group(['middleware' => ['web'], 'prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::post('/logout', 'UserAuth\LoginController@logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

Route::group(['middleware' => ['auth:user'], 'prefix' => 'user'], function () {
  Route::get('/exercises', 'ExerciseController@listExercises')->name('user.exercises.listExercises');
  Route::get('/exercises/performExercise/{id}', 'ExerciseController@performExercise')->name('user.exercises.performExercise');
  Route::post('/exercises/send', 'AnswerController@sendAnswer')->name('user.exercises.sendAnswer');

  Route::get('/hint', 'HintController@index')->name('user.hints.index');
  Route::get('/hint/create/{id}', 'HintController@create')->name('user.hints.create');
  Route::get('/hint/edit/{id}', 'HintController@edit')->name('user.hints.edit');
  Route::post('/hint/update/{id}', 'HintController@update')->name('user.hints.update');
  Route::post('/hint/store', 'HintController@store')->name('user.hints.store');
  Route::get('/hint/destroy/{id}', 'HintController@destroy')->name('user.hints.destroy');
  Route::post('/hint/logStore', 'LogHintController@store')->name('user.loghints.store');


  Route::get('/usersSolucions/{id}', 'AnswerController@usersSolucions')->name('user.exercises.usersSolucions');
  Route::post('/usersSolucions/store', 'HintController@storeUsersSolucions')->name('user.hints.storeUsersSolucions');

});

