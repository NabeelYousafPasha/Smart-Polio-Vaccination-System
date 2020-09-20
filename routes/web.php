<?php

use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customlogin/{role}', function(){
	return view('auth.login')->with(['role'=> request()->role]);
})->name('customlogin');


Route::get('/editprofile/{id}', function(){
        return view('dashboard.editprofile')->with([
			'parentref'=> App\User::where('id',auth()->user()->id)->with('parentref')->first()]);
})->name('editprofile');

Route::patch('/profile/{id}','ParentrefController@update')->name('profile.update');


Route::get('/', function(){
	return view('welcome');
})->name('/');


//======================================================================
//Parentref Routes
//======================================================================

Route::get('/parentregistration', function(){
	return view('auth.parentregistration');
})->name('parentregistration');





//======================================================================
//Children Routes
//======================================================================


Route::get('/listchildren','ChildrenController@index')->name('listchildren');
Route::get('/child.create','ChildrenController@create')->name('child.create');
Route::post('/child.store','ChildrenController@store')->name('child.store');
Route::get('/child.edit/{children}','ChildrenController@edit')->name('child.edit');
Route::post('/child.update/{children}','ChildrenController@update')->name('child.update');
Route::get('/child.view/{children}','ChildrenController@show')->name('child.view');
Route::delete('/child.destroy/{children}','ChildrenController@destroy')->name('child.destroy');

