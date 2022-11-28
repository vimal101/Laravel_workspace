<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\form;
use App\Http\Controllers\tataController;
use App\Http\Controllers\MemberController;

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





/*one  to one relation  */
Route::get("/onetoone",[tataController:: class,'newdata']);






/*final login system in the laravel*/

//Route::get('/loginhello',[UserController:: class,'loginpage']);
//Route::view('/Showloginpage','loginsuccess');
Route::view('profile','profile');
Route::post('success',[UserController:: class,'showDataofLogin']);
Route::get('logout' ,[UserController:: class,'logout']);
Route::get('Showloginpage' ,[UserController:: class,'loginpageshow']);





Route::get('posts',[PostController:: class,'postList']);
Route::get('create-post',[PostController:: class,'createPost']);
Route::post('add-post',[PostController:: class,'addPost']);
Route::get('edit-post/{id}',[PostController:: class,'editPost']);
Route::post('update-post',[PostController:: class,'updatePost']);
Route::get('delete-post/{id}',[PostController:: class,'deletePost']);














/* created data and save and display the data    */

Route::get('table',[tataController::class,'show']);
Route::view('add','add_tata');
Route::post('addition',[tataController:: class,'adddata']);
Route::get('delete/{id}',[tataController:: class,'delete']);
Route::get('edit/{id}',[tataController:: class,'editshow']);
Route::post('update',[tataController:: class,'updatedata']);
/*  show list by an annother way::*/
Route:: get('show',[tataController:: class,'listing']);








Route::get('apicall',[UserController:: class,'useofapi']);


/*data base */
Route::get('getData',[employeecontroller:: class,'getData']);  
Route::get('urlindex',[usercontroller:: class,'index']);


/*for  group  middleware */
Route::view('login','login')->middleware('singlepage');
Route::view('contect','contect');
Route::group(['middleware'=>['ageckeck']],function(){
	Route::view('contect','contect');
});







Route::view('/noaccess','noaccess');




route::get('/user',function(){


return view('user');
});


Route::get('/', function () {
    return view('welcome');
});



/*Route::get('/login', function () {
    return view('login');
});	
*/

/*
Route::get('/', function(){

return http_redirect("login");

});*/


/*
Route::get('/{name}', function ($name) {

echo $name;
    return view('welcome');

    
});*/





/*
Route::get("login",'/login');*/
    


Route::get("sentance",[UserController:: class ,'arraylistofdata']);

Route::get("sentance",[UserController:: class ,'conditionsentance']);
Route::get("array",[UserController:: class,'arrayshow']);
Route:: get("control",[usercontroller:: class,'show']);
Route::get("users/{username}",[usercontroller:: class,'Sgainshow']);
Route::view("contect",'contect');
Route:: post("/add-user",[usercontroller:: class,'addUser']);

/*
Route::get('/users',function(){

	return view('user');
});*/

//Route::view("use","user");

Route::view("/users",'user');



// my route
Route::get("/hello",[form:: class,'loginget']);
Route::post("/login-user",[form:: class,'userLogin']);










