<?php

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
use App\Project;
use App\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewprojects', function () {
     $works=Project::where('show','=',1)->get();
   //return $works;
   return view('viewprojects',compact('works'));
});

Route::get('/studentprojects', function () {
     $works=Project::where('show','=',1)->get();
   //return $works;
   return view('studentprojects',compact('works'));
});

Route::get('/adminprojects', function () {
     $works=Project::where('show','=',0)->get();
   //return $works;
   return view('adminhome',compact('works'));
});


//project routes
Route::get('/addproject','ProjectsController@index');
Route::post('/posts' ,'ProjectsController@store');
Route::get('/approve/{x}','ProjectsController@changes');
Route::get('/readmore/{x}','ProjectsController@readmore');


//user routes

//signup routes
//Route::post('/reg' ,'UsersController@store');//early testing for signup!!
Route::get('/register' ,'RegistrationController@create');
Route::post('/register' ,'RegistrationController@store');

//login routes
Route::get('/login' ,'SessionsController@create');
Route::post('/login' ,'SessionsController@store');
Route::get('/logout' ,'SessionsController@destroy');

