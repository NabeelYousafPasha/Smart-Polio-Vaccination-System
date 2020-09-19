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

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customlogin/{role}', function(){
	return view('auth.login')->with(['role'=> request()->role]);
})->name('customlogin');


//======================================================================
//Parentref Routes
//======================================================================

Route::get('/parentregistration', function(){
	return view('auth.parentregistration');
})->name('parentregistration');
Route::get('/parent/{parentref}','ParentrefController@edit')->name('parent.edit');
Route::patch('/parent/{parentref}','ParentrefController@edit')->name('parent.update');



//======================================================================
//Children Routes
//======================================================================


Route::get('/listchildren','ChildrenController@index')->name('listchildren');

=======
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/home', [HomeController::class, 'index'])->name('home');
>>>>>>> 43bbc7cb3dfda509bf2bb255f7c6595dfb03ee52
