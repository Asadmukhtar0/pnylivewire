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


Route::middleware('auth')->group(function(){
	Route::get('/dashboard', 'App\Http\Livewire\Dashboard')->name('dashboard');	
	Route::get('/Students', 'App\Http\Livewire\Student')->name('student');	
	Route::get('/Add/Students', 'App\Http\Livewire\Addstudent')->name('add.student');
	Route::get('/Teahers', 'App\Http\Livewire\Teacher')->name('teachers');	
	Route::get('/Add/Teacher', 'App\Http\Livewire\Addteacher')->name('add.teacher');
	Route::get('/badge', 'App\Http\Livewire\Badge')->name('badge');	
	Route::get('/users', 'App\Http\Livewire\Usermanagmenet\Createuser')->name('create.user');
	Route::get('/create/users', 'App\Http\Livewire\Usermanagmenet\Create')->name('create');	
});
Route::get('/', 'App\Http\Livewire\Login')->name('login');
Route::get('/register', 'App\Http\Livewire\Register')->name('register');
Route::get('/logout',function(){
	Auth::logout();
	return redirect(route('login'));
})->name('logout');
