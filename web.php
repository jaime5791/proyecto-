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

//rutas
Route::middleware(['auth'])->group(function() {

//roles

	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('has.permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('has.permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('has.permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('has.permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('has.permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('has.permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('has.permission:roles.edit');

//playas

	Route::post('playas/store', 'PlayaController@store')->name('playas.store')
		->middleware('has.permission:playas.create');

	Route::get('playas', 'PlayaController@index')->name('playas.index')
		->middleware('has.permission:playas.index');

	Route::get('playas/create', 'PlayaController@create')->name('playas.create')
		->middleware('has.permission:playas.create');

	Route::put('playas/{playa}', 'PlayaController@update')->name('playas.update')
		->middleware('has.permission:playas.edit');

	Route::get('playas/{playa}', 'PlayaController@show')->name('playas.show')
		->middleware('has.permission:playas.show');

	Route::delete('playas/{playa}', 'PlayaController@destroy')->name('playas.destroy')
		->middleware('has.permission:playas.destroy');

	Route::get('playas/{playa}/edit', 'PlayaController@edit')->name('playas.edit')
		->middleware('has.permission:playas.edit');

//users

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('has.permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('has.permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('has.permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('has.permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('has.permission:users.edit');


	//Profile
	Route::get ('/home/{id}/leer', function($id){

	$profile =  App\Profile::all();	
	$user =  App\User::find($id);

	foreach ($users->$profiles as $profile) {
		return  $profile->vehiculo_viajes;
    }

});

/*
	Route::get ('profiles', 'ProfileController@index'); 
	Route::get ('crear', 'ProfileController@create')->name('profiles.create'); 
*/
	Route::resource('/profiles', 'ProfileController');

	Route::resource('/locations', 'LocationController');

	Route::resource('/posts', 'PostController');

	Route::resource('/images', 'ImageController');
	
	Route::get('/prueba', function(){
		$user = Auth::user();

		return $user->profile->id;

	});

});